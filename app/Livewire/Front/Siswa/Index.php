<?php

namespace App\Livewire\Front\Siswa;

use App\Models\Siswa;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithPagination;

    public $userMail;
    public $siswaId;

    public function mount()
    {
        $this->userMail = Auth::user()->email;

        // Ambil data siswa berdasarkan email pengguna yang sedang login
        $siswa = Siswa::where('email', '=', $this->userMail)->first();

        // Isi properti siswaId jika data siswa ditemukan
        $this->siswaId = $siswa ? $siswa->id : null;
    }

    public function render()
    {
        // Ambil semua data siswa untuk ditampilkan di tabel
        $siswas = Siswa::orderBy('nama')->paginate(10);

        return view('livewire.front.siswa.index', [
            'siswas' => $siswas,
        ]);
    }
}
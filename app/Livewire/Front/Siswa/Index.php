<?php

namespace App\Livewire\Front\Siswa;

use App\Models\Siswa;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $userMail;
    public $siswaId; // Tambahkan properti siswaId

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
        return view('livewire.front.siswa.index', [
            'siswa' => Siswa::where('email', '=', $this->userMail)->first(),
        ]);
    }
}
<?php

namespace App\Livewire\Front\Guru;

use App\Models\Guru;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $isOpen = false; // Tambahkan properti ini
    public $search = ''; // Untuk pencarian
    public $rowPerPage = 10; // Jumlah data per halaman

    public function render()
{
    // Ambil semua data guru dengan pencarian berdasarkan nama, nip, gender, kontak, atau email
    $gurus = Guru::where(function ($query) {
            $query->where('nama', 'like', '%' . $this->search . '%')
                  ->orWhere('nip', 'like', '%' . $this->search . '%')
                  ->orWhere('gender', 'like', '%' . $this->search . '%')
                  ->orWhere('kontak', 'like', '%' . $this->search . '%')
                  ->orWhere('email', 'like', '%' . $this->search . '%');
        })
        ->paginate($this->rowPerPage);

    return view('livewire.front.guru.index', compact('gurus'));
}
}
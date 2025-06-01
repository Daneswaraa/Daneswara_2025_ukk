<?php

namespace App\Livewire\Front\Industri;

use App\Models\Siswa;
use App\Models\Industri;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithPagination;

    public $indNama, $indBidUs, $indAlmt, $indKontak, $indEmail, $indWebsite;
    public $isOpen = 0;
    public $rowPerPage = 10;
    public $search;
    public $userMail;

    public function mount()
    {
        $this->userMail = Auth::user()->email;
    }

    public function render()
    {
        $industris = Industri::query()
            ->when($this->search, function ($query) {
                $query->where('nama', 'like', '%' . $this->search . '%')
                      ->orWhere('bidang_usaha', 'like', '%' . $this->search . '%')
                      ->orWhere('alamat', 'like', '%' . $this->search . '%');
            })
            ->orderBy('created_at', 'asc') // <-- ubah disini agar data terbaru muncul di bawah
            ->paginate($this->rowPerPage);

        return view('livewire.front.industri.index', [
            'industris' => $industris,
            'siswa_login' => Siswa::where('email', $this->userMail)->first(),
        ]);
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->indNama = '';
        $this->indBidUs = '';
        $this->indAlmt = '';
        $this->indKontak = '';
        $this->indEmail = '';
        $this->indWebsite = '';
    }

    public function store()
    {
        $this->validate([
            'indNama' => 'required|string|max:255',
            'indBidUs' => 'required|string|max:255',
            'indAlmt' => 'required|string|max:255',
            'indKontak' => 'required|string|max:20',
            'indEmail' => 'required|email',
            'indWebsite' => 'nullable|string|max:255',
        ]);

        Industri::create([
            'nama' => $this->indNama,
            'bidang_usaha' => $this->indBidUs,
            'alamat' => $this->indAlmt,
            'kontak' => $this->indKontak,
            'email' => $this->indEmail,
            'website' => $this->indWebsite,
        ]);

        session()->flash('success', 'Data Industri berhasil disimpan.');

        $this->resetInputFields();
        $this->closeModal();
    }
}

<div>
    <h2>Selamat Datang</h2>
    @if($siswaId)
        <p>ID Siswa: {{ $siswaId }}</p>
    @else
        <p class="text-red-500">Data siswa tidak ditemukan.</p>
    @endif
</div>
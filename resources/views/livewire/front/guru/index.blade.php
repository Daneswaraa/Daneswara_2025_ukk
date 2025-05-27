
<div class="py-24">
  {{-- Card --}}
  <div class="mx-auto bg-white rounded-lg shadow-md overflow-hidden px-4 py-4">

    {{-- tampilan pesan --}}
    <div>
      @if (session()->has('error'))
          <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" 
              class="p-4 bg-red-500 text-white rounded-md">
              {{ session('error') }}
          </div>
      @endif

      @if (session()->has('success'))
          <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" 
              class="p-4 bg-green-500 text-white rounded-md">
              {{ session('success') }}
          </div>
      @endif
    </div>
    {{-- ./tampilan pesan --}}

    {{-- Header Bar: Judul Kiri & Search Kanan --}}
<div class="w-full bg-blue-200 px-6 py-4 rounded-t-lg shadow flex flex-col md:flex-row md:items-center md:justify-between">
    {{-- Judul di kiri --}}
    <div class="text-xl font-bold text-black">
        DAFTAR GURU
    </div>

    {{-- Form search di kanan --}}
    <div class="mt-3 md:mt-0">
        <input wire:model.live="search" 
               type="text" 
               placeholder="Search ..." 
               class="border border-blue-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-black-500 text-black">
    </div>
</div>

    {{-- ./Form Entry dan Searching --}}

    {{-- Table Guru --}}
    <table class="min-w-full bg-white border border-gray-200">
      <thead>
        <tr>
          <th class="px-4 py-2 border-b border-gray-200 text-left text-gray-600">No</th>
          <th class="px-4 py-2 border-b border-gray-200 text-left text-gray-600">Nama</th>
          <th class="px-4 py-2 border-b border-gray-200 text-left text-gray-600">NIP</th>
          <th class="px-4 py-2 border-b border-gray-200 text-left text-gray-600">Gender</th>
          <th class="px-4 py-2 border-b border-gray-200 text-left text-gray-600">Kontak</th>
          <th class="px-4 py-2 border-b border-gray-200 text-left text-gray-600">Email</th>
        </tr>
      </thead>

      <tbody>
        @php
          $no = 0;
        @endphp

        @foreach($gurus as $guru)
          @php
            $no++;
          @endphp
          
          <tr class="hover:bg-gray-100">
            <td class="px-4 py-2 border-b border-gray-200 text-black">{{ $no }}</td>
            <td class="px-4 py-2 border-b border-gray-200 text-black">{{ $guru->nama }}</td>
            <td class="px-4 py-2 border-b border-gray-200 text-black">{{ $guru->nip }}</td>
            <td class="px-4 py-2 border-b border-gray-200 text-black">{{ $guru->gender }}</td>
            <td class="px-4 py-2 border-b border-gray-200 text-black">{{ $guru->kontak }}</td>
            <td class="px-4 py-2 border-b border-gray-200 text-black">{{ $guru->email }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{-- ./Table Guru --}}

    {{-- pagination --}}
    <div class="p-4">
       {{ $gurus->links() }}
    </div>
    {{-- ./pagination --}}
  </div>
  {{-- ./Card --}}
</div>
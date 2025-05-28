<div class="py-24 bg-gray-50 min-h-screen">
  {{-- Card --}}
  <div class="mx-auto max-w-7xl bg-white rounded-lg shadow-lg overflow-hidden px-6 py-6">

    {{-- tampilan pesan --}}
    <div>
      @if (session()->has('error'))
          <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" 
              class="mb-4 p-4 bg-red-600 text-white rounded-md shadow">
              {{ session('error') }}
          </div>
      @endif

      @if (session()->has('success'))
          <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" 
              class="mb-4 p-4 bg-green-600 text-white rounded-md shadow">
              {{ session('success') }}
          </div>
      @endif
    </div>
    {{-- ./tampilan pesan --}}

    {{-- Header Bar: Judul Kiri & Search Kanan --}}
    <div class="w-full bg-blue-100 px-6 py-4 rounded-t-lg shadow flex flex-col md:flex-row md:items-center md:justify-between mb-6">
      {{-- Judul di kiri --}}
      <h2 class="text-2xl font-semibold text-blue-900">
        DAFTAR GURU
      </h2>

      {{-- Form search di kanan --}}
      <div class="mt-4 md:mt-0">
        <input wire:model.live="search" 
               type="text" 
               placeholder="Cari Guru..." 
               class="w-full md:w-64 border border-blue-300 rounded-lg p-2 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
               autocomplete="off"
        >
      </div>
    </div>
    {{-- ./Form Entry dan Searching --}}

    {{-- Table Guru --}}
    <div class="overflow-x-auto">
      <table class="min-w-full table-auto border-collapse border border-gray-200 shadow-sm">
        <thead class="bg-blue-50">
          <tr>
            <th class="px-6 py-3 border-b border-gray-300 text-left text-sm font-semibold text-blue-800 uppercase tracking-wide">No</th>
            <th class="px-6 py-3 border-b border-gray-300 text-left text-sm font-semibold text-blue-800 uppercase tracking-wide">Nama</th>
            <th class="px-6 py-3 border-b border-gray-300 text-left text-sm font-semibold text-blue-800 uppercase tracking-wide">NIP</th>
            <th class="px-6 py-3 border-b border-gray-300 text-left text-sm font-semibold text-blue-800 uppercase tracking-wide">Gender</th>
            <th class="px-6 py-3 border-b border-gray-300 text-left text-sm font-semibold text-blue-800 uppercase tracking-wide">Kontak</th>
            <th class="px-6 py-3 border-b border-gray-300 text-left text-sm font-semibold text-blue-800 uppercase tracking-wide">Email</th>
          </tr>
        </thead>

        <tbody class="bg-white">
          @php $no = 0; @endphp
          @foreach($gurus as $guru)
            @php $no++; @endphp
            <tr class="hover:bg-blue-50 transition duration-200">
              <td class="px-6 py-4 border-b border-gray-200 text-gray-700 text-sm">{{ $no }}</td>
              <td class="px-6 py-4 border-b border-gray-200 text-gray-900 font-medium">{{ $guru->nama }}</td>
              <td class="px-6 py-4 border-b border-gray-200 text-gray-700 text-sm">{{ $guru->nip }}</td>
              <td class="px-6 py-4 border-b border-gray-200 text-gray-700 text-sm">{{ $guru->gender }}</td>
              <td class="px-6 py-4 border-b border-gray-200 text-gray-700 text-sm">{{ $guru->kontak }}</td>
              <td class="px-6 py-4 border-b border-gray-200 text-gray-700 text-sm">{{ $guru->email }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{-- ./Table Guru --}}

    {{-- pagination --}}
    <div class="mt-6 px-4">
       {{ $gurus->links() }}
    </div>
    {{-- ./pagination --}}
  </div>
  {{-- ./Card --}}
</div>

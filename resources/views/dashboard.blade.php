<x-layouts.app :title="__('Dashboard')">
    <div class="max-w-7xl mx-auto px-6 py-10">
        <!-- Heading -->
        <div class="mb-8 text-center">
            <h1 class="text-4xl font-extrabold text-gray-900">Selamat Datang di Dashboard</h1>
            <p class="mt-2 text-lg text-gray-600">Kelola data siswa PKL, industri, dan laporan dengan mudah.</p>
        </div>

        <!-- Grid Card -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition duration-300">
                <div class="mb-4">
                    <div class="text-blue-600 text-3xl font-bold">📋</div>
                </div>
                <h2 class="text-xl font-semibold text-gray-800">Data PKL</h2>
                <p class="text-gray-600 text-sm mt-2">Pantau aktivitas siswa PKL secara berkala.</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition duration-300">
                <div class="mb-4">
                    <div class="text-green-600 text-3xl font-bold">🏢</div>
                </div>
                <h2 class="text-xl font-semibold text-gray-800">Industri</h2>
                <p class="text-gray-600 text-sm mt-2">Daftar dan info lengkap mitra industri PKL.</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition duration-300">
                <div class="mb-4">
                    <div class="text-yellow-500 text-3xl font-bold">📈</div>
                </div>
                <h2 class="text-xl font-semibold text-gray-800">Laporan</h2>
                <p class="text-gray-600 text-sm mt-2">Rekap hasil kegiatan siswa selama PKL.</p>
            </div>
        </div>

        <!-- Optional Table or Section -->
        <div class="mt-10 bg-white rounded-2xl shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Tabel PKL (Contoh)</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full text-left text-sm border border-gray-200">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Kelas</th>
                            <th class="px-4 py-2">Industri</th>
                            <th class="px-4 py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="border-t">
                            <td class="px-4 py-2">Ahmad R.</td>
                            <td class="px-4 py-2">XII RPL 1</td>
                            <td class="px-4 py-2">PT. Teknologi Nusantara</td>
                            <td class="px-4 py-2 text-green-600">Aktif</td>
                        </tr>
                        <tr class="border-t">
                            <td class="px-4 py-2">Putri A.</td>
                            <td class="px-4 py-2">XII RPL 2</td>
                            <td class="px-4 py-2">CV. Digital Media</td>
                            <td class="px-4 py-2 text-yellow-500">Menunggu</td>
                        </tr>
                        <!-- Tambahkan baris sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.app>

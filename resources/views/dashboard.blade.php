<x-layouts.app :title="__('Dashboard')">
    <div class="min-h-screen bg-gray-900 text-gray-100 flex flex-col justify-center items-center py-10 px-6">
        <div class="mb-12 text-center">
            <h1 class="text-5xl font-extrabold text-blue-400 leading-tight tracking-wide">
                Selamat Datang, {{ auth()->user()->name }}
            </h1>
            <p class="mt-4 text-xl text-gray-300">
                Role Anda: <strong class="text-blue-300">{{ auth()->user()->getRoleNames()->first() }}</strong>
            </p>

            @hasrole('siswa')
                <p class="mt-6 text-xl text-red-500 font-semibold bg-gray-800 p-4 rounded-lg shadow-md">
                    Silahkan buat laporan PKL jika belum dibuat.
                </p>
            @endhasrole
            @hasrole('guru')
                <p class="mt-6 text-xl text-green-500 font-semibold bg-gray-800 p-4 rounded-lg shadow-md">
                    Anda bisa cek laporan PKL siswa Anda.
                </p>
            @endhasrole
        </div>

        <!-- <div class="w-full max-w-4xl bg-gray-800 rounded-lg shadow-xl p-8 mt-8">
            <h2 class="text-3xl font-bold text-gray-200 mb-6 border-b border-gray-700 pb-4">Informasi Penting</h2>
            <p class="text-lg text-gray-400 leading-relaxed">
                Ini adalah area untuk menampilkan informasi atau fitur lain di dashboard Anda.
                Misalnya, statistik, notifikasi, atau tautan cepat ke fitur-fitur utama.
            </p>
            <ul class="mt-6 space-y-3">
                <li class="flex items-center text-gray-300">
                    <svg class="h-6 w-6 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M12 16h.01"></path></svg>
                    <span>Laporan Terbaru</span>
                </li>
                <li class="flex items-center text-gray-300">
                    <svg class="h-6 w-6 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    <span>Notifikasi</span>
                </li>
            </ul>
        </div> -->
    </div>
</x-layouts.app>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Absensi Lab Teknik Komputer</title>
    <meta name="description" content="Sistem Absensi Laboratorium Teknik Komputer">
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body
    class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
        @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif

    <!-- Main Content -->
    <main class="flex flex-col items-center lg:max-w-4xl max-w-[335px] w-full">
        <!-- Logo and Title -->
        <div class="text-center mb-8">
            <div class="flex justify-center mb-4">
                <svg class="w-20 h-20 text-blue-600" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            <h1 class="text-3xl font-bold mb-2 dark:text-white">Sistem Absensi Lab Teknik Komputer</h1>
            <p class="text-gray-600 dark:text-gray-300 mb-6">Catat kehadiran dengan mudah dan efisien</p>
        </div>

        <!-- Feature Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12 w-full">
            <div
                class="bg-white dark:bg-[#1a1a1a] p-6 rounded-lg shadow-sm border border-gray-100 dark:border-gray-800">
                <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2 dark:text-white">Absensi Real-time</h3>
                <p class="text-gray-600 dark:text-gray-400">Catat kehadiran secara real-time dengan sistem yang
                    terintegrasi</p>
            </div>

            <div
                class="bg-white dark:bg-[#1a1a1a] p-6 rounded-lg shadow-sm border border-gray-100 dark:border-gray-800">
                <div
                    class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                        </path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2 dark:text-white">Laporan Lengkap</h3>
                <p class="text-gray-600 dark:text-gray-400">Dapatkan laporan kehadiran lengkap untuk evaluasi dan
                    dokumentasi</p>
            </div>

            <div
                class="bg-white dark:bg-[#1a1a1a] p-6 rounded-lg shadow-sm border border-gray-100 dark:border-gray-800">
                <div
                    class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2 dark:text-white">Manajemen Pengguna</h3>
                <p class="text-gray-600 dark:text-gray-400">Kelola akses pengguna dengan berbagai tingkat wewenang</p>
            </div>
        </div>

        <!-- CTA Section -->
        <div
            class="bg-blue-50 dark:bg-blue-900/20 p-8 rounded-lg border border-blue-100 dark:border-blue-800/50 w-full text-center">
            <h2 class="text-2xl font-bold mb-3 dark:text-white">Mulai Gunakan Sistem Absensi</h2>
            <p class="text-gray-600 dark:text-gray-300 mb-6">Daftarkan diri Anda untuk mulai menggunakan sistem absensi
                lab</p>
            <div class="flex gap-4 justify-center">
                <a href="{{ route('login') }}"
                    class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition">
                    Masuk Sekarang
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="mt-12 w-full lg:max-w-4xl max-w-[335px] text-center text-gray-500 dark:text-gray-400 text-sm">
        <p>&copy; {{ date('Y') }} Laboratorium Teknik Komputer..</p>
        <p>Dibuat dengan sepenuh hati, by: <a href="https://github.com/heronhoga" target="_blank">Hoga</a> | <a
                href="https://github.com/aabdurrohim" target="_blank">Abe</a></p>
    </footer>
</body>

</html>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg border border-gray-200 dark:border-gray-700">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold mb-6 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2 text-blue-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        {{ __('Selamat Datang Admin!') }}
                    </h1>
                    <h1 class="text-xl font-bold mb-6 flex items-center">
                        Jumlah Pengunjung Lab
                    </h1>
                    <!-- Stats Cards -->

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 ">
                        <div class="bg-gradient-to-r from-green-500 to-blue-600 rounded-lg shadow-md p-4 text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-lg opacity-75">Lab RPL</p>
                                    {{ $totalVisitors[1]->total ?? 0 }} <!-- Jaringan -->
                                </div>
                                <i class="bi bi-code-square h-10 w-10 opacity-75"></i>
                            </div>
                        </div>
                        <div class="bg-gradient-to-r from-blue-500 to-yellow-600 rounded-lg shadow-md p-4 text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-lg opacity-75"> Lab Jaringan</p>
                                    {{ $totalVisitors[2]->total ?? 0 }} <!-- Jaringan -->
                                </div>
                                <i class="bi bi-diagram-3 h-10 w-10 opacity-75"></i>
                            </div>
                        </div>
                        <div class="bg-gradient-to-r from-red-500 to-blue-600 rounded-lg shadow-md p-4 text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-lg opacity-75">Lab Embedded</p>
                                    {{ $totalVisitors[3]->total ?? 0 }} <!-- Jaringan -->
                                </div>
                                <i class="bi bi-cpu h-10 w-10 opacity-75"></i>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-500 to-purple-600 rounded-lg shadow-md p-4 text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-lg opacity-75">Lab Multimedia</p>
                                    {{ $totalVisitors[4]->total ?? 0 }} <!-- Jaringan -->
                                </div>
                                <i class="bi bi-camera-video h-10 w-10 opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>

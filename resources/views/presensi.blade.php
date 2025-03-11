<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Presensi Laboratorium
        @php
            $labNames = [
                'rpl' => 'Rekayasa Perangkat Lunak',
                'jaringan' => 'Jaringan',
                'embedded' => 'Sistem Tertanam',
                'multimedia' => 'Multimedia',
            ];
            $labTitle = $labNames[$lab] ?? 'Unknown Lab';
        @endphp
        {{ $labTitle }} - Teknik Komputer Universitas Diponegoro
    </title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Noty.js CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/themes/mint.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
    <div class="bg-white border border-gray-200 p-8 rounded-lg shadow-lg max-w-md w-full">
        <!-- Logo -->
        <img src="/undip-logo.png" alt="Lab Logo" class="mx-auto mb-6 h-24" />

        <!-- Title -->
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">
                Presensi Laboratorium
            </h1>
            <p class="text-gray-600 font-semibold">
                {{ $labTitle }}
            </p>
        </div>

        <!-- Form -->
        <form id="presenceForm" method="POST" action="{{ route('presensi.present', ['lab' => $lab]) }}"
            class="space-y-6">
            @csrf
            <!-- NIM Input -->
            <div class="input-group">
                <label for="nim" class="block text-sm font-medium text-gray-700 mb-1">NIM</label>
                <input type="text" id="nim" name="nim" required maxlength="14" inputmode="numeric"
                    title="Please enter a valid 14-digit NIM" placeholder="Masukkan NIM Anda"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '');" autofocus />
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200">
                Submit
            </button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/noty@3.2.0-beta/lib/noty.min.js"></script>
    <script>
        // Cek apakah ada pesan sukses atau error dari session
        @if (session('successMessage'))
            new Noty({
                type: 'success', // Tipe notifikasi
                text: '{{ session('successMessage') }}', // Pesan sukses
                timeout: 3000, // Durasi notifikasi (3 detik)
                progressBar: true, // Tampilkan progress bar
                theme: 'sunset', // Tema notifikasi
                layout: 'topRight', // Posisi notifikasi
            }).show();
        @endif

        @if (session('failMessage'))
            new Noty({
                type: 'error', // Tipe notifikasi
                text: '{{ session('failMessage') }}', // Pesan error
                timeout: 3000, // Durasi notifikasi (3 detik)
                progressBar: true, // Tampilkan progress bar
                theme: 'sunset', // Tema notifikasi
                layout: 'topRight', // Posisi notifikasi
            }).show();
        @endif
    </script>

</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
            Presensi Laboratorium 
            @php
                $labNames = [
                    'rpl' => 'Rekayasa Perangkat Lunak',
                    'jaringan' => 'Jaringan',
                    'embedded' => 'Sistem Tertanam',
                    'multimedia' => 'Multimedia'
                ];
                $labTitle = $labNames[$lab] ?? 'Unknown Lab';
            @endphp
            {{ $labTitle }} - Teknik Komputer Universitas Diponegoro
        </title>

        @vite(['resources/css/app.css'])
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    </head>
    <body class="h-screen flex items-center justify-center relative">
        @if (!empty($failMessage))
            <div>
                Pesan: {{ $failMessage }}
            </div>
        @endif

        @if (!empty($successMessage))
        <div>
            Pesan: {{ $successMessage }}
        </div>
    @endif

        <div class="border border-black p-6 rounded-lg shadow-lg">
            <img src="/undip-logo.png" alt="Lab Logo" class="mx-auto mb-4 h-20" />

            <div class="form-card text-center">
                <div class="lab-title font-bold text-lg mb-4">
                    Presensi Laboratorium {{ $labTitle }}
                </div>

                <form id="presenceForm" method="POST" class="space-y-4" action="{{ route('presensi.present', ['lab' => $lab]) }}">
                    @csrf
                    <div class="input-group flex flex-col">
                        <label for="nim" class="text-left font-semibold">NIM</label>
                        <input
                            type="text"
                            id="nim"
                            name="nim"
                            required
                            maxlength="14"
                            inputmode="numeric"
                            title="Please enter a valid 14-digit NIM"
                            placeholder="Enter your NIM"
                            class="border p-2 rounded w-full"
                        />
                    </div>
                    <button type="submit" class="bg-blue-500 text-black px-4 py-2 rounded hover:bg-blue-600">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </body>
</html>

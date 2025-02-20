@vite(['resources/css/app.css'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
            Presensi Laboratorium @if ($lab == 'rpl') Rekayasa Perangkat Lunak
            @elseif ($lab == 'jaringan') Jaringan @elseif ($lab == 'embedded')
            Sistem Tertanam @elseif ($lab == 'multimedia') Multimedia @endif -
            Teknik Komputer Universitas Diponegoro
        </title>
    </head>
    <body class="h-screen flex items-center justify-center">
        <div class="border border-black p-6 rounded-lg shadow-lg">
            <img
                src="/undip-logo.png"
                alt="Lab Logo"
                class="mx-auto mb-4 h-20"
            />

            <div class="form-card text-center">
                <div class="lab-title font-bold text-lg mb-4">
                    Presensi Laboratorium @if ($lab == 'rpl') Rekayasa Perangkat
                    Lunak @elseif ($lab == 'jaringan') Jaringan @elseif ($lab ==
                    'embedded') Sistem Tertanam @elseif ($lab == 'multimedia')
                    Multimedia @endif
                </div>

                <form id="presenceForm" method="POST" class="space-y-4">
                    @csrf
                    <div class="input-group flex flex-col">
                        <label for="nim" class="text-left font-semibold"
                            >NIM</label
                        >
                        <input
                            type="text"
                            id="nim"
                            name="nim"
                            required
                            pattern="[0-9]{14}"
                            title="Please enter a valid 14-digit NIM"
                            placeholder="Enter your NIM"
                            class="border p-2 rounded w-full"
                        />
                    </div>
                    <button
                        type="submit"
                        class="bg-blue-500 text-black px-4 py-2 rounded hover:bg-blue-600"
                    >
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </body>
</html>

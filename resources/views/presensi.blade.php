<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Presensi Laboratorium
            @if ($lab == 'rpl') 
                Rekayasa Perangkat Lunak
            @elseif ($lab == 'jaringan') 
                Jaringan
            @elseif ($lab == 'embedded') 
                Sistem Tertanam
            @elseif ($lab == 'multimedia') 
                Multimedia
            @endif
            - Teknik Komputer Universitas Diponegoro
        </title>
        

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <p>{{$lab}}</p>
    </body>
</html>

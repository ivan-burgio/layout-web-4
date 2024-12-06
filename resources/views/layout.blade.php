<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Buyar">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Layout Web 4</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" /> <!-- Font Awesome -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!-- Animaciones AOS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- JQuery -->
</head>

<body>
    {{-- @include('templates.globo') --}}
    @yield('content')
    {{-- @include('templates.footer') --}}

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
</body>

</html>
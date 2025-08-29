<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    <title>Tema Dinámico</title>
    <style>
      :root {
        --primary: {{ $theme['primary'] }};
        --secondary: {{ $theme['secondary'] }};
        --fontSize: {{ $theme['fontSize'] }};
      }
    </style>
</head>

<body class="bg-primary text-white min-h-screen">
    {{ $slot }}

    @livewireScripts
</body>

</html>
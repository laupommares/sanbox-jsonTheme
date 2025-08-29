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
    <div class="container mx-auto p-6">
        <header class="mb-8">
            <h1 class="text-4xl font-bold mb-4">🎨 Tema Dinámico</h1>
            <p class="text-lg opacity-90">Estilos generados desde JSON</p>
        </header>

        <main class="space-y-6">
            <div class="bg-white text-primary p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-3">Configuración del Tema</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="p-4 border border-primary rounded">
                        <strong>Color Primario:</strong><br>
                        <span class="font-mono">{{ $theme['primary'] }}</span>
                        <div class="w-8 h-8 bg-primary rounded mt-2"></div>
                    </div>

                    <div class="p-4 border border-secondary rounded">
                        <strong>Color Secundario:</strong><br>
                        <span class="font-mono">{{ $theme['secondary'] }}</span>
                        <div class="w-8 h-8 bg-secondary rounded mt-2"></div>
                    </div>

                    <div class="p-4 border border-primary rounded">
                        <strong>Tamaño de Fuente:</strong><br>
                        <span class="font-mono">{{ $theme['fontSize'] }}</span>
                        <p style="font-size: var(--dynamic-font-size)">Texto con tamaño dinámico</p>
                    </div>
                </div>
            </div>

            <div class="bg-secondary text-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-4">Componentes de Ejemplo</h2>
                <div class="space-y-4">
                    <div class="flex gap-4">
                        <button class="bg-primary text-white px-4 py-2 rounded hover:opacity-90">Botón Primario</button>
                        <button class="bg-secondary text-white px-4 py-2 rounded hover:opacity-90">Botón Secundario</button>
                    </div>
                    <div class="p-4 bg-white text-primary rounded">
                        <p>Este contenido usa el color primario como texto sobre fondo blanco.</p>
                    </div>
                </div>
            </div>

            <div class="bg-white text-gray-800 p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-4 text-primary">Cómo Funciona</h2>
                <ol class="list-decimal list-inside space-y-2">
                    <li>El archivo <code class="bg-gray-100 px-2 py-1 rounded">theme.json</code> define los colores y tamaños</li>
                    <li>El <code class="bg-gray-100 px-2 py-1 rounded">ThemeController</code> lee el JSON y lo pasa a las vistas</li>
                    <li>La vista <code class="bg-gray-100 px-2 py-1 rounded">theme/css.blade.php</code> genera CSS dinámico</li>
                    <li>Esta vista principal consume esos estilos automáticamente</li>
                </ol>
                <h3 class="my-4">El flujo es: JSON → Controller → CSS Blade → Variables CSS → Tailwind Classes → Vista Final</h3>
            </div>
        </main>
    </div>

    @livewireScripts
</body>

</html>
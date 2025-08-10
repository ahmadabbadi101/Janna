<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Janna</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-green-900 text-white min-h-screen">
    <div class="p-10">
        <nav class="flex items-center justify-between p-4 border-b border-green-100">
            <div>
                <a href="">
                    <img src="{{ Vite::asset('resources/images/logo.webp') }}" alt="Janna" class="w-12 h-12 object-contain">
                </a>
            </div>

            <div>
                <a href="" class="text-green-100 hover:text-white px-4">Login</a>
            </div>
        </nav>

        <main class="pt-20">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
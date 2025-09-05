<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'COCO Island Holidays') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-white text-gray-900 font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        <header class="bg-primary-500 text-white py-6 mb-8 shadow">
            <div class="container mx-auto px-4 flex items-center justify-between">
                <a href="/" class="text-2xl font-bold">COCO Island Holidays</a>
                <nav class="space-x-4">
                    <a href="/" class="hover:underline">Home</a>
                    <a href="/about" class="hover:underline">About</a>
                    <a href="/packages" class="hover:underline">Packages</a>
                    <a href="/contact" class="hover:underline">Contact</a>
                </nav>
            </div>
        </header>
        <main class="flex-1">
            @yield('content')
        </main>
        <footer class="bg-gray-100 text-center py-6 mt-8 text-gray-600 text-sm">
            &copy; {{ date('Y') }} COCO Island Holidays. All rights reserved.
        </footer>
    </div>
</body>
</html>

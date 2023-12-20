<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alejandro Martinez</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="antialiased ">
    <div class="flex justify-center py-24 px-24 mx-72">
        <div class="w-full md:w-1/2">

            <div>
                <h1 class="text-4xl font-bold mb-4">Header 1</h1>
                <h2 class="text-2xl font-semibold mb-4">Header 2</h2>
                <p class="mb-4">Your paragraph text here.</p>
            </div>
            <nav class="mb-4">
                <ul class="space-y-2">
                    <li><a href="#" class="text-blue-500 hover:text-blue-600">Link 1</a></li>
                    <li><a href="#" class="text-blue-500 hover:text-blue-600">Link 2</a></li>
                    <!-- More list items -->
                </ul>
            </nav>
            <nav class="flex">
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-blue-500 hover:text-blue-600">Link A</a></li>
                    <li><a href="#" class="text-blue-500 hover:text-blue-600">Link B</a></li>
                    <!-- More list items -->
                </ul>
            </nav>
        </div>
        <div class="w-full md:w-1/2">
            <h1 class="text-4xl font-bold mb-4">Header 1</h1>
            <h2 class="text-2xl font-semibold mb-4">Header 2</h2>
            <p class="mb-4">Your paragraph text here.</p>
        </div>
    </div>
</body>

</html>
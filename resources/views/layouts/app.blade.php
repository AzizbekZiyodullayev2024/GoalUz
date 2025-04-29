<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPORTS.UZ</title>

    {{-- ✅ Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- ✅ Font Awesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
          integrity="sha512-... (avtomatik bo‘ladi)" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-white text-gray-900">
    {{-- Header komponenti --}}
    <x-header />

    {{-- Asosiy kontent --}}
    <main>
        @yield('content')
    </main>
</body>
</html>

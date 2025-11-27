<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'Admin Panel — GreenDrop' }}</title>
</head>

<body class="min-h-screen bg-gray-100">

    {{-- Sidebar khusus admin --}}
    <x-admin.sidebar />

    <main class="ml-64">
        {{ $slot }}
    </main>

</body>

</html>

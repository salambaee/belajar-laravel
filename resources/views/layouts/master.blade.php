<!DOCTYPE html>
</html>
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jual Beli Musang')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", rel="stylesheet">
</head>
<body>
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>
<!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>2025 Jual Beli Musang</p>
    </footer>
</body>
</html>
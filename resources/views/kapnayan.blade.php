<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSU-Kapnayan Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container d-flex flex-column align-items-center justify-content-center min-vh-100">
        <div class="card text-center shadow-lg p-4" style="background-color: rgba(255, 255, 255, 0.9); border-radius: 15px; width: 350px;">
            <div class="mb-4">
                <a href="{{ url('/homepage') }}">
                    <img src="{{ asset('images/Kapnayan-logo.png') }}" alt="CSU Logo" class="img-fluid mb-3" style="max-width: 100px;">
                </a>
                <h1 class="h4 fw-bold">KAPNAYAN</h1>
                <p class="text-muted">Caraga State University</p>
            </div>

            @if (Route::has('login'))
                <div class="mb-3 d-grid gap-2">
                    @auth
                        <a href="{{ url('/homepage') }}" class="btn btn-success btn-lg shadow-sm">Homepage</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg shadow-sm">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg shadow-sm">Register</a>
                        @endif

                        <a href="{{ url('/homepage') }}" class="btn btn-success btn-lg shadow-sm">Homepage</a>
                    @endauth
                </div>
            @endif
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

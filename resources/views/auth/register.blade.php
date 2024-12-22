<!-- filepath: /c:/laragon/www/Kapnayan/resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('CSU-Kapnayan Register') }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/sign-in.css') }}">
    <style>
        body {
            font-size: 1.2rem; /* Adjust font size for overall elements */
        }

        .card {
            max-width: 500px; /* Increase card width */
            padding: 2rem; /* Add more padding for spacing */
        }

        .card img {
            max-width: 150px; /* Increase logo size */
        }

        .form-control {
            font-size: 1.2rem; /* Increase input field font size */
            height: 50px; /* Adjust height of input fields */
        }

        .btn {
            font-size: 1.2rem; /* Increase button font size */
            height: 50px; /* Adjust height of buttons */
        }

        #errorMessage {
            font-size: 1rem; /* Slightly increase error message size */
        }
    </style>
</head>
<body>
    <div class="login-container d-flex align-items-center justify-content-center" style="min-height: 100vh; background: url('{{ asset('images/background.jpg') }}') no-repeat center center/cover;">
        <div class="card text-center shadow-lg" style="background-color: rgba(255, 255, 255, 0.9); border-radius: 15px; width: 500px;">
            <div class="mb-4">
                <a href="{{ url('/homepage') }}">
                    <img src="{{ asset('images/Kapnayan-logo.png') }}" alt="CSU Logo" class="img-fluid">
                </a>
                <h1 class="h4 fw-bold mt-3">KAPNAYAN</h1>
                <p class="text-muted">Caraga State University</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />


            <form method="POST" action="{{ route('register') }}" id="registerForm">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" value="{{ old('name') }}" required autofocus>
                </div>

                <!-- ID Number -->
                <div class="mb-4">
                    <input type="text" name="id_number" id="id_number" class="form-control" placeholder="ID Number (e.g., 211-00000)" value="{{ old('id_number') }}" required>
                </div>

                <!-- Email Address -->
                <div class="mb-4">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autocomplete="new-password">
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" required autocomplete="new-password">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100">REGISTER</button>
            </form>

            <hr>

            <!-- Additional Links -->
            <p class="mt-4">
                <a href="{{ route('login') }}" class="btn btn-outline-secondary w-100">Already have an account? Log in</a>
                <a href="{{ url('/homepage') }}" class="btn btn-outline-secondary w-100 mt-3">CONTINUE AS GUEST</a>
            </p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | SMK IT Baitul Aziz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"> <!-- Scripts -->
<style>
    body{
        font-family: 'Poppins', sans-serif;
    }
</style>

</head>

<body class="d-flex justify-content-center align-items-center" style="min-height: 100vh; background-color: #f8f9fa;">

    <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
        <div class="text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo SMK IT Baitul Aziz" width="100">
        </div>

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email / Username</label>
                <input type="text" name="email" class="form-control" id="email"
                    placeholder="Masukkan email atau username" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" name="password" class="form-control" id="password"
                    placeholder="Masukkan kata sandi" required>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Ingat saya</label>
                </div>
                <a href="{{ route('password.request') }}" class="text-decoration-none">Lupa password?</a>
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-3">Masuk</button>
        </form>

        <div class="text-center mt-3">
            <p class="mb-0">Belum punya akun? <a href="{{ route('register') }}" class="text-primary">Daftar</a></p>
        </div>
    </div>

</body>

</html>
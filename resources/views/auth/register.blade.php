<!DOCTYPE html>
<html lang="id">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Akses Ditolak | SMK IT Baitul Aziz</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
                rel="stylesheet">
        <style>
                body {
                        font-family: 'Poppins', sans-serif;
                        background-color: #f8f9fa;
                }
        </style>
</head>

<body class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">

        <div class="card shadow-lg p-4 text-center" style="width: 100%; max-width: 400px;">
                <div class="mb-4 mt-3">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo SMK IT Baitul Aziz" width="80">
                </div>
                <h5><strong>Maaf, Anda tidak dapat mendaftar menjadi Admin.</strong></h5>
                <p class="text-muted">Silakan hubungi teknisi jika Anda membutuhkan akses.</p>

                <a href="https://wa.me/6283126517612"
                        class="btn btn-success d-flex align-items-center justify-content-center gap-2">
                        <i class="fa-brands fa-whatsapp"></i> Hubungi Teknisi
                </a>
                <p class="text-decoration-none mt-3">Punya Akses? <a href="{{ route('login') }}"
                                class="text-decoration-none mt-2">Login</a></p>
        </div>

</body>

</html>
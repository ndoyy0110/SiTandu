<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SITandu - Sistem Tanda Tangan dan Janji Temu')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .blur-background::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: url('{{ asset('images/gambar.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(1px);
            z-index: 0;
            background-position: center 80%;
        }

        .blur-background::after {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .login-card {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
        }

        /* Style untuk button login */
        .custom-login-btn {
            background-color: #FFD66B !important;
            color: #1f2937;
            border: none;
        }

        .custom-login-btn:hover {
            background-color: #FFD66B !important;
            opacity: 0.9;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(255, 214, 107, 0.4);
        }

        .custom-login-btn:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 214, 107, 0.4);
        }
    </style>
</head>
<body class="bg-gray-50">
    @yield('content')
</body>
</html>

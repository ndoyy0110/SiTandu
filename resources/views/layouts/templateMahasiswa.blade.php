<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Saya')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F1F1F1] font-noto min-h-screen flex flex-col">
    <!-- Navigation -->
    <nav class="bg-[#2DAA9E] ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-10">
            </div>
        </div>
    </nav>
    <nav class="bg-[#5CBDB9] ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:grid md:grid-cols-3 items-center py-4 md:py-0 md:h-25 gap-4 md:gap-0">
                <!-- Logo -->
                <div class="flex justify-start">
                    <h1 class="text-[#4D4D4D] text-4xl font-noto font-bold">Sitandu</h1>
                </div>

                <!-- Menu -->
                <div
                    class="flex flex-col md:grid-cols-3 py-4 md:py-0 md:h-25 gap-4 md:gap-0  md:flex justify-center items-center flex-1">
                    <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4">
                        <a href="{{ route('mahasiswa.home') }}"
                            class="text-[#4D4D4D] hover:bg-[#FFDA7A] px-4 py-2 rounded-md text-base font-medium transition duration-200 font-noto whitespace-nowrap {{ request()->routeIs('mahasiswa.home') ? 'bg-[#FFDA7A]' : '' }}">
                            Home
                        </a>
                        <a href="{{ route('mahasiswa.janjiTemu') }}"
                            class="text-[#4D4D4D] hover:bg-[#FFDA7A] px-4 py-2 rounded-md text-base font-medium transition duration-200 font-noto whitespace-nowrap {{ request()->routeIs('mahasiswa.janjiTemu') ? 'bg-[#FFDA7A]' : '' }}">
                            Janji Temu
                        </a>
                        <a href="{{ route('mahasiswa.tandaTangan') }}"
                            class="text-[#4D4D4D] hover:bg-[#FFDA7A] px-4 py-2 rounded-md text-base font-medium transition duration-200 font-noto whitespace-nowrap {{ request()->routeIs('mahasiswa.tandaTangan') ? 'bg-[#FFDA7A]' : '' }}">
                            Tanda Tangan
                        </a>
                        <a href="{{ route('mahasiswa.tracking') }}"
                            class="text-[#4D4D4D] hover:bg-[#FFDA7A] px-4 py-2 rounded-md text-base font-medium transition duration-200 font-noto whitespace-nowrap {{ request()->routeIs('mahasiswa.tracking') ? 'bg-[#FFDA7A]' : '' }}">
                            Tracking
                        </a>
                    </div>
                </div>

                <!-- Pengguna -->
                <div class="flex justify-end relative">
                    <button id="user-menu-button"
                        class="text-[#4D4D4D] text-sm font-medium bg-[#FFDA7A] hover:bg-[#FEF9C2] rounded-md px-6 py-4 flex items-center">
                        Selamat datang, Pengguna
                    </button>
                    <!-- Dropdown Menu -->
                    <div id="user-menu"
                        class="hidden absolute right-0 top-full mt-2 w-56 bg-[white] rounded-md shadow-lg py-1 z-10 border border-gray-200">
                        <div class="px-4 py-2 text-[12px] text-[#4D4D4D] border-b border-gray-100 rounded-md">
                            <p class="font-bold text-[#4D4D4D]">Dosen TRIK</p>
                            <p class="text-[#4D4D4D]">dosen.trik@example.com</p>
                        </div>
                        <div class="border-t border-[#F1F1F1]"></div>
                        <div class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100">
                            <img src="{{ asset('images/log-out.png') }}" alt="Logout Icon" class="w-[18px] h-[16px]">
                            <a href="#" class="text-sm text-red-600">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 font-noto">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="py-4 bg-[#5CBDB9] mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-right">
            <p class="mb-0 text-[#4D4D4D] font-medium">&copy; 2025 SiTandu. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.getElementById('user-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('user-menu');
            menu.classList.toggle('hidden');
        });

        document.addEventListener('click', function(event) {
            const menu = document.getElementById('user-menu');
            const button = document.getElementById('user-menu-button');

            if (!button.contains(event.target) && !menu.contains(event.target)) {
                menu.classList.add('hidden');
            }
        });
    </script>
</body>

</html>

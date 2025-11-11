<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Saya')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Google Fonts - Noto Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Noto Sans', sans-serif;
        }
    </style>

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
                <!-- Logo dan Hamburger Menu -->
                <div class="flex justify-between items-center w-full md:w-auto md:justify-start">
                    <h1 class="text-[#4D4D4D] text-3xl md:text-4xl font-noto font-bold">Sitandu</h1>

                    <!-- Hamburger Menu Button (Mobile Only) -->
                    <button id="mobile-menu-button" class="md:hidden text-[#4D4D4D] p-2 rounded-md bg-[#FFDA7A] hover:bg-[#FEF9C2]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <!-- Menu (Desktop) -->
                <div class="hidden md:flex flex-col md:flex-row justify-center items-center w-full md:w-auto">
                    <div class="flex flex-wrap justify-center gap-2 md:flex-nowrap md:space-x-4">
                        <a href="{{ route('dosen.home') }}"
                           class="text-[#4D4D4D] hover:bg-[#FFDA7A] px-3 py-2 md:px-4 rounded-md text-sm md:text-base font-medium transition duration-200 font-noto whitespace-nowrap {{ request()->routeIs('dosen.home') ? 'bg-[#FFDA7A]' : '' }} relative z-10 cursor-pointer hover:translate-y-[-2px] hover:shadow-md active:translate-y-0">
                            Home
                        </a>
                        <a href="{{ route('dosen.janjiTemu') }}"
                           class="text-[#4D4D4D] hover:bg-[#FFDA7A] px-3 py-2 md:px-4 rounded-md text-sm md:text-base font-medium transition duration-200 font-noto whitespace-nowrap {{ request()->routeIs('dosen.janjiTemu') ? 'bg-[#FFDA7A]' : '' }} relative z-10 cursor-pointer hover:translate-y-[-2px] hover:shadow-md active:translate-y-0">
                            Janji Temu
                        </a>
                        <a href="{{ route('dosen.tandaTangan') }}"
                           class="text-[#4D4D4D] hover:bg-[#FFDA7A] px-3 py-2 md:px-4 rounded-md text-sm md:text-base font-medium transition duration-200 font-noto whitespace-nowrap {{ request()->routeIs('dosen.tandaTangan') ? 'bg-[#FFDA7A]' : '' }} relative z-10 cursor-pointer hover:translate-y-[-2px] hover:shadow-md active:translate-y-0">
                            Tanda Tangan
                        </a>
                        <a href="{{ route('dosen.jadwalMendatang') }}"
                           class="text-[#4D4D4D] hover:bg-[#FFDA7A] px-3 py-2 md:px-4 rounded-md text-sm md:text-base font-medium transition duration-200 font-noto whitespace-nowrap {{ request()->routeIs('dosen.jadwalMendatang') ? 'bg-[#FFDA7A]' : '' }} relative z-10 cursor-pointer hover:translate-y-[-2px] hover:shadow-md active:translate-y-0">
                            Jadwal Mendatang
                        </a>
                        <a href="{{ route('dosen.history') }}"
                           class="text-[#4D4D4D] hover:bg-[#FFDA7A] px-3 py-2 md:px-4 rounded-md text-sm md:text-base font-medium transition duration-200 font-noto whitespace-nowrap {{ request()->routeIs('dosen.history') ? 'bg-[#FFDA7A]' : '' }} relative z-10 cursor-pointer hover:translate-y-[-2px] hover:shadow-md active:translate-y-0">
                            History
                        </a>
                    </div>
                </div>

                <!-- Menu Mobile (Hidden by default) -->
                <div id="mobile-menu" class="hidden md:hidden w-full bg-[#5CBDB9] mt-4 rounded-md shadow-lg">
                    <div class="flex flex-col space-y-2 py-4">
                        <a href="{{ route('dosen.home') }}"
                           class="text-[#4D4D4D] hover:bg-[#FFDA7A] px-4 py-3 rounded-md text-base font-medium transition duration-200 font-noto whitespace-nowrap {{ request()->routeIs('dosen.home') ? 'bg-[#FFDA7A]' : '' }} relative z-10">
                            Home
                        </a>
                        <a href="{{ route('dosen.janjiTemu') }}"
                           class="text-[#4D4D4D] hover:bg-[#FFDA7A] px-4 py-3 rounded-md text-base font-medium transition duration-200 font-noto whitespace-nowrap {{ request()->routeIs('dosen.janjiTemu') ? 'bg-[#FFDA7A]' : '' }} relative z-10">
                            Janji Temu
                        </a>
                        <a href="{{ route('dosen.tandaTangan') }}"
                           class="text-[#4D4D4D] hover:bg-[#FFDA7A] px-4 py-3 rounded-md text-base font-medium transition duration-200 font-noto whitespace-nowrap {{ request()->routeIs('dosen.tandaTangan') ? 'bg-[#FFDA7A]' : '' }} relative z-10">
                            Tanda Tangan
                        </a>
                        <a href="{{ route('dosen.jadwalMendatang') }}"
                           class="text-[#4D4D4D] hover:bg-[#FFDA7A] px-4 py-3 rounded-md text-base font-medium transition duration-200 font-noto whitespace-nowrap {{ request()->routeIs('dosen.jadwalMendatang') ? 'bg-[#FFDA7A]' : '' }} relative z-10">
                            Jadwal Mendatang
                        </a>
                        <a href="{{ route('dosen.history') }}"
                           class="text-[#4D4D4D] hover:bg-[#FFDA7A] px-4 py-3 rounded-md text-base font-medium transition duration-200 font-noto whitespace-nowrap {{ request()->routeIs('dosen.history') ? 'bg-[#FFDA7A]' : '' }} relative z-10">
                            History
                        </a>
                    </div>
                </div>

                <!-- Pengguna -->
                <div class="hidden md:flex justify-center md:justify-end w-full md:w-auto relative mt-4 md:mt-0">
                    <button id="user-menu-button"
                        class="text-[#4D4D4D] text-sm font-medium bg-[#FFDA7A] hover:bg-[#FEF9C2] rounded-md px-4 py-3 md:px-6 md:py-4 flex items-center w-full md:w-auto justify-center">
                        Selamat datang, Pengguna
                    </button>
                    <!-- Dropdown Menu -->
                    <div id="user-menu"
                        class="hidden absolute right-0 top-full mt-2 w-full md:w-56 bg-[white] rounded-md shadow-lg py-1 z-10 border border-gray-200">
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

                <!-- Pengguna Mobile -->
                <div class="md:hidden w-full mt-4">
                    <button id="user-menu-button-mobile"
                        class="text-[#4D4D4D] text-sm font-medium bg-[#FFDA7A] hover:bg-[#FEF9C2] rounded-md px-4 py-3 flex items-center w-full justify-center">
                        Selamat datang, Pengguna
                    </button>
                    <!-- Dropdown Menu Mobile -->
                    <div id="user-menu-mobile"
                        class="hidden mt-2 w-full bg-[white] rounded-md shadow-lg py-1 z-10 border border-gray-200">
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
    </nav>

    <!-- Main Content -->
    <main class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 font-noto">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="py-4 bg-[#5CBDB9] mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:text-right">
            <p class="mb-0 text-[#4D4D4D] font-medium">&copy; 2025 SiTandu. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // User Menu Toggle (Desktop)
        document.getElementById('user-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('user-menu');
            menu.classList.toggle('hidden');
        });

        // User Menu Toggle (Mobile)
        document.getElementById('user-menu-button-mobile').addEventListener('click', function() {
            const menu = document.getElementById('user-menu-mobile');
            menu.classList.toggle('hidden');
        });

        // Close menus when clicking outside
        document.addEventListener('click', function(event) {
            // Mobile Menu
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuButton = document.getElementById('mobile-menu-button');

            if (!mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
            }

            // User Menu (Desktop)
            const userMenu = document.getElementById('user-menu');
            const userMenuButton = document.getElementById('user-menu-button');

            if (!userMenuButton.contains(event.target) && !userMenu.contains(event.target)) {
                userMenu.classList.add('hidden');
            }

            // User Menu (Mobile)
            const userMenuMobile = document.getElementById('user-menu-mobile');
            const userMenuButtonMobile = document.getElementById('user-menu-button-mobile');

            if (!userMenuButtonMobile.contains(event.target) && !userMenuMobile.contains(event.target)) {
                userMenuMobile.classList.add('hidden');
            }
        });
    </script>
</body>

</html> 

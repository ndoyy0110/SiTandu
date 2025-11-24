<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sitandu')</title>

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
    <nav class="bg-[#2DAA9E]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-10">
            </div>
        </div>
    </nav>

    <nav class="bg-[#5CBDB9]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center justify-between py-4 lg:py-0 lg:h-20 gap-4 lg:gap-8">
                <!-- Logo -->
                <div class="flex justify-between items-center w-full lg:w-auto">
                    <h1 class="text-[#4D4D4D] text-2xl sm:text-3xl lg:text-4xl font-noto font-bold">Sitandu</h1>
                </div>

                <!-- Navigation Menu (Desktop) -->
                <div class="hidden lg:flex items-center space-x-8">
                    <!-- Tambahkan menu navigasi di sini jika diperlukan -->
                </div>

                <!-- User Menu -->
                <div class="flex justify-center lg:justify-end items-center relative w-full lg:w-auto">
                    <button id="user-menu-button" class="flex items-center gap-2 sm:gap-3 bg-[#FFDA7A] rounded-lg px-3 sm:px-4 py-2 w-full lg:w-auto justify-center hover:bg-[#FEF9C2] transition duration-200">
                        <div class="w-6 h-6 sm:w-8 sm:h-8 bg-gray-300 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-user text-gray-600 text-xs sm:text-sm"></i>
                        </div>
                        <span class="text-[#4D4D4D] font-medium text-sm sm:text-base truncate max-w-[120px] sm:max-w-none">Dosen TRIK</span>
                        <i class="fas fa-chevron-down text-[#4D4D4D] text-xs sm:text-sm flex-shrink-0"></i>
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="user-menu" class="hidden absolute right-0 top-full mt-2 w-48 sm:w-56 bg-white rounded-md shadow-lg py-1 z-50 border border-gray-200">
                        <div class="px-3 sm:px-4 py-2 text-[11px] sm:text-[12px] text-[#4D4D4D] border-b border-gray-100 rounded-md">
                            <p class="font-bold text-[#4D4D4D] truncate">Dosen TRIK</p>
                            <p class="text-[#4D4D4D] truncate">dosen.trik@example.com</p>
                        </div>
                        <div class="border-t border-[#F1F1F1]"></div>
                        <div class="flex items-center gap-2 px-3 sm:px-4 py-2 hover:bg-gray-100 cursor-pointer transition duration-150">
                            <img src="{{ asset('images/log-out.png') }}" alt="Logout Icon" class="w-4 h-3.5 sm:w-[18px] sm:h-[16px] flex-shrink-0">
                            <a href="#" class="text-xs sm:text-sm text-red-600 font-medium">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-4 sm:py-6 flex-1">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 font-noto">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="py-3 sm:py-4 bg-[#5CBDB9] mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-[#4D4D4D] font-medium text-sm sm:text-base text-center md:text-right mb-0">
                &copy; 2025 SiTandu. All rights reserved.
            </p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // User Menu Toggle
            const userMenuButton = document.getElementById('user-menu-button');
            const userMenu = document.getElementById('user-menu');

            if (userMenuButton && userMenu) {
                userMenuButton.addEventListener('click', function(e) {
                    e.stopPropagation();
                    userMenu.classList.toggle('hidden');
                });

                // Close user menu when clicking outside
                document.addEventListener('click', function(e) {
                    if (userMenu && !userMenu.contains(e.target) && userMenuButton && !userMenuButton.contains(e.target)) {
                        userMenu.classList.add('hidden');
                    }
                });

                // Close user menu when clicking on logout link
                const logoutLink = userMenu.querySelector('a');
                if (logoutLink) {
                    logoutLink.addEventListener('click', function() {
                        userMenu.classList.add('hidden');
                    });
                }
            }

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function(e) {
                    e.stopPropagation();
                    mobileMenu.classList.toggle('hidden');

                    // Close user menu when opening mobile menu
                    if (userMenu) {
                        userMenu.classList.add('hidden');
                    }
                });

                // Close mobile menu when clicking outside
                document.addEventListener('click', function(e) {
                    if (mobileMenu && !mobileMenu.contains(e.target) && mobileMenuButton && !mobileMenuButton.contains(e.target)) {
                        mobileMenu.classList.add('hidden');
                    }
                });

                // Close mobile menu when clicking on a link inside it
                const mobileMenuLinks = mobileMenu.querySelectorAll('a');
                mobileMenuLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        mobileMenu.classList.add('hidden');
                    });
                });
            }

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 1024) {
                    // Close mobile menu on desktop
                    if (mobileMenu) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
    </script>
</body>

</html>

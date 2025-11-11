@extends('layouts.auth')

@section('title', 'Register - SITandu')

@section('content')
    <div class="min-h-screen flex relative blur-background">
        <div class="relative z-10 w-full flex">
            <!-- Left Section -->
            <div class="hidden lg:flex lg:flex-1 items-center justify-center p-12">
                <div class="max-w-lg text-white text-left">
                    <h1 class="text-4xl font-bold mb-2 text-[#5CBDB9]">SITandu</h1>
                    <div class="border-b border-white/100 w-full mb-4"></div>
                    <h2 class="text-2xl mb-4 font-bold">Sistem Tanda Tangan dan Janji Temu</h2>
                    <p class="text-white/80 text-lg">
                        SiTandu merupakan sebuah platform yang memudahkan mahasiswa dan dosen dalam mengatur janji temu
                        secara terstruktur
                    </p>
                </div>
            </div>

            <!-- Right Section (Register Card) -->
            <div class="flex-1 flex items-center justify-center p-4 lg:p-8">
                <div class="w-full max-w-md">
                    <!-- Register Card -->
                    <div class="login-card rounded-2xl shadow-2xl p-8 bg-white">

                        <!-- Section Header -->
                        <div class="text-center mb-8">
                            <h3 class="text-2xl font-bold text-gray-800">REGISTER</h3>
                            <p class="text-gray-600 mt-2">Akun SITandu Anda</p>
                        </div>

                        <!-- Register Form -->
                        <form class="space-y-6" action="{{ route('RegisterMahasiswa') }}" method="POST">
                            @csrf
                            <!-- Email Field -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-[#4D4D4D] mb-2">
                                    Email
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-envelope text-gray-400"></i>
                                    </div>
                                    <input id="email" name="email" type="email" required
                                        class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl
                                           focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                           transition duration-200 bg-white"
                                        placeholder="@mail.ugm.ac.id">
                                </div>
                            </div>

                            <!-- Password Field -->
                            <div>
                                <label for="password" class="block text-sm font-medium text-[#4D4D4D] mb-2">
                                    Password
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <input id="password" name="password" type="password" required
                                        class="block w-full pl-10 pr-10 py-3 border border-gray-300 rounded-xl
                                           focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                           transition duration-200 bg-white"
                                        placeholder="Insert Password">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                        <button type="button"
                                            class="text-gray-400 hover:text-gray-600 focus:outline-none toggle-password">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Role Field - Custom Dropdown -->
                            <div>
                                <label class="block text-sm font-medium text-[#4D4D4D] mb-2">
                                    Role
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>

                                    <!-- Dropdown Trigger -->
                                    <div id="role-dropdown-trigger"
                                        class="w-full pl-10 pr-10 py-3 border border-gray-300 rounded-xl
                                               bg-white text-[#4D4D4D] cursor-pointer
                                               flex items-center justify-between
                                               hover:border-[#FFDA7A] hover:shadow-sm
                                               transition duration-200">
                                        <span id="role-selected-text" class="text-gray-400">Pilih Role</span>
                                        <i class="fas fa-chevron-down text-gray-400 text-sm transition-transform duration-200"></i>
                                    </div>

                                    <!-- Hidden Input untuk Form -->
                                    <input type="hidden" id="role" name="role" value="">

                                    <!-- Dropdown Menu -->
                                    <div id="role-dropdown-menu"
                                        class="absolute top-full left-0 right-0 mt-1 bg-white border border-gray-300 rounded-xl shadow-lg
                                               opacity-0 invisible transform -translate-y-2
                                               transition-all duration-200 z-50">

                                        <div class="p-2 space-y-1">
                                            <div class="role-option px-4 py-3 rounded-lg cursor-pointer
                                                       hover:bg-[#FFDA7A] hover:text-[#4D4D4D]
                                                       transition duration-200"
                                                 data-value="mahasiswa">
                                                Mahasiswa
                                            </div>
                                            <div class="role-option px-4 py-3 rounded-lg cursor-pointer
                                                       hover:bg-[#FFDA7A] hover:text-[#4D4D4D]
                                                       transition duration-200"
                                                 data-value="dosen">
                                                Dosen
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- mahasiswa -->
                            <div id="nama-field" class="hidden transition-all duration-300 ease-in-out">
                                <label for="nama" class="text-sm font-medium text-[#4D4D4D] mb-2">
                                    Nama
                                </label>
                                <input id="nama" name="nama" type="text"
                                    class="block w-full pl-3 pr-3 py-3 border border-gray-300 rounded-xl
                                          focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                          transition duration-200 bg-white"
                                    placeholder="Nama Lengkap">
                            </div>

                            <div id="nim-field" class="hidden transition-all duration-300 ease-in-out">
                                <label for="nim" class="block text-sm font-medium text-[#4D4D4D] mb-2">
                                    NIM
                                </label>
                                <input id="nim" name="nim" type="text"
                                    class="block w-full pl-3 pr-3 py-3 border border-gray-300 rounded-xl
                                          focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                          transition duration-200 bg-white"
                                    placeholder="Masukkan NIM Anda">
                            </div>

                            <!-- dosen -->
                            <div id="nip-field" class="hidden transition-all duration-300 ease-in-out">
                                <label for="nip" class="block text-sm font-medium text-[#4D4D4D] mb-2">
                                    NIP
                                </label>
                                <input id="nip" name="nip" type="text"
                                    class="block w-full pl-3 pr-3 py-3 border border-gray-300 rounded-xl
                                          focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                          transition duration-200 bg-white"
                                    placeholder="Masukkan NIP Anda">
                            </div>

                            <!-- Lanjutkan Button -->
                            <button type="submit"
                                class="w-full flex justify-center py-3 px-4 border border-transparent
                                   rounded-xl shadow-sm text-sm font-medium
                                   custom-login-btn transition duration-200">
                                <span class="flex items-center">
                                    <i class="fas fa-sign-in-alt mr-2"></i>
                                    Lanjutkan
                                </span>
                            </button>
                        </form>

                        <!-- Additional Links -->
                        <div class="mt-6 text-center space-y-4">
                            <div class="border-t border-gray-200 pt-4">
                                <p class="text-sm text-gray-600">
                                    Sudah punya akun?
                                    <a href="{{ route('login') }}"
                                        class="font-medium text-[#FFD66B] hover:text-[#fbc93d]
                                                                        transition duration-200 ml-1">
                                        LogIn
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Footer untuk mobile -->
                    <div class="lg:hidden text-center mt-6">
                        <p class="text-white text-sm">
                            &copy; 2025 SITandu. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@vite(['resources/js/auth/register.js'])

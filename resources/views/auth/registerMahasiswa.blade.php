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
                    SiTandu merupakan sebuah platform yang memudahkan mahasiswa dan dosen dalam mengatur janji temu secara terstruktur
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
                    <form class="space-y-6" action="{{ route('register') }}" method="POST">
                        @csrf

                        <!-- Nama Field -->
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">
                                Nama
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input
                                    id="nama"
                                    name="nama"
                                    type="text"
                                    required
                                    class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl
                                           focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                           transition duration-200 bg-white"
                                    placeholder="Masukkan Nama Anda"
                                >
                            </div>
                        </div>

                        <!-- NIM Field -->
                        <div>
                            <label for="nim" class="block text-sm font-medium text-gray-700 mb-2">
                                NIM
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-id-card text-gray-400"></i>
                                </div>
                                <input
                                    id="nim"
                                    name="nim"
                                    type="text"
                                    required
                                    class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl
                                           focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                           transition duration-200 bg-white"
                                    placeholder="Masukkan NIM Anda"
                                >
                            </div>
                        </div>

                        <!-- Angkatan Field -->
                        <div>
                            <label for="angkatan" class="block text-sm font-medium text-gray-700 mb-2">
                                Angkatan
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-graduation-cap text-gray-400"></i>
                                </div>
                                <input
                                    id="angkatan"
                                    name="angkatan"
                                    type="text"
                                    required
                                    class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl
                                           focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                           transition duration-200 bg-white"
                                    placeholder="Masukkan Angkatan Anda"
                                >
                            </div>
                        </div>

                        <!-- Register Button -->
                        <button
                            type="submit"
                            class="w-full flex justify-center py-3 px-4 border border-transparent
                                   rounded-xl shadow-sm text-sm font-medium
                                   custom-login-btn transition duration-200"
                        >
                            <span class="flex items-center">
                                Register
                            </span>
                        </button>
                    </form>

                    <!-- Additional Links -->
                    <div class="mt-6 text-center space-y-4">
                        <div class="border-t border-gray-200 pt-4">
                            <p class="text-sm text-gray-600">
                                Sudah punya akun?
                                <a href="{{ route('login') }}" class="font-medium text-[#FFD66B] hover:text-[#fbc93d]
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

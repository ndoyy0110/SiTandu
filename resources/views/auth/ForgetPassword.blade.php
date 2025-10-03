@extends('layouts.auth')

@section('title', 'Forget Password - SITandu')

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

        <!-- Right Section (Login Card) -->
        <div class="flex-1 flex items-center justify-center p-4 lg:p-8">
            <div class="w-full max-w-md">
                <!-- Login Card -->
                <div class="login-card rounded-2xl shadow-2xl p-8 bg-white">

                    <!-- Section Header -->
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-800">SIGN IN</h3>
                        <p class="text-gray-600 mt-2">Akun SITandu Anda</p>
                    </div>

                    <!-- Login Form -->
                    <form class="space-y-6" action="{{ route('ForgetPassword') }}" method="POST">
                        @csrf

                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    required
                                    class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl
                                           focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                           transition duration-200 bg-white"
                                    placeholder="@mail.ugm.ac.id"
                                >
                            </div>
                        </div>

                        <div class="border-t border-gray-200 pt-4">

                        <!-- Lanjutkan Button -->
                        <button
                            type="submit"
                            class="w-full flex justify-center py-3 px-4 border border-transparent
                                   rounded-xl shadow-sm text-sm font-medium
                                   custom-login-btn transition duration-200"
                        >
                            <span class="flex items-center">
                                <i class="fas fa-sign-in-alt mr-2"></i>
                                Forget Password
                            </span>
                        </button>
                    </form>


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

<script>
    // Toggle password visibility
    document.addEventListener('DOMContentLoaded', function() {
        const togglePassword = document.querySelector('.toggle-password');
        const password = document.getElementById('password');

        if (togglePassword && password) {
            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);

                const icon = this.querySelector('i');
                icon.classList.toggle('fa-eye');
                icon.classList.toggle('fa-eye-slash');
            });
        }
    });
</script>
@endsection

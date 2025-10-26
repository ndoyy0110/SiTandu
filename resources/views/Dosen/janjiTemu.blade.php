@extends('layouts.template')
@section('title', 'Login - SITandu')
@section('content')
    <!-- Main Content -->
    <main class="justify-start max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Left kiri -->
            <div class="flex-1 space-y-6">

                <!-- Permintaan Janji Temu -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-[#4D4D4D]">Permintaan Janji Temu</h2>
                </div>
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-[20px] text-[#4D4D4D]">Jadwal Anda Hari Ini</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Card 1 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-4 py-4">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/user.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h3 class="text-[15px] leading-tight line-clamp-2">Bimbingan Tugas Akhir
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#DBFCE7] text-[#4D4D4D] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Disetujui</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Lisa Permata 22/555555/SV/25555</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Jumat, 26 September 2025 10:00 - 11:00 WIB</p>
                                </div>
                            </div>
                            <div class="max-w-[180px] mb-6 w-full">
                                <p class="text-[13px] leading-tight w-full">Permohonan persetujuan KRS untuk
                                    semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>

                    </div>
                    <!-- Card 2 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-4 py-4">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/user.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h3 class="text-[15px] leading-tight line-clamp-2">Bimbingan Tugas Akhir
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#DBFCE7] text-[#4D4D4D] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Disetujui</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Lisa Permata 22/555555/SV/25555</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Jumat, 26 September 2025 10:00 - 11:00 WIB</p>
                                </div>
                            </div>
                            <div class="max-w-[180px] mb-6 w-full">
                                <p class="text-[13px] leading-tight w-full">Permohonan persetujuan KRS untuk
                                    semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>

                    </div>
                    <!-- Card 3 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-4 py-4">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/user.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h3 class="text-[15px] leading-tight line-clamp-2">Bimbingan Tugas Akhir
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#DBFCE7] text-[#4D4D4D] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Disetujui</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Lisa Permata 22/555555/SV/25555</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Jumat, 26 September 2025 10:00 - 11:00 WIB</p>
                                </div>
                            </div>
                            <div class="max-w-[180px] mb-6 w-full">
                                <p class="text-[13px] leading-tight w-full">Permohonan persetujuan KRS untuk
                                    semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>

                    </div>
                    <!-- Card 4 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-4 py-4">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/user.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h3 class="text-[15px] leading-tight line-clamp-2">Bimbingan Tugas Akhir
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#DBFCE7] text-[#4D4D4D] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Disetujui</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Lisa Permata 22/555555/SV/25555</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Jumat, 26 September 2025 10:00 - 11:00 WIB</p>
                                </div>
                            </div>
                            <div class="max-w-[180px] mb-6 w-full">
                                <p class="text-[13px] leading-tight w-full">Permohonan persetujuan KRS untuk
                                    semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Permintaan Masuk -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-[#4D4D4D]">Permintaan Masuk</h2>
                </div>
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-[20px] text-[#4D4D4D]">Kamis, 18 September 2025</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Card 1 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-4 py-4">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/user.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h3 class="text-[15px] leading-tight line-clamp-2">Bimbingan Tugas Akhir
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#FEF9C2] text-[#4D4D4D] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Disetujui</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Lisa Permata 22/555555/SV/25555</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Jumat, 26 September 2025 10:00 - 11:00 WIB</p>
                                </div>
                            </div>
                            <div class="max-w-[180px] mb-6 w-full">
                                <p class="text-[13px] leading-tight w-full">Permohonan persetujuan KRS untuk
                                    semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>
                        <div class="flex space-x-2 justify-center w-full">
                            <button
                                class="btn-setujui-janjiTemu bg-[#5CBDB9] text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Setujui
                            </button>
                            <button
                                class="bg-white text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Jadwal Ulang
                            </button>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-4 py-4">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/user.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h3 class="text-[15px] leading-tight line-clamp-2">Bimbingan Tugas Akhir
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#FEF9C2] text-[#4D4D4D] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Menunggu</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Lisa Permata 22/555555/SV/25555</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Jumat, 26 September 2025 10:00 - 11:00 WIB</p>
                                </div>
                            </div>
                            <div class="max-w-[180px] mb-6 w-full">
                                <p class="text-[13px] leading-tight w-full">Permohonan persetujuan KRS untuk
                                    semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>
                        <div class="flex space-x-2 justify-center w-full">
                            <button
                                class="btn-setujui-janjiTemu bg-[#5CBDB9] text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Setujui
                            </button>
                            <button
                                class="bg-white text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Jadwal Ulang
                            </button>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-4 py-4">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/user.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h3 class="text-[15px] leading-tight line-clamp-2">Bimbingan Tugas Akhir
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#FEF9C2] text-[#4D4D4D] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Menunggu</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Lisa Permata 22/555555/SV/25555</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Jumat, 26 September 2025 10:00 - 11:00 WIB</p>
                                </div>
                            </div>
                            <div class="max-w-[180px] mb-6 w-full">
                                <p class="text-[13px] leading-tight w-full">Permohonan persetujuan KRS untuk
                                    semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>
                        <div class="flex space-x-2 justify-center w-full">
                            <button
                                class="btn-setujui-janjiTemu bg-[#5CBDB9] text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Setujui
                            </button>
                            <button
                                class="bg-white text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Jadwal Ulang
                            </button>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-4 py-4">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/user.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h3 class="text-[15px] leading-tight line-clamp-2">Bimbingan Tugas Akhir
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#FEF9C2] text-[#4D4D4D] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Menunggu</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Lisa Permata 22/555555/SV/25555</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Jumat, 26 September 2025 10:00 - 11:00 WIB</p>
                                </div>
                            </div>
                            <div class="max-w-[180px] mb-6 w-full">
                                <p class="text-[13px] leading-tight w-full">Permohonan persetujuan KRS untuk
                                    semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>
                        <div class="flex space-x-2 justify-center w-full">
                            <button
                                class="btn-setujui-janjiTemu bg-[#5CBDB9] text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Setujui
                            </button>
                            <button
                                class="bg-white text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Jadwal Ulang
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Permintaan Masuk -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-[20px] text-[#4D4D4D]">Jumat, 19 September 2025</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Card 1 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-4 py-4">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/user.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h3 class="text-[15px] leading-tight line-clamp-2">Bimbingan Tugas Akhir
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#FEF9C2] text-[#4D4D4D] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Menunggu</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Lisa Permata 22/555555/SV/25555</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Jumat, 26 September 2025 10:00 - 11:00 WIB</p>
                                </div>
                            </div>
                            <div class="max-w-[180px] mb-6 w-full">
                                <p class="text-[13px] leading-tight w-full">Permohonan persetujuan KRS untuk
                                    semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>
                        <div class="flex space-x-2 justify-center w-full">
                            <button
                                class="btn-setujui-janjiTemu bg-[#5CBDB9] text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Setujui
                            </button>
                            <button
                                class="bg-white text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Jadwal Ulang
                            </button>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-4 py-4">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/user.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h3 class="text-[15px] leading-tight line-clamp-2">Bimbingan Tugas Akhir
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#FEF9C2] text-[#4D4D4D] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Menunggu</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Lisa Permata 22/555555/SV/25555</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Jumat, 26 September 2025 10:00 - 11:00 WIB</p>
                                </div>
                            </div>
                            <div class="max-w-[180px] mb-6 w-full">
                                <p class="text-[13px] leading-tight w-full">Permohonan persetujuan KRS untuk
                                    semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>
                        <div class="flex space-x-2 justify-center w-full">
                            <button
                                class="btn-setujui-janjiTemu bg-[#5CBDB9] text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Setujui
                            </button>
                            <button
                                class="bg-white text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Jadwal Ulang
                            </button>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-4 py-4">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/user.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h3 class="text-[15px] leading-tight line-clamp-2">Bimbingan Tugas Akhir
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#FEF9C2] text-[#4D4D4D] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Menunggu</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Lisa Permata 22/555555/SV/25555</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Jumat, 26 September 2025 10:00 - 11:00 WIB</p>
                                </div>
                            </div>
                            <div class="max-w-[180px] mb-6 w-full">
                                <p class="text-[13px] leading-tight w-full">Permohonan persetujuan KRS untuk
                                    semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>
                        <div class="flex space-x-2 justify-center w-full">
                            <button
                                class="btn-setujui-janjiTemu bg-[#5CBDB9] text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Setujui
                            </button>
                            <button
                                class="bg-white text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Jadwal Ulang
                            </button>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-4 py-4">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/user.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h3 class="text-[15px] leading-tight line-clamp-2">Bimbingan Tugas Akhir
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#FEF9C2] text-[#4D4D4D] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Menunggu</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Lisa Permata 22/555555/SV/25555</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Jumat, 26 September 2025 10:00 - 11:00 WIB</p>
                                </div>
                            </div>
                            <div class="max-w-[180px] mb-6 w-full">
                                <p class="text-[13px] leading-tight w-full">Permohonan persetujuan KRS untuk
                                    semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>
                        <div class="flex space-x-2 justify-center w-full">
                            <button
                                class="btn-setujui-janjiTemu bg-[#5CBDB9] text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Setujui
                            </button>
                            <button
                                class="bg-white text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Jadwal Ulang
                            </button>
                        </div>
                    </div>
                </div>

                {{-- SETUJUI JANJI TEMU --}}
                <div id="approveModaljanjiTemu" class="fixed inset-0 overflow-y-auto h-full w-full hidden z-50">
                    <div
                        class="relative top-20 mx-auto p-5 border border-white w-full max-w-2xl shadow-lg rounded-md bg-white">
                        <div class="flex justify-between items-center pb-4">
                            <h3 class="text-[20px] font-bold text-[#4D4D4D]">Setujui Janji Temu</h3>
                        </div>

                        <div class="mt-4 space-y-6">
                            <div>
                                <p class="text-[14px] font-bold text-gray-600 mb-1">Mahasiswa: <span
                                        class="font-medium text-[14px]">Budi Santoso - 24/555555/SV/22222</span></p>
                                <p class="text-[14px] font-bold text-gray-600">Topik: <span
                                        class="font-medium text-[14px]">Bimbingan Tugas Akhir</span></p>
                                <p class="text-[14px] font-bold text-gray-600">Waktu: <span
                                        class="font-medium text-[14px]">Jumat, 26 September 2025, 10:00 - 11:00</span></p>
                            </div>

                            <div class="border border-[#C1C1C1] rounded-lg p-4">
                                <h4 class="font-semibold text-[#4D4D4D] text-[14px] mb-3">Pilih Ruangan Untuk Pertemuan
                                </h4>

                                <!-- Dropdown Menu -->
                                <div class="relative">
                                    <button id="ruangan-dropdown-button"
                                        class="w-full text-left text-[#4D4D4D] gap-2 text-sm font-medium bg-white border border-[#C1C1C1] hover:bg-[#F5F5F5] rounded-md py-3 px-4 flex items-center justify-between">
                                        <span id="selected-ruangan-text">Pilih ruangan untuk pertemuan</span>
                                        <img src="{{ asset('images/panah.png') }}" alt="dropdown Icon"
                                            class="w-[18px] h-[16px]">
                                    </button>

                                    <!-- Dropdown Menu -->
                                    <div id="ruangan-dropdown-menu"
                                        class="hidden absolute right-0 left-0 top-full mt-1 w-full bg-white rounded-md shadow-lg py-2 z-10 border border-gray-200">
                                        <div class="space-y-1">
                                            <div class="flex flex-col">
                                                <button
                                                    class="ruangan-option w-full text-left px-4 py-2 text-sm text-[#4D4D4D] hover:bg-[#FFDA7A] rounded-md transition duration-200 font-medium mb-2"
                                                    data-ruangan="Ruang Dosen 201">
                                                    Ruang Dosen 201
                                                </button>
                                                <button
                                                    class="ruangan-option w-full text-left px-4 py-2 text-sm text-[#4D4D4D] hover:bg-[#FFDA7A] rounded-md transition duration-200 font-medium mb-2"
                                                    data-ruangan="Ruang Pertemuan 210">
                                                    Ruang Pertemuan 210
                                                </button>
                                                <button
                                                    class="ruangan-option w-full text-left px-4 py-2 text-sm text-[#4D4D4D] hover:bg-[#FFDA7A] rounded-md transition duration-200 font-medium mb-2"
                                                    data-ruangan="Ruang Diskusi 202">
                                                    Ruang Diskusi 202
                                                </button>
                                                <button
                                                    class="ruangan-option w-full text-left px-4 py-2 text-sm text-[#4D4D4D] hover:bg-[#FFDA7A] rounded-md transition duration-200 font-medium"
                                                    data-ruangan="alternatif">
                                                    Alternatif
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Input untuk ruangan alternatif -->
                                <div id="alternatif-input" class="hidden mt-4">
                                    <label class="block text-sm font-medium text-[#4D4D4D] mb-2">Masukkan nama
                                        ruangan</label>
                                    <input type="text" id="custom-ruangan-input"
                                        class="w-full border border-[#C1C1C1] rounded-md py-2 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#5CBDB9] focus:border-transparent"
                                        placeholder="Contoh: Lab Komputer, Ruang Baca, dll.">
                                </div>

                                <!-- Display ruangan yang dipilih -->
                                <div id="ruanganTerpilih"
                                    class="hidden mt-4 p-3 bg-green-50 border border-green-200 rounded-lg">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <div>
                                                <p class="text-sm font-medium text-gray-700">Ruangan dipilih: <span
                                                        id="namaRuangan">CU 204</span></p>
                                                <p class="text-xs text-gray-500">Klik untuk mengubah</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex space-x-3 pt-4">
                                <button id="submitApproveJanjiTemu"
                                    class="flex-1 bg-[#5CBDB9] text-white py-3 rounded-lg font-medium hover:bg-[#4ca8a4] transition duration-200 flex items-center justify-center gap-2">
                                    <img src="{{ asset('images/centangputih.png') }}" alt="ikonKirim"
                                        class="w-[16px] h-[16px]">
                                    Konfirmasi
                                </button>
                                <button id="cancelApproveJanjiTemu"
                                    class="flex-1 bg-white text-gray-700 border border-gray-300 py-3 rounded-lg font-medium hover:bg-gray-50 transition duration-200">
                                    Batal
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
@vite(['resources/js/janjiTemu.js'])

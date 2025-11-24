@extends('layouts.templateMahasiswa')
@section('title', 'Permintaan Tanda Tangan - SITandu')
@section('content')

    <body class="bg-gray-50">
        <!-- Main Content -->
        <main class="justify-start max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 gap-3">
                <h2 class="text-2xl font-bold text-gray-700">Detail History</h2>
                <button onclick="window.history.back()"
                    class="bg-white border border-gray-300 text-gray-700 px-4 sm:px-6 py-2 rounded-lg text-sm sm:text-base hover:bg-gray-200 transition duration-200 flex items-center gap-2 w-full sm:w-auto justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                            clip-rule="evenodd" />
                    </svg>
                    Kembali
                </button>
            </div>

            <div class="bg-white rounded-lg shadow-md p-4 sm:p-6 mb-6">
                <!-- Judul  -->
                <div class="mb-6">
                    <div class="flex items-start mb-3">
                        <img src="{{ asset('images/dokumenBiruMuda.png') }}" alt="DocumentBiruIkon"
                            class="w-10 h-10 sm:w-12 sm:h-12 inline-block mr-2">
                        <div class="flex flex-col flex-1">
                            <h2 class="text-lg sm:text-xl md:text-2xl font-medium text-[#0A0A0A] mb-2 ml-0 sm:ml-2">
                                Persetujuan KRS Semester Ganjil</h2>
                            <div class="flex flex-wrap items-center gap-2 ml-0 sm:ml-2">
                                <span
                                    class="bg-white text-[#0A0A0A] px-2 sm:px-3 py-1 border border-[#0000001A] rounded-full text-xs font-medium">
                                    Tanda Tangan
                                </span>
                                <span
                                    class="bg-[#DCFCE7] text-[#016630] px-2 sm:px-3 py-1 rounded-full text-xs font-medium">
                                    Disetujui
                                </span>
                            </div>
                        </div>
                        <img src="{{ asset('images/circle-check-big.png') }}" alt="KRS Sample"
                            class="w-5 h-5 sm:w-6 sm:h-6 ml-2 flex-shrink-0">
                    </div>
                    <div class="border-t border-[#0000001A] pt-3"></div>

                    <!-- Informasi Dokumen -->
                    <div class="mb-6">
                        <h2 class="text-base sm:text-lg font-semibold text-[#101828] mb-3">Informasi Dokumen</h2>
                        <div class="bg-white p-3 sm:p-4 rounded-lg border border-white">
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <div class="flex flex-col">
                                    <div class="flex items-center mb-1 sm:mb-0">
                                        <img src="{{ asset('images/user.png') }}" alt="NamaIkon"
                                            class="w-4 h-4 sm:w-5 sm:h-5 inline-block">
                                        <span class="ml-2 text-xs sm:text-sm text-[#4A5565]">Nama Dosen</span>
                                    </div>
                                    <p class="ml-0 sm:ml-8 font-medium text-sm sm:text-base text-[#0A0A0A] mt-0 sm:mt-0.5">
                                        Budi Santoso</p>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-center mb-1 sm:mb-0">
                                        <img src="{{ asset('images/clock.png') }}" alt="TanggalIkon"
                                            class="w-4 h-4 sm:w-5 sm:h-5 inline-block">
                                        <span class="ml-2 text-xs sm:text-sm text-[#4A5565]">Tanggal Pengajuan</span>
                                    </div>
                                    <p class="ml-0 sm:ml-8 font-medium text-sm sm:text-base text-[#0A0A0A] mt-0 sm:mt-0.5">
                                        30 Oktober 2024, 10:15</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-[#0000001A] pt-3"></div>

                    <!-- Detail Janji Temu -->
                    <div class="mb-6">
                        <h2 class="text-base sm:text-lg font-semibold text-[#101828] mb-3">Detail Janji Temu</h2>
                        <div class="bg-[#F9FAFB] p-3 sm:p-4 rounded-lg border border-[#F9FAFB] mt-2">
                            <p class="text-xs sm:text-sm text-gray-700 mb-4">Konsultasi progress BAB 3 dan metodologi
                                penelitian untuk tugas akhir. Topik: Implementasi Deep Learning untuk Deteksi Penyakit
                                Tanaman.</p>

                            <!-- Informasi Detail Konsultasi -->
                            <div class="space-y-3 mt-4">
                                <!-- Tanggal -->
                                <div class="flex items-center">
                                    <div class="w-5 h-5 mr-3 text-gray-500">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span class="text-sm text-gray-600">Tanggal:</span>
                                    <span class="text-sm font-medium text-gray-900 ml-2">30 Oktober 2024</span>
                                </div>

                                <!-- Waktu -->
                                <div class="flex items-center">
                                    <div class="w-5 h-5 mr-3 text-gray-500">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <span class="text-sm text-gray-600">Waktu:</span>
                                    <span class="text-sm font-medium text-gray-900 ml-2">10:30 - 11:30</span>
                                </div>

                                <!-- Lokasi -->
                                <div class="flex items-center">
                                    <div class="w-5 h-5 mr-3 text-gray-500">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <span class="text-sm text-gray-600">Lokasi:</span>
                                    <span class="text-sm font-medium text-gray-900 ml-2">Ruang Dosen 301</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-[#0000001A] pt-3"></div>

                    <!-- Timeline -->
                    <div class="mb-6">
                        <h2 class="text-base sm:text-lg font-semibold text-[#101828] mb-3">Timeline</h2>
                        <div class="bg-white p-3 sm:p-4 rounded-lg border border-white">
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <div class="flex flex-col items-center mr-3 sm:mr-4">
                                        <img src="{{ asset('images/uploadijo.png') }}" alt="DokumenDikirimIkon"
                                            class="w-7 h-7 sm:w-8 sm:h-8 inline-block">
                                        <div class="h-6 sm:h-8 border-l-2 border-dashed border-gray-300 mt-2"></div>
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-medium text-gray-700 text-sm sm:text-base">Permintaan Dikirim</p>
                                        <p class="text-xs sm:text-sm text-gray-500">Permintaan janji temu telah Anda ajukan</p>
                                        <p class="text-xs sm:text-sm text-gray-500">30 Okt 2024, 09:30</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex flex-col items-center mr-3 sm:mr-4">
                                        <img src="{{ asset('images/lihatijo.png') }}" alt="DokumenDikirimIkon"
                                            class="w-7 h-7 sm:w-8 sm:h-8 inline-block">
                                        <div class="h-6 sm:h-8 border-l-2 border-dashed border-gray-300 mt-2"></div>
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-medium text-gray-700 text-sm sm:text-base">Ditinjau Dosen</p>
                                        <p class="text-xs sm:text-sm text-gray-500">Dosen meninjau permintaan janji temu Anda</p>
                                        <p class="text-xs sm:text-sm text-gray-500">30 Okt 2024, 09:45</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex flex-col items-center mr-3 sm:mr-4">
                                        <img src="{{ asset('images/selesai.png') }}" alt="DokumenDikirimIkon"
                                            class="w-7 h-7 sm:w-8 sm:h-8 inline-block">
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-medium text-gray-700 text-sm sm:text-base">Selesai</p>
                                        <p class="text-xs sm:text-sm text-gray-500">Janji temu disetujui - Ruang Dosen 301</p>
                                        <p class="text-xs sm:text-sm text-gray-500">30 Okt 2024, 10:15</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection

    @vite(['resources/js/Mahasiswa/permintaan.js'])

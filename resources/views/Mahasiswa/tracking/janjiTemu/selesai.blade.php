@extends('layouts.templateMahasiswa')
@section('title', 'Permintaan Tanda Tangan - SITandu')
@section('content')
    <!-- Main Content -->
    <main class="justify-start max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-[24px] font-bold text-[#4D4D4D]">Detail Tracking</h2>
            <button onclick="window.location.href='{{ route('mahasiswa.tracking') }}'"
                class="bg-white border border-[#C1C1C1] text-[#4D4D4D] px-6 py-2 rounded-lg text-[16px] hover:bg-gray-200 transition duration-200 flex items-center gap-2">
                <img src="{{ asset('images/panahKiri.png') }}" alt="ikonKembali" class="w-[20px] h-[20px]">
                Kembali
            </button>
        </div>
        <div class="mb-8">
            <p class="text-[#4D4D4D] text-[16px]">Permintaan Janji Temu</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <!-- Judul dan status sejajar -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                <h2 class="text-lg sm:text-xl md:text-[18px] font-medium text-[#0A0A0A] mb-2 sm:mb-0">Persetujuan KRS
                    Semester Ganjil</h2>
                <span class="bg-[#9DD7D5] text-[#4D4D4D] px-3 py-1 rounded-full text-xs font-medium w-fit">
                    Selesai
                </span>
            </div>
            <!-- Informasi mahasiswa -->
            <div class="space-y-3">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5 flex-shrink-0">
                    <div class="flex flex-col">
                        <p class="text-[#4D4D4D] font-medium">Budi Santoso</p>
                        <p class="text-[#4D4D4D] text-sm">22/555555/SV/25555</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/clock.png') }}" alt="ikonclock" class="w-5 h-5 flex-shrink-0">
                    <p class="text-[#4D4D4D] text-sm">Kamis, 2 Oktober 2025</p>
                </div>
            </div>
            <button
                class="mt-8 px-4 sm:px-6 py-2 bg-[#5CBDB9] text-white rounded-lg hover:bg-teal-600 transition duration-200 flex items-center justify-center gap-2">
                <img src="{{ asset('images/downloadPutih.png') }}" alt="UnduhDokumenIkon" class="w-4 h-4 inline-block">
                <span>Download Dokumen</span>
            </button>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
            <!-- Form Section -->
            <form action="#" method="POST">
                <!-- Judul Permintaan -->
                <div class="mb-6">
                    <h2 class="text-[20px] font-medium text-[#4D4D4D] mb-3">Progress Tracking</h2>
                </div>
                <!-- Timeline -->
                <div class="mb-6">
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
                                    <p class="text-xs sm:text-sm text-gray-500">Permintaan janji temu untuk 10:00 - 10:30 telah dikirim ke dosen.</p>
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
                                    <p class="font-medium text-gray-700 text-sm sm:text-base">Diterima Dosen</p>
                                    <p class="text-xs sm:text-sm text-gray-500">Dosen telah melihat permintaan janji temu Anda dan sedang mempertimbangkan jadwal.
                                    </p>
                                    <p class="text-xs sm:text-sm text-gray-500">30 Okt 2024, 09:45</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex flex-col items-center mr-3 sm:mr-4">
                                    <img src="{{ asset('images/lihatijo.png') }}" alt="DokumenDikirimIkon"
                                        class="w-7 h-7 sm:w-8 sm:h-8 inline-block">
                                    <div class="h-6 sm:h-8 border-dashed border-gray-300 mt-2"></div>
                                </div>
                                <div class="flex-1">
                                    <p class="font-medium text-gray-700 text-sm sm:text-base">Disetujui</p>
                                    <p class="text-xs sm:text-sm text-gray-500">Janji temu telah disetujui dan dijadwalkan di Ruang Dosen 201.
                                    </p>
                                    <p class="text-xs sm:text-sm text-gray-500">30 Okt 2024, 09:45</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="bg-[#9DD7D5] border border-[#2DAA9E] rounded-lg shadow-md p-4">
                <div class="flex items-start">
                    <div class="flex flex-col items-center mr-3 sm:mr-4">
                        <img src="{{ asset('images/check-abu.png') }}" alt="DokumenDikirimIkon"
                            class="w-6 h-6 sm:w-8 sm:h-8 inline-block">
                    </div>
                    <div class="flex-1">
                        <p class="font-medium text-[#4D4D4D] text-[18px] sm:text-base">Janji temu disetujui -
                            Ruang Dosen 201</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@vite(['resources/js/Mahasiswa/permintaan.js'])

@extends('layouts.templateDosen')
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
                            <h2 class="text-lg sm:text-xl md:text-2xl font-medium text-[#0A0A0A] mb-2 ml-0 sm:ml-2">Proposal
                                Tugas Akhir</h2>
                            <div class="flex flex-wrap items-center gap-2 ml-0 sm:ml-2">
                                <span
                                    class="bg-white text-[#0A0A0A] px-2 sm:px-3 py-1 border border-[#0000001A] rounded-full text-xs font-medium">
                                    Tanda Tangan
                                </span>
                                <span
                                    class="bg-[#FFEDD4] text-[#9F2D00] px-2 sm:px-3 py-1 rounded-full text-xs font-medium">
                                    Revisi
                                </span>
                                <span
                                    class="bg-[#FFEDD4] text-[#9F2D00] px-2 sm:px-3 py-1 rounded-full text-xs font-medium">
                                    Revisi Ke-2
                                </span>
                            </div>
                        </div>
                        <img src="{{ asset('images/revisi.png') }}" alt="revisi"
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
                                        <span class="ml-2 text-xs sm:text-sm text-[#4A5565]">Nama Mahasiswa</span>
                                    </div>
                                    <p class="ml-0 sm:ml-8 font-medium text-sm sm:text-base text-[#0A0A0A] mt-0 sm:mt-0.5">
                                        Budi Santoso</p>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-center mb-1 sm:mb-0">
                                        <img src="{{ asset('images/dokumen.png') }}" alt="NIMIkon"
                                            class="w-4 h-4 sm:w-5 sm:h-5 inline-block">
                                        <span class="ml-2 text-xs sm:text-sm text-[#4A5565]">NIM</span>
                                    </div>
                                    <p class="ml-0 sm:ml-8 font-medium text-sm sm:text-base text-[#0A0A0A] mt-0 sm:mt-0.5">
                                        20210001</p>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-center mb-1 sm:mb-0">
                                        <img src="{{ asset('images/email.png') }}" alt="EmailIkon"
                                            class="w-4 h-4 sm:w-5 sm:h-5 inline-block">
                                        <span class="ml-2 text-xs sm:text-sm text-[#4A5565]">Email</span>
                                    </div>
                                    <p
                                        class="ml-0 sm:ml-8 font-medium text-sm sm:text-base text-[#0A0A0A] mt-0 sm:mt-0.5 break-all">
                                        budi.santoso@student.university.ac.id
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-center mb-1 sm:mb-0">
                                        <img src="{{ asset('images/clock.png') }}" alt="TanggalIkon"
                                            class="w-4 h-4 sm:w-5 sm:h-5 inline-block">
                                        <span class="ml-2 text-xs sm:text-sm text-[#4A5565]">Tanggal Disetujui</span>
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
                            <p class="text-xs sm:text-sm text-gray-700 mb-2">
                                Persetujuan proposal tugas akhir dengan judul 'Implementasi Machine Learning untuk Prediksi
                                Nilai Mahasiswa'.
                            </p>
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
                                        <p class="font-medium text-gray-700 text-sm sm:text-base">Dokumen Dikirim</p>
                                        <p class="text-xs sm:text-sm text-gray-500">Dokumen PDF telah dikirim mahasiswa</p>
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
                                        <p class="text-xs sm:text-sm text-gray-500">Dokumen telah dibuka dan ditinjau</p>
                                        <p class="text-xs sm:text-sm text-gray-500">30 Okt 2024, 09:45</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex flex-col items-center mr-3 sm:mr-4">
                                        <img src="{{ asset('images/Container-revisi.png') }}" alt="jadwalUlangIkon"
                                            class="w-7 h-7 sm:w-8 sm:h-8 inline-block">
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-medium text-gray-700 text-sm sm:text-base">Perlu Revisi</p>
                                        <p class="text-xs sm:text-sm text-gray-500">Dokumen memerlukan perbaikan lebih
                                            lanjut</p>
                                        <p class="text-xs sm:text-sm text-gray-500">30 Okt 2024, 10:15</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-[#FFF7ED] p-3 sm:p-4 rounded-lg border border-[#BEDBFF] mt-2 mb-4">
                        <div class="flex items-start gap-2 mb-3">
                            <img src="{{ asset('images/revisi.png') }}" alt="Catatanrevisi"
                                class="w-4 h-4 sm:w-5 sm:h-5 mt-0.5 flex-shrink-0">
                            <span class="text-sm sm:text-base font-semibold text-[#7E2A0C]">Keterangan Revisi</span>
                        </div>
                        <p class="text-xs sm:text-sm text-[#9F2D00] ml-0 sm:ml-7 leading-relaxed">
                            Judul perlu diperjelas menjadi lebih spesifik (metode ML apa yang digunakan). Metodologi
                            penelitian belum detail, terutama tahap preprocessing data dan pemilihan fitur. Tambahkan studi
                            literatur yang lebih komprehensif (minimal 15 jurnal internasional 5 tahun terakhir). Dataset
                            yang digunakan perlu dijelaskan lebih rinci. </p>
                        <div class="bg-[#FFFFFF] p-4 sm:p-6 rounded-lg border border-[#FFB86A] mt-2 mb-4">
                            <div class="flex items-start mb-4">
                                <img src="{{ asset('images/revisitrack.png') }}" alt="RevisiTrack"
                                    class="w-5 h-5 sm:w-6 sm:h-6 flex-shrink-0 mr-3 mt-0.5">
                                <div>
                                    <h3 class="text-base sm:text-lg font-semibold text-[#7E2A0C] mb-1">Lakukan Revisi di
                                        Halaman Tracking</h3>
                                    <p class="text-sm text-[#CA3500]">Untuk melakukan revisi dokumen, silakan buka halaman
                                        Tracking dimana Anda dapat:</p>
                                </div>
                            </div>

                            <!-- List fitur -->
                            <div class="ml-8 mb-4">
                                <ul class="space-y-2 text-sm text-[#CA3500]">
                                    <li class="flex items-start">
                                        <span class="text-[#CA3500] mr-2">•</span>
                                        <span>Mengunduh dokumen berkomentar dari dosen</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-[#CA3500] mr-2">•</span>
                                        <span>Mengunggah dokumen yang sudah direvisi</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-[#CA3500] mr-2">•</span>
                                        <span>Melihat progress revisi secara real-time</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Tombol aksi -->
                            <div class="flex flex-col mt-6">
                                <button
                                    class="px-4 sm:px-6 py-2 bg-[#F54900] border-[0.8px] border-[#0000001A] text-[#FFFFFF] rounded-lg hover:bg-[#bb5930] transition duration-200 flex items-center justify-center gap-2">
                                    <img src="{{ asset('images/pindah.png') }}" alt="pindahDokumenIkon"
                                        class="w-4 h-4 inline-block">
                                    <span>Buka di Tracking</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection

    @vite(['resources/js/Mahasiswa/permintaan.js'])

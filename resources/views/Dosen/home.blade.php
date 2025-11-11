@extends('layouts.templateDosen')
@section('title', 'Home - SITandu')
@section('content')
    <!-- Main Content -->
    <main class="justify-start max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Left kiri -->
            <div class="flex-1 space-y-6">
                <!-- Permintaan Tanda Tangan -->
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 gap-4">
                    <h2 class="text-2xl font-bold text-[#4D4D4D]">Permintaan Tanda Tangan</h2>
                    <button onclick="window.location.href='{{ route('dosen.tandaTangan') }}'"
                        class="bg-white text-[#4D4D4D] px-4 sm:px-6 py-2 rounded-lg text-[14px] sm:text-[16px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 w-full sm:w-auto justify-center">
                        <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class="w-4 sm:w-5 h-4 sm:h-5">
                        Lihat Semua
                    </button>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Card 1 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-4 sm:px-6 py-6 w-full max-w-none">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/dokumen.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[140px] sm:max-w-[180px] flex-1">
                                        <h3 class="text-[14px] sm:text-[15px] leading-tight line-clamp-2">Persetujuan KRS Semester Ganjil</h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-2 sm:ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#D4183D] text-[white] px-2 sm:px-3 py-1 rounded-full text-[11px] sm:text-[12px] font-medium flex items-center justify-center">Urgent</span>
                                    <span
                                        class="bg-[#FEF9C2] text-[#4D4D4D] px-2 sm:px-3 py-1 rounded-full text-[11px] sm:text-[12px] font-medium flex items-center justify-center">Menunggu</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[12px] sm:text-[13px] truncate">Budi Santoro 24/5555555/9/22222</p>
                                </div>
                            </div>
                            <div class="max-w-[140px] sm:max-w-[180px] mb-6 w-full">
                                <p class="text-[12px] sm:text-[13px] leading-tight line-clamp-2 w-full">Permohonan persetujuan KRS untuk semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>

                        <div class="bg-[#F5F5F5] flex flex-col space-y-2 rounded-lg p-4 sm:p-6 mb-6 w-full">
                            <span class="text-gray-500 text-[10px] sm:text-[11px] w-full truncate">Persetujuan KRS_Budi_555555.pdf</span>
                        </div>
                        <div class="flex space-x-2 justify-center items-center mb-6 w-full">
                            <button
                                class="justify-center bg-white text-[#4D4D4D] border border-[#C1C1C1] px-4 sm:px-6 py-2 rounded-lg text-[11px] sm:text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 w-full">
                                <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class="w-4 sm:w-5 h-4 sm:h-5">
                                Lihat Dokumen
                            </button>
                        </div>
                        <div class="flex space-x-2 justify-center w-full">
                            <button
                                class="btn-setujui-ttd bg-[#5CBDB9] text-[#4D4D4D] border border-[#C1C1C1] px-3 sm:px-6 py-2 rounded-lg text-[11px] sm:text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Setujui
                            </button>
                            <button
                                class="btn-revisi bg-white text-[#4D4D4D] border border-[#C1C1C1] px-3 sm:px-6 py-2 rounded-lg text-[11px] sm:text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Revisi
                            </button>
                        </div>
                        <div class="flex space-x-2 justify-center items-center mt-4 w-full">
                            <button
                                class="btn-tolak-ttd justify-center bg-white border border-[#D4183D] text-[11px] sm:text-[12px] text-[#D4183D] font-regular px-4 sm:px-6 py-2 rounded-lg hover:bg-gray-200 transition duration-200 flex items-center gap-2 w-full">
                                <img src="{{ asset('images/tolak.png') }}" alt="ikonTolak" class="w-4 h-4">
                                Tolak Permintaan
                            </button>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-4 sm:px-6 py-6 w-full max-w-none">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/dokumen.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[140px] sm:max-w-[180px] flex-1">
                                        <h3 class="text-[14px] sm:text-[15px] leading-tight line-clamp-2">Persetujuan KRS Semester Ganjil</h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-2 sm:ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#D4183D] text-[white] px-2 sm:px-3 py-1 rounded-full text-[11px] sm:text-[12px] font-medium flex items-center justify-center">Urgent</span>
                                    <span
                                        class="bg-[#FEF9C2] text-[#4D4D4D] px-2 sm:px-3 py-1 rounded-full text-[11px] sm:text-[12px] font-medium flex items-center justify-center">Menunggu</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[12px] sm:text-[13px] truncate">Budi Santoro 24/5555555/9/22222</p>
                                </div>
                            </div>
                            <div class="max-w-[140px] sm:max-w-[180px] mb-6 w-full">
                                <p class="text-[12px] sm:text-[13px] leading-tight line-clamp-2 w-full">Permohonan persetujuan KRS untuk semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>

                        <div class="bg-[#F5F5F5] flex flex-col space-y-2 rounded-lg p-4 sm:p-6 mb-6 w-full">
                            <span class="text-gray-500 text-[10px] sm:text-[11px] w-full truncate">Persetujuan KRS_Budi_555555.pdf</span>
                        </div>
                        <div class="flex space-x-2 justify-center items-center mb-6 w-full">
                            <button
                                class="justify-center bg-white text-[#4D4D4D] border border-[#C1C1C1] px-4 sm:px-6 py-2 rounded-lg text-[11px] sm:text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 w-full">
                                <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class="w-4 sm:w-5 h-4 sm:h-5">
                                Lihat Dokumen
                            </button>
                        </div>
                        <div class="flex space-x-2 justify-center w-full">
                            <button
                                class="btn-setujui-ttd bg-[#5CBDB9] text-[#4D4D4D] border border-[#C1C1C1] px-3 sm:px-6 py-2 rounded-lg text-[11px] sm:text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Setujui
                            </button>
                            <button
                                class="btn-revisi bg-white text-[#4D4D4D] border border-[#C1C1C1] px-3 sm:px-6 py-2 rounded-lg text-[11px] sm:text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Revisi
                            </button>
                        </div>
                        <div class="flex space-x-2 justify-center items-center mt-4 w-full">
                            <button
                                class="btn-tolak-ttd justify-center bg-white border border-[#D4183D] text-[11px] sm:text-[12px] text-[#D4183D] font-regular px-4 sm:px-6 py-2 rounded-lg hover:bg-gray-200 transition duration-200 flex items-center gap-2 w-full">
                                <img src="{{ asset('images/tolak.png') }}" alt="ikonTolak" class="w-4 h-4">
                                Tolak Permintaan
                            </button>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-4 sm:px-6 py-6 w-full max-w-none">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/dokumen.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[140px] sm:max-w-[180px] flex-1">
                                        <h3 class="text-[14px] sm:text-[15px] leading-tight line-clamp-2">Persetujuan KRS Semester Ganjil</h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-2 sm:ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#D4183D] text-[white] px-2 sm:px-3 py-1 rounded-full text-[11px] sm:text-[12px] font-medium flex items-center justify-center">Urgent</span>
                                    <span
                                        class="bg-[#FEF9C2] text-[#4D4D4D] px-2 sm:px-3 py-1 rounded-full text-[11px] sm:text-[12px] font-medium flex items-center justify-center">Menunggu</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[12px] sm:text-[13px] truncate">Budi Santoro 24/5555555/9/22222</p>
                                </div>
                            </div>
                            <div class="max-w-[140px] sm:max-w-[180px] mb-6 w-full">
                                <p class="text-[12px] sm:text-[13px] leading-tight line-clamp-2 w-full">Permohonan persetujuan KRS untuk semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>

                        <div class="bg-[#F5F5F5] flex flex-col space-y-2 rounded-lg p-4 sm:p-6 mb-6 w-full">
                            <span class="text-gray-500 text-[10px] sm:text-[11px] w-full truncate">Persetujuan KRS_Budi_555555.pdf</span>
                        </div>
                        <div class="flex space-x-2 justify-center items-center mb-6 w-full">
                            <button
                                class="justify-center bg-white text-[#4D4D4D] border border-[#C1C1C1] px-4 sm:px-6 py-2 rounded-lg text-[11px] sm:text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 w-full">
                                <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class="w-4 sm:w-5 h-4 sm:h-5">
                                Lihat Dokumen
                            </button>
                        </div>
                        <div class="flex space-x-2 justify-center w-full">
                            <button
                                class="btn-setujui-ttd bg-[#5CBDB9] text-[#4D4D4D] border border-[#C1C1C1] px-3 sm:px-6 py-2 rounded-lg text-[11px] sm:text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Setujui
                            </button>
                            <button
                                class="btn-revisi bg-white text-[#4D4D4D] border border-[#C1C1C1] px-3 sm:px-6 py-2 rounded-lg text-[11px] sm:text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Revisi
                            </button>
                        </div>
                        <div class="flex space-x-2 justify-center items-center mt-4 w-full">
                            <button
                                class="btn-tolak-ttd justify-center bg-white border border-[#D4183D] text-[11px] sm:text-[12px] text-[#D4183D] font-regular px-4 sm:px-6 py-2 rounded-lg hover:bg-gray-200 transition duration-200 flex items-center gap-2 w-full">
                                <img src="{{ asset('images/tolak.png') }}" alt="ikonTolak" class="w-4 h-4">
                                Tolak Permintaan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Permintaan Janji Temu -->
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 gap-4">
                    <h2 class="text-2xl font-bold text-[#4D4D4D]">Permintaan Janji Temu</h2>
                    <button onclick="window.location.href='{{ route('dosen.janjiTemu') }}'"
                        class="bg-white text-[#4D4D4D] px-4 sm:px-6 py-2 rounded-lg text-[14px] sm:text-[16px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 w-full sm:w-auto justify-center">
                        <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class="w-4 sm:w-5 h-4 sm:h-5">
                        Lihat Semua
                    </button>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Card 1 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-4 py-4">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/user.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[140px] sm:max-w-[180px] flex-1">
                                        <h3 class="text-[14px] sm:text-[15px] leading-tight line-clamp-2">Bimbingan Tugas Akhir</h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-2 sm:ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#D4183D] text-[white] px-2 sm:px-3 py-1 rounded-full text-[11px] sm:text-[12px] font-medium flex items-center justify-center">Urgent</span>
                                    <span
                                        class="bg-[#FEF9C2] text-[#4D4D4D] px-2 sm:px-3 py-1 rounded-full text-[11px] sm:text-[12px] font-medium flex items-center justify-center">Menunggu</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[12px] sm:text-[13px] truncate">Lisa Permata 22/555555/SV/25555</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[12px] sm:text-[13px]">Jumat, 26 September 2025 10:00 - 11:00 WIB</p>
                                </div>
                            </div>
                            <div class="max-w-[140px] sm:max-w-[180px] mb-6 w-full">
                                <p class="text-[12px] sm:text-[13px] leading-tight w-full">Permohonan persetujuan KRS untuk semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>
                        <div class="flex space-x-2 justify-center w-full">
                            <button
                                class="btn-setujui-janjiTemu bg-[#5CBDB9] text-[#4D4D4D] border border-[#C1C1C1] px-3 sm:px-6 py-2 rounded-lg text-[11px] sm:text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Setujui
                            </button>
                            <button
                                class="bg-white text-[#4D4D4D] border border-[#C1C1C1] px-3 sm:px-6 py-2 rounded-lg text-[11px] sm:text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
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
                                    <div class="max-w-[140px] sm:max-w-[180px] flex-1">
                                        <h3 class="text-[14px] sm:text-[15px] leading-tight line-clamp-2">Bimbingan Tugas Akhir</h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-2 sm:ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#D4183D] text-[white] px-2 sm:px-3 py-1 rounded-full text-[11px] sm:text-[12px] font-medium flex items-center justify-center">Urgent</span>
                                    <span
                                        class="bg-[#FEF9C2] text-[#4D4D4D] px-2 sm:px-3 py-1 rounded-full text-[11px] sm:text-[12px] font-medium flex items-center justify-center">Menunggu</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[12px] sm:text-[13px] truncate">Lisa Permata 22/555555/SV/25555</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[12px] sm:text-[13px]">Jumat, 26 September 2025 10:00 - 11:00 WIB</p>
                                </div>
                            </div>
                            <div class="max-w-[140px] sm:max-w-[180px] mb-6 w-full">
                                <p class="text-[12px] sm:text-[13px] leading-tight w-full">Permohonan persetujuan KRS untuk semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>
                        <div class="flex space-x-2 justify-center w-full">
                            <button
                                class="btn-setujui-janjiTemu bg-[#5CBDB9] text-[#4D4D4D] border border-[#C1C1C1] px-3 sm:px-6 py-2 rounded-lg text-[11px] sm:text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Setujui
                            </button>
                            <button
                                class="bg-white text-[#4D4D4D] border border-[#C1C1C1] px-3 sm:px-6 py-2 rounded-lg text-[11px] sm:text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
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
                                    <div class="max-w-[140px] sm:max-w-[180px] flex-1">
                                        <h3 class="text-[14px] sm:text-[15px] leading-tight line-clamp-2">Bimbingan Tugas Akhir</h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-2 sm:ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#D4183D] text-[white] px-2 sm:px-3 py-1 rounded-full text-[11px] sm:text-[12px] font-medium flex items-center justify-center">Urgent</span>
                                    <span
                                        class="bg-[#FEF9C2] text-[#4D4D4D] px-2 sm:px-3 py-1 rounded-full text-[11px] sm:text-[12px] font-medium flex items-center justify-center">Menunggu</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[12px] sm:text-[13px] truncate">Lisa Permata 22/555555/SV/25555</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[12px] sm:text-[13px]">Jumat, 26 September 2025 10:00 - 11:00 WIB</p>
                                </div>
                            </div>
                            <div class="max-w-[140px] sm:max-w-[180px] mb-6 w-full">
                                <p class="text-[12px] sm:text-[13px] leading-tight w-full">Permohonan persetujuan KRS untuk semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>
                        <div class="flex space-x-2 justify-center w-full">
                            <button
                                class="btn-setujui-janjiTemu bg-[#5CBDB9] text-[#4D4D4D] border border-[#C1C1C1] px-3 sm:px-6 py-2 rounded-lg text-[11px] sm:text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Setujui
                            </button>
                            <button
                                class="bg-white text-[#4D4D4D] border border-[#C1C1C1] px-3 sm:px-6 py-2 rounded-lg text-[11px] sm:text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Jadwal Ulang
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Jadwal Mendatang -->
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 gap-4">
                    <h2 class="text-2xl font-bold text-[#4D4D4D]">Jadwal Mendatang</h2>
                    <button onclick="window.location.href='{{ route('dosen.jadwalMendatang') }}'"
                        class="bg-white text-[#4D4D4D] px-4 sm:px-6 py-2 rounded-lg text-[14px] sm:text-[16px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 w-full sm:w-auto justify-center">
                        <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class="w-4 sm:w-5 h-4 sm:h-5">
                        Lihat Semua
                    </button>
                </div>
                <div class="rounded-lg p-4 sm:p-6 bg-white">
                    {{--  Card 1 --}}
                    <div class="bg-white border-l-4 border-[#FFD66B] pl-4 py-3 gap-4 mb-4">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 mb-3">
                            <span class="bg-[#5CBDB9] rounded-lg text-xs sm:text-[14px] text-white px-2 sm:px-3 py-1 w-fit">Janji Temu</span>
                            <span class="font-semibold text-sm sm:text-[16px] text-[#4D4D4D]">Bimbingan Tugas Akhir</span>
                        </div>

                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-sm sm:text-[14px]">Andi Wijaya</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-sm sm:text-[14px]">10:00 - 11:00 WIB</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/pin.png') }}" alt="pin" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-sm sm:text-[14px]">Ruang Dosen 2</span>
                            </div>
                        </div>
                    </div>
                    {{--  Card 2 --}}
                    <div class="bg-white border-l-4 border-[#FFD66B] pl-4 py-3 gap-4 mb-4">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 mb-3">
                            <span class="bg-[#5CBDB9] rounded-lg text-xs sm:text-[14px] text-white px-2 sm:px-3 py-1 w-fit">Janji Temu</span>
                            <span class="font-semibold text-sm sm:text-[16px] text-[#4D4D4D]">Bimbingan Tugas Akhir</span>
                        </div>

                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-sm sm:text-[14px]">Andi Wijaya</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-sm sm:text-[14px]">10:00 - 11:00 WIB</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/pin.png') }}" alt="pin" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-sm sm:text-[14px]">Ruang Dosen 2</span>
                            </div>
                        </div>
                    </div>
                    {{--  Card 3 --}}
                    <div class="bg-white border-l-4 border-[#FFD66B] pl-4 py-3 gap-4 mb-4">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 mb-3">
                            <span class="bg-[#5CBDB9] rounded-lg text-xs sm:text-[14px] text-white px-2 sm:px-3 py-1 w-fit">Janji Temu</span>
                            <span class="font-semibold text-sm sm:text-[16px] text-[#4D4D4D]">Bimbingan Tugas Akhir</span>
                        </div>

                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-sm sm:text-[14px]">Andi Wijaya</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-sm sm:text-[14px]">10:00 - 11:00 WIB</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/pin.png') }}" alt="pin" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-sm sm:text-[14px]">Ruang Dosen 2</span>
                            </div>
                        </div>
                    </div>
                    {{--  Card 4 --}}
                    <div class="bg-white border-l-4 border-[#FFD66B] pl-4 py-3 gap-4 mb-4">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 mb-3">
                            <span class="bg-[#5CBDB9] rounded-lg text-xs sm:text-[14px] text-white px-2 sm:px-3 py-1 w-fit">Janji Temu</span>
                            <span class="font-semibold text-sm sm:text-[16px] text-[#4D4D4D]">Bimbingan Tugas Akhir</span>
                        </div>

                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-sm sm:text-[14px]">Andi Wijaya</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-sm sm:text-[14px]">10:00 - 11:00 WIB</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/pin.png') }}" alt="pin" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-sm sm:text-[14px]">Ruang Dosen 2</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kanan -->
            <div class="w-full lg:w-80 space-y-6">
                <!-- Calendar -->
                <div class="bg-white rounded-lg shadow-custom p-4 sm:p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold text-[#4D4D4D]">Kalender</h3>
                        <div class="flex space-x-2">
                            <button class="text-gray-600 hover:text-gray-800">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <span class="font-medium text-sm sm:text-base">Juni 2023</span>
                            <button class="text-gray-600 hover:text-gray-800">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    <div class="grid grid-cols-7 gap-1 text-center mb-2">
                        <div class="text-gray-500 text-xs sm:text-sm font-medium">Su</div>
                        <div class="text-gray-500 text-xs sm:text-sm font-medium">Mo</div>
                        <div class="text-gray-500 text-xs sm:text-sm font-medium">Tu</div>
                        <div class="text-gray-500 text-xs sm:text-sm font-medium">We</div>
                        <div class="text-gray-500 text-xs sm:text-sm font-medium">Th</div>
                        <div class="text-gray-500 text-xs sm:text-sm font-medium">Fr</div>
                        <div class="text-gray-500 text-xs sm:text-sm font-medium">Sa</div>
                    </div>

                    <div class="grid grid-cols-7 gap-1 text-center">
                        <!-- kalender -->
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">1</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">2</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">3</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">4</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">5</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">6</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">7</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">8</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">9</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">10</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">11</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">12</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">13</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">14</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">15</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">16</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">17</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">18</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">19</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">20</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">21</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">22</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">23</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">24</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">25</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">26</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">27</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">28</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">29</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm">30</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm text-gray-400">1</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm text-gray-400">2</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm text-gray-400">3</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm text-gray-400">4</div>
                        <div class="p-1 sm:p-2 text-xs sm:text-sm text-gray-400">5</div>
                    </div>
                </div>

                <!-- riwayat -->
                <div class="bg-white rounded-lg shadow-custom p-4 sm:p-6">
                    <h3 class="text-lg font-bold text-[#4D4D4D] mb-4">Aktivitas Terbaru</h3>
                    {{-- card 1 --}}
                    <div class="space-y-3 gap-4 mb-4">
                        <div class="bg-[#F1F1F1] rounded-lg p-4">
                            <div class="flex items-start gap-3">
                                <img src="{{ asset('images/dokumen-biru.png') }}" alt="dokumenBiru"
                                    class="w-6 h-6 mt-1 flex-shrink-0">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 mb-1">
                                        <span class="text-[14px] sm:text-[15px] font-bold text-[#4D4D4D]">Menandatangani KRS</span>
                                    </div>
                                    <div class="space-y-1">
                                        <p class="text-[13px] sm:text-[14px] text-gray-600">Budi Sentosa</p>
                                        <p class="text-[11px] sm:text-[12px] text-gray-500">1 Jam lalu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- card 2 --}}
                    <div class="space-y-3">
                        <div class="bg-[#F1F1F1] rounded-lg p-4 gap-4 mb-4">
                            <div class="flex items-start gap-3">
                                <img src="{{ asset('images/dokumen-biru.png') }}" alt="dokumenBiru"
                                    class="w-6 h-6 mt-1 flex-shrink-0">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 mb-1">
                                        <span class="text-[14px] sm:text-[15px] font-bold text-[#4D4D4D]">Menandatangani KRS</span>
                                    </div>
                                    <div class="space-y-1">
                                        <p class="text-[13px] sm:text-[14px] text-gray-600">Budi Sentosa</p>
                                        <p class="text-[11px] sm:text-[12px] text-gray-500">1 Jam lalu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- card 3 --}}
                    <div class="space-y-3">
                        <div class="bg-[#F1F1F1] rounded-lg p-4 gap-4 mb-4">
                            <div class="flex items-start gap-3">
                                <img src="{{ asset('images/dokumen-biru.png') }}" alt="dokumenBiru"
                                    class="w-6 h-6 mt-1 flex-shrink-0">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 mb-1">
                                        <span class="text-[14px] sm:text-[15px] font-bold text-[#4D4D4D]">Menandatangani KRS</span>
                                    </div>
                                    <div class="space-y-1">
                                        <p class="text-[13px] sm:text-[14px] text-gray-600">Budi Sentosa</p>
                                        <p class="text-[11px] sm:text-[12px] text-gray-500">1 Jam lalu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button onclick="window.location.href='{{ route('dosen.history') }}'"
                        class="border border-[#C1C1C1] mb-2 w-full bg-white text-[#4D4D4D] py-2 rounded-lg font-medium hover:bg-[#FFD66B] transition duration-200">
                        Lihat Semua
                    </button>
                </div>

                <!-- bantuan -->
                <div class="bg-white rounded-lg shadow-custom p-4 sm:p-6">
                    <h3 class="text-lg font-bold text-[#4D4D4D] mb-4">Butuh Bantuan?</h3>
                    <p class="text-gray-600 mb-4 text-sm sm:text-base">Ada pertanyaan mengenai sistem? Hubungi admin atau lihat panduan penggunaan.</p>
                    <button
                        class="border border-[#C1C1C1] mb-2 w-full bg-white text-[#4D4D4D] py-2 rounded-lg font-medium hover:bg-[#FFD66B] transition duration-200">
                        Panduan Sistem
                    </button>
                    <button
                        class="border border-[#C1C1C1] w-full bg-white text-[#4D4D4D] py-2 rounded-lg font-medium hover:bg-[#FFD66B] transition duration-200">
                        Hubungi Admin
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal Popup (tetap sama seperti sebelumnya) -->
        {{-- SETUJUI ttd --}}
        <div id="approveModalttd" class="fixed inset-0 overflow-y-auto h-full w-full hidden z-50">
            <div class="relative top-10 sm:top-20 mx-auto p-4 sm:p-5 border border-white w-full max-w-2xl shadow-lg rounded-md bg-white m-4">
                <!-- Konten modal sama seperti sebelumnya -->
            </div>
        </div>

        {{-- REVISI ttd --}}
        <div id="revisiModalttd" class="fixed inset-0 overflow-y-auto h-full w-full hidden z-50">
            <div class="relative top-10 sm:top-20 mx-auto p-4 sm:p-5 border border-white w-full max-w-2xl shadow-lg rounded-md bg-white m-4">
                <!-- Konten modal sama seperti sebelumnya -->
            </div>
        </div>

        {{-- SETUJUI JANJI TEMU --}}
        <div id="approveModaljanjiTemu" class="fixed inset-0 overflow-y-auto h-full w-full hidden z-50">
            <div class="relative top-10 sm:top-20 mx-auto p-4 sm:p-5 border border-white w-full max-w-2xl shadow-lg rounded-md bg-white m-4">
                <!-- Konten modal sama seperti sebelumnya -->
            </div>
        </div>

        {{-- TOLAK DOKUMEN --}}
        <div id="tolakModalttd" class="fixed inset-0 overflow-y-auto h-full w-full hidden z-50">
            <div class="relative top-10 sm:top-20 mx-auto p-4 sm:p-5 border border-white w-full max-w-2xl shadow-lg rounded-md bg-white m-4">
                <!-- Konten modal sama seperti sebelumnya -->
            </div>
        </div>
    </main>
@endsection
@vite(['resources/js/Dosen/tandaTangan.js'])
@vite(['resources/js/Dosen/janjiTemu.js'])

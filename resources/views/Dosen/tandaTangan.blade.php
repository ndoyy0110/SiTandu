@extends('layouts.templateDosen')
@section('title', 'Tanda Tangan - SITandu')
@section('content')
    <!-- Main Content -->
    <main class="justify-start max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-6">
            <!--  kiri -->
            <div class="flex-1 space-y-6">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 relative gap-4">
                    <h2 class="text-2xl font-bold text-[#4D4D4D]">Permintaan Tanda Tangan</h2>

                    <div class="relative w-full sm:w-auto">
                        <button id="sort-menu-button"
                            class="text-[#4D4D4D] gap-2 text-sm font-medium bg-[white] border border-[#C1C1C1] hover:bg-[#FFDA7A] rounded-md py-2 px-4 sm:px-6 flex items-center justify-between w-full sm:w-auto">
                            Terbaru
                            <img src="{{ asset('images/panah.png') }}" alt="dropdown Icon" class="w-[18px] h-[16px]">
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="sort-menu"
                            class="hidden absolute right-0 top-full mt-1 w-full sm:w-48 bg-white rounded-md shadow-lg py-2 z-10 border border-gray-200">
                            <div class="space-y-1">
                                <div class="flex flex-col">
                                    <button
                                        class="sort-option w-full text-left px-4 py-2 text-sm text-[#4D4D4D] hover:bg-[#FFDA7A] rounded-md transition duration-200 font-medium mb-2"
                                        data-sort="terbaru">
                                        Terbaru
                                    </button>
                                    <button
                                        class="sort-option w-full text-left px-4 py-2 text-sm text-[#4D4D4D] hover:bg-[#FFDA7A] rounded-md transition duration-200 font-medium mb-2"
                                        data-sort="terlama">
                                        Terlama
                                    </button>
                                    <button
                                        class="sort-option w-full text-left px-4 py-2 text-sm text-[#4D4D4D] hover:bg-[#FFDA7A] rounded-md transition duration-200 font-medium"
                                        data-sort="prioritas">
                                        Prioritas Tinggi
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-[20px] text-[#4D4D4D]">Hari Ini</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
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
                    <!-- Card 4 -->
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

                {{-- SETUJUI ttd --}}
                <div id="approveModalttd" class="fixed inset-0 overflow-y-auto h-full w-full hidden z-50">
                    <div
                        class="relative top-10 sm:top-20 mx-auto p-4 sm:p-5 border border-white w-full max-w-2xl shadow-lg rounded-md bg-white m-4">
                        <div class="flex justify-between items-center pb-4">
                            <h3 class="text-[18px] sm:text-[20px] font-bold text-[#4D4D4D]">Setujui Dokumen</h3>
                        </div>

                        <div class="mt-4 space-y-6">
                            <div>
                                <p class="text-[13px] sm:text-[14px] font-bold text-gray-600 mb-1">Dokumen: <span
                                        class="font-medium text-[13px] sm:text-[14px]">Persetujuan KRS
                                        Semester Ganjil</span></p>
                                <p class="text-[13px] sm:text-[14px] font-bold text-gray-600">Mahasiswa: <span
                                        class="font-medium text-[13px] sm:text-[14px]">Budi Santoso -
                                        24/555555/SV/22222</span></p>
                            </div>

                            <div class="border border-[#C1C1C1] rounded-lg p-4">
                                <h4 class="font-semibold text-[#4D4D4D] text-[13px] sm:text-[14px] mb-3">1. Unduh Dokumen Asli</h4>
                                <div class="flex justify-center">
                                    <button
                                        class="border border-[#C1C1C1] rounded-lg p-3 sm:p-4 flex items-center gap-2 text-[#4D4D4D] hover:text-[#4ca8a4] transition duration-200 w-full sm:w-auto justify-center">
                                        <img src="{{ asset('images/download.png') }}" alt="downloadDokumen"
                                            class="w-[16px] h-[16px]">
                                        <span class="font-medium text-sm sm:text-base">Unduh Dokumen</span>
                                    </button>
                                </div>
                            </div>

                            <div class="border border-[#C1C1C1] rounded-lg p-4">
                                <h4 class="font-semibold text-[#4D4D4D] mb-3 text-[13px] sm:text-[14px]">2. Upload Dokumen yang Sudah Ditandatangani</h4>

                                <div id="dropzone"
                                    class="border-2 border-dashed border-gray-300 rounded-lg p-4 sm:p-8 text-center hover:border-[#5CBDB9] transition duration-200 cursor-pointer">
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset('images/upload.png') }}" alt="uploadDokumen"
                                            class="w-[20px] sm:w-[24px] h-[20px] sm:h-[24px]">
                                    </div>
                                    <p class="mt-2 text-xs sm:text-sm text-gray-600">Drop file di sini atau <span
                                            class="text-[#5CBDB9] font-medium">pilih file</span></p>
                                    <input type="file" id="fileInput" class="hidden" accept=".pdf,.doc,.docx">
                                    <p class="text-xs text-gray-500 mt-1">PDF, DOC, DOCX (Max. 10MB)</p>
                                </div>

                                <div id="filePreview"
                                    class="hidden mt-3 p-3 bg-green-50 border border-green-200 rounded-lg">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <svg class="w-6 sm:w-8 h-6 sm:h-8 text-green-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <div>
                                                <p class="text-xs sm:text-sm font-medium text-gray-700" id="fileName">
                                                    document_signed.pdf</p>
                                                <p class="text-xs text-gray-500">Berhasil diupload</p>
                                            </div>
                                        </div>
                                        <button id="removeFile" class="text-gray-400 hover:text-gray-600">
                                            <svg class="w-4 sm:w-5 h-4 sm:h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-3 pt-4">
                                <button id="submitApprove"
                                    class="flex-1 bg-[#5CBDB9] text-white py-3 rounded-lg font-medium hover:bg-[#4ca8a4] transition duration-200 flex items-center justify-center gap-2">
                                    <img src="{{ asset('images/send.png') }}" alt="ikonKirim" class="w-[16px] h-[16px]">
                                    Kirim & Setujui
                                </button>
                                <button id="cancelApprove"
                                    class="flex-1 bg-white text-gray-700 border border-gray-300 py-3 rounded-lg font-medium hover:bg-gray-50 transition duration-200">
                                    Batal
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- REVISI ttd --}}
                <div id="revisiModalttd" class="fixed inset-0 overflow-y-auto h-full w-full hidden z-50">
                    <div
                        class="relative top-10 sm:top-20 mx-auto p-4 sm:p-5 border border-white w-full max-w-2xl shadow-lg rounded-md bg-white m-4">
                        <div class="flex justify-between items-center pb-4">
                            <h3 class="text-[18px] sm:text-[20px] font-bold text-[#4D4D4D]">Revisi Dokumen</h3>
                        </div>

                        <div class="mt-4 space-y-6">
                            <div>
                                <p class="text-[13px] sm:text-[14px] font-bold text-gray-600 mb-1">Dokumen: <span
                                        class="font-medium text-[13px] sm:text-[14px]">Persetujuan KRS Semester Ganjil</span></p>
                                <p class="text-[13px] sm:text-[14px] font-bold text-gray-600">Mahasiswa: <span
                                        class="font-medium text-[13px] sm:text-[14px]">Budi Santoso - 24/555555/SV/22222</span></p>
                            </div>

                            <div class="border border-[white] rounded-lg p-4">
                                <h4 class="font-semibold text-[#4D4D4D] text-[13px] sm:text-[14px] mb-3">Alasan Revisi</h4>
                                <div class="flex justify-center">
                                    <textarea id="alasan-revisi-input"
                                        class="w-full border border-[#C1C1C1] rounded-lg py-3 px-4 text-sm focus:outline-none focus:ring-2 focus:ring-[#5CBDB9] focus:border-transparent resize-none"
                                        placeholder="Ketikkan alasan dokumen perlu direvisi" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="border border-[white] rounded-lg p-4">
                                <h4 class="font-semibold text-[#4D4D4D] text-[14px] sm:text-[15px]">Unggah File Revisi</h4>
                                <p class="text-[11px] sm:text-[12px] text-[#4D4D4D]">Unggah dokumen yang sudah Anda beri komentar atau catatan revisi.</p>

                                <div id="dropzone"
                                    class="border-2 border-dashed border-gray-300 rounded-lg p-4 sm:p-8 text-center hover:border-[#5CBDB9] transition duration-200 cursor-pointer">
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset('images/upload.png') }}" alt="uploadDokumen"
                                            class="w-[20px] sm:w-[24px] h-[20px] sm:h-[24px]">
                                    </div>
                                    <p class="mt-2 text-xs sm:text-sm text-gray-600">Drop file di sini atau <span
                                            class="text-[#5CBDB9] font-medium">pilih file</span></p>
                                    <input type="file" id="fileInput" class="hidden" accept=".pdf,.doc,.docx">
                                    <p class="text-xs text-gray-500 mt-1">PDF, DOC, DOCX (Max. 10MB)</p>
                                </div>

                                <div id="filePreview"
                                    class="hidden mt-3 p-3 bg-green-50 border border-green-200 rounded-lg">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <svg class="w-6 sm:w-8 h-6 sm:h-8 text-green-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <div>
                                                <p class="text-xs sm:text-sm font-medium text-gray-700" id="fileName">
                                                    document_signed.pdf</p>
                                                <p class="text-xs text-gray-500">Berhasil diupload</p>
                                            </div>
                                        </div>
                                        <button id="removeFile" class="text-gray-400 hover:text-gray-600">
                                            <svg class="w-4 sm:w-5 h-4 sm:h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-3 pt-4">
                                <button id="submitRevisi"
                                    class="flex-1 bg-[#5CBDB9] text-white py-3 rounded-lg font-medium hover:bg-[#4ca8a4] transition duration-200 flex items-center justify-center gap-2">
                                    <img src="{{ asset('images/send.png') }}" alt="ikonKirim" class="w-[16px] h-[16px]">
                                    Kirim Revisi
                                </button>
                                <button id="cancelRevisi"
                                    class="flex-1 bg-white text-gray-700 border border-gray-300 py-3 rounded-lg font-medium hover:bg-gray-50 transition duration-200">
                                    Batal
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- TOLAK DOKUMEN --}}
                <div id="tolakModalttd" class="fixed inset-0 overflow-y-auto h-full w-full hidden z-50">
                    <div
                        class="relative top-10 sm:top-20 mx-auto p-4 sm:p-5 border border-white w-full max-w-2xl shadow-lg rounded-md bg-white m-4">
                        <div class="flex justify-between items-center pb-4">
                            <h3 class="text-[18px] sm:text-[20px] font-bold text-[#4D4D4D]">Tolak Dokumen</h3>
                        </div>

                        <div class="mt-4 space-y-6">
                            <div>
                                <p class="text-[13px] sm:text-[14px] font-bold text-gray-600 mb-1">Dokumen: <span
                                        class="font-medium text-[13px] sm:text-[14px]">Persetujuan KRS Semester Ganjil</span></p>
                                <p class="text-[13px] sm:text-[14px] font-bold text-gray-600">Mahasiswa: <span
                                        class="font-medium text-[13px] sm:text-[14px]">Budi Santoso - 24/555555/SV/22222</span></p>
                            </div>

                            <div class="border border-[white] rounded-lg p-4">
                                <h4 class="font-semibold text-[#4D4D4D] text-[13px] sm:text-[14px] mb-3">Alasan Penolakan</h4>
                                <div class="flex justify-center">
                                    <textarea id="alasan-tolak-input"
                                        class="w-full border border-[#C1C1C1] rounded-lg py-3 px-4 text-sm focus:outline-none focus:ring-2 focus:ring-[#5CBDB9] focus:border-transparent resize-none"
                                        placeholder="Ketikkan alasan mengapa permintaan ditolak" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-3 pt-4">
                                <button id="submitTolak"
                                    class="flex-1 bg-[#E15D77] text-white py-3 rounded-lg font-medium hover:bg-[#d14a6a] transition duration-200 flex items-center justify-center gap-2">
                                    <img src="{{ asset('images/tolakPutih.png') }}" alt="ikonTolak"
                                        class="w-[16px] h-[16px]">
                                    Tolak Permintaan
                                </button>
                                <button id="cancelTolak"
                                    class="flex-1 bg-white text-[#4D4D4D] border border-[#C1C1C1] py-3 rounded-lg font-medium hover:bg-gray-50 transition duration-200">
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
@vite(['resources/js/Dosen/tandaTangan.js'])

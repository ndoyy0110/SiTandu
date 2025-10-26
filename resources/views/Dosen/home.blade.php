@extends('layouts.template')
@section('title', 'Login - SITandu')
@section('content')
    <!-- Main Content -->
    <main class="justify-start max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Left kiri -->
            <div class="flex-1 space-y-6">
                <!-- Permintaan Tanda Tangan -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-[#4D4D4D]">Permintaan Tanda Tangan</h2>
                    <button onclick="window.location.href='{{ route('dosen.tandaTangan') }}'"
                        class="bg-white text-[#4D4D4D] px-6 py-2 rounded-lg text-[16px] hover:bg-gray-200 transition duration-200 flex items-center gap-2">
                        <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class="w-5 h-5">
                        Lihat Semua
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Card 1 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-6 py-6 w-full max-w-none">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/dokumen.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h3 class="text-[15px] leading-tight line-clamp-2">Persetujuan KRS Semester Ganjil
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#D4183D] text-[white] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Urgent</span>
                                    <span
                                        class="bg-[#FEF9C2] text-[#4D4D4D] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Menunggu</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Budi Santoro 24/5555555/9/22222</p>
                                </div>
                            </div>
                            <div class="max-w-[180px] mb-6 w-full">
                                <p class="text-[13px] leading-tight line-clamp-2 w-full">Permohonan persetujuan KRS untuk
                                    semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>

                        <div class="bg-[#F5F5F5] flex flex-col space-y-2 rounded-lg p-6 mb-6 w-full">
                            <span class="text-gray-500 text-[11px] w-full">Persetujuan KRS_Budi_555555.pdf</span>
                        </div>
                        <div class="flex space-x-2 justify-center items-center mb-6 w-full">
                            <button
                                class="justify-center bg-white text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 w-full">
                                <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class=" w-5 h-5">
                                Lihat Dokumen
                            </button>
                        </div>
                        <div class="flex space-x-2 justify-center w-full">
                            <button
                                class="btn-setujui-ttd bg-[#5CBDB9] text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Setujui
                            </button>
                            <button
                                class="btn-revisi bg-white text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Revisi
                            </button>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-6 py-6 w-full max-w-none">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/dokumen.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h3 class="text-[15px] leading-tight line-clamp-2">Persetujuan KRS Semester Ganjil
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#D4183D] text-[white] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Urgent</span>
                                    <span
                                        class="bg-[#FEF9C2] text-[#4D4D4D] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Menunggu</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Budi Santoro 24/5555555/9/22222</p>
                                </div>
                            </div>
                            <div class="max-w-[180px] mb-6 w-full">
                                <p class="text-[13px] leading-tight line-clamp-2 w-full">Permohonan persetujuan KRS untuk
                                    semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>

                        <div class="bg-[#F5F5F5] flex flex-col space-y-2 rounded-lg p-6 mb-6 w-full">
                            <span class="text-gray-500 text-[11px] w-full">Persetujuan KRS_Budi_555555.pdf</span>
                        </div>
                        <div class="flex space-x-2 justify-center items-center mb-6 w-full">
                            <button
                                class="justify-center bg-white text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 w-full">
                                <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class=" w-5 h-5">
                                Lihat Dokumen
                            </button>
                        </div>
                        <div class="flex space-x-2 justify-center w-full">
                            <button
                                class="btn-setujui-ttd bg-[#5CBDB9] text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Setujui
                            </button>
                            <button
                                class="btn-revisi bg-white text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Revisi
                            </button>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-6 py-6 w-full max-w-none">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <img src="{{ asset('images/dokumen.png') }}" alt="ikonDokumen" class="w-6 h-6 mt-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h3 class="text-[15px] leading-tight line-clamp-2">Persetujuan KRS Semester Ganjil
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 ml-4 flex-shrink-0 justify-center">
                                    <span
                                        class="bg-[#D4183D] text-[white] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Urgent</span>
                                    <span
                                        class="bg-[#FEF9C2] text-[#4D4D4D] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Menunggu</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                                <div class="flex-1">
                                    <p class="text-gray-700 text-[13px]">Budi Santoro 24/5555555/9/22222</p>
                                </div>
                            </div>
                            <div class="max-w-[180px] mb-6 w-full">
                                <p class="text-[13px] leading-tight line-clamp-2 w-full">Permohonan persetujuan KRS untuk
                                    semester ganjil 2024/2025. Total 21 SKS.</p>
                            </div>
                        </div>

                        <div class="bg-[#F5F5F5] flex flex-col space-y-2 rounded-lg p-6 mb-6 w-full">
                            <span class="text-gray-500 text-[11px] w-full">Persetujuan KRS_Budi_555555.pdf</span>
                        </div>
                        <div class="flex space-x-2 justify-center items-center mb-6 w-full">
                            <button
                                class="justify-center bg-white text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 w-full">
                                <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class=" w-5 h-5">
                                Lihat Dokumen
                            </button>
                        </div>
                        <div class="flex space-x-2 justify-center w-full">
                            <button
                                class="btn-setujui-ttd bg-[#5CBDB9] text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Setujui
                            </button>
                            <button
                                class="btn-revisi bg-white text-[#4D4D4D] border border-[#C1C1C1] px-6 py-2 rounded-lg text-[12px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 flex-1 justify-center">
                                Revisi
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Permintaan Janji Temu -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-[#4D4D4D]">Permintaan Janji Temu</h2>
                    <button onclick="window.location.href='{{ route('dosen.janjiTemu') }}'"
                        class="bg-white text-[#4D4D4D] px-6 py-2 rounded-lg text-[16px] hover:bg-gray-200 transition duration-200 flex items-center gap-2">
                        <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class="w-5 h-5">
                        Lihat Semua
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
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
                                        class="bg-[#D4183D] text-[white] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Urgent</span>
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
                                        class="bg-[#D4183D] text-[white] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Urgent</span>
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
                                        class="bg-[#D4183D] text-[white] px-3 py-1 rounded-full text-[12px] font-medium flex items-center justify-center">Urgent</span>
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

                <!-- Jadwal Mendatang -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-[#4D4D4D]">Jadwal Mendatang</h2>
                    <button onclick="window.location.href='{{ route('dosen.jadwalMendatang') }}'"
                        class="bg-white text-[#4D4D4D] px-6 py-2 rounded-lg text-[16px] hover:bg-gray-200 transition duration-200 flex items-center gap-2">
                        <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class="w-5 h-5">
                        Lihat Semua
                    </button>
                </div>
                <div class="rounded-lg p-6 bg-white">
                    {{--  Card 1 --}}
                    <div class="bg-white border-l-4 border-[#FFD66B] pl-4 py-3 gap-4 mb-4">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-[#5CBDB9] rounded-lg text-[14px] text-white px-3 py-1">Janji Temu</span>
                            <span class="font-bold text-[16px] text-[#4D4D4D]">Bimbingan Tugas Akhir</span>
                        </div>

                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-[14px]">Andi Wijaya</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-[14px]">10:00 - 11:00 WIB</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/pin.png') }}" alt="pin" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-[14px]">Ruang Dosen 2</span>
                            </div>
                        </div>
                    </div>
                    {{--  Card 2 --}}
                    <div class="bg-white border-l-4 border-[#FFD66B] pl-4 py-3 gap-4 mb-4">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-[#5CBDB9] rounded-lg text-[14px] text-white px-3 py-1">Janji Temu</span>
                            <span class="font-bold text-[16px] text-[#4D4D4D]">Bimbingan Tugas Akhir</span>
                        </div>

                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-[14px]">Andi Wijaya</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-[14px]">10:00 - 11:00 WIB</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/pin.png') }}" alt="pin" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-[14px]">Ruang Dosen 2</span>
                            </div>
                        </div>
                    </div>
                    {{--  Card 3 --}}
                    <div class="bg-white border-l-4 border-[#FFD66B] pl-4 py-3 gap-4 mb-4">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-[#5CBDB9] rounded-lg text-[14px] text-white px-3 py-1">Janji Temu</span>
                            <span class="font-bold text-[16px] text-[#4D4D4D]">Bimbingan Tugas Akhir</span>
                        </div>

                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-[14px]">Andi Wijaya</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-[14px]">10:00 - 11:00 WIB</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/pin.png') }}" alt="pin" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-[14px]">Ruang Dosen 2</span>
                            </div>
                        </div>
                    </div>
                    {{--  Card 4 --}}
                    <div class="bg-white border-l-4 border-[#FFD66B] pl-4 py-3 gap-4 mb-4">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-[#5CBDB9] rounded-lg text-[14px] text-white px-3 py-1">Janji Temu</span>
                            <span class="font-bold text-[16px] text-[#4D4D4D]">Bimbingan Tugas Akhir</span>
                        </div>

                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-[14px]">Andi Wijaya</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-[14px]">10:00 - 11:00 WIB</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/pin.png') }}" alt="pin" class="w-4 h-4">
                                <span class="text-[#4D4D4D] text-[14px]">Ruang Dosen 2</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Right Column - Sidebar Kanan -->
            <div class="w-full lg:w-80 space-y-6">
                <!-- Calendar -->
                <div class="bg-white rounded-lg shadow-custom p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold text-[#4D4D4D]">Kalender</h3>
                        <div class="flex space-x-2">
                            <button class="text-gray-600 hover:text-gray-800">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <span class="font-medium">Juni 2023</span>
                            <button class="text-gray-600 hover:text-gray-800">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    <div class="grid grid-cols-7 gap-1 text-center mb-2">
                        <div class="text-gray-500 font-medium">Su</div>
                        <div class="text-gray-500 font-medium">Mo</div>
                        <div class="text-gray-500 font-medium">Tu</div>
                        <div class="text-gray-500 font-medium">We</div>
                        <div class="text-gray-500 font-medium">Th</div>
                        <div class="text-gray-500 font-medium">Fr</div>
                        <div class="text-gray-500 font-medium">Sa</div>
                    </div>

                    <div class="grid grid-cols-7 gap-1 text-center">
                        <!-- Calendar dates -->
                        <div class="p-2">1</div>
                        <div class="p-2">2</div>
                        <div class="p-2">3</div>
                        <div class="p-2">4</div>
                        <div class="p-2">5</div>
                        <div class="p-2">6</div>
                        <div class="p-2">7</div>
                        <div class="p-2">8</div>
                        <div class="p-2">9</div>
                        <div class="p-2">10</div>
                        <div class="p-2">11</div>
                        <div class="p-2">12</div>
                        <div class="p-2">13</div>
                        <div class="p-2">14</div>
                        <div class="p-2">15</div>
                        <div class="p-2">16</div>
                        <div class="p-2">17</div>
                        <div class="p-2">18</div>
                        <div class="p-2">19</div>
                        <div class="p-2">20</div>
                        <div class="p-2">21</div>
                        <div class="p-2">22</div>
                        <div class="p-2">23</div>
                        <div class="p-2">24</div>
                        <div class="p-2">25</div>
                        <div class="p-2">26</div>
                        <div class="p-2">27</div>
                        <div class="p-2">28</div>
                        <div class="p-2">29</div>
                        <div class="p-2">30</div>
                        <div class="p-2 text-gray-400">1</div>
                        <div class="p-2 text-gray-400">2</div>
                        <div class="p-2 text-gray-400">3</div>
                        <div class="p-2 text-gray-400">4</div>
                        <div class="p-2 text-gray-400">5</div>
                    </div>
                </div>

                <!-- Recent Activities -->
                <div class="bg-white rounded-lg shadow-custom p-6">
                    <h3 class="text-lg font-bold text-[#4D4D4D] mb-4">Aktivitas Terbaru</h3>
                    {{-- card 1 --}}
                    <div class="space-y-3 gap-4 mb-4">
                        <div class="bg-[#F1F1F1] rounded-lg p-4">
                            <div class="flex items-start gap-3">
                                <img src="{{ asset('images/dokumen-biru.png') }}" alt="dokumenBiru"
                                    class="w-6 h-6 mt-1 flex-shrink-0">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 mb-1">
                                        <span class="text-[15px] font-bold text-[#4D4D4D]">Menandatangani KRS</span>
                                    </div>
                                    <div class="space-y-1">
                                        <p class="text-[14px] text-gray-600">Budi Sentosa</p>
                                        <p class="text-[12px] text-gray-500">1 Jam lalu</p>
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
                                        <span class="text-[15px] font-bold text-[#4D4D4D]">Menandatangani KRS</span>
                                    </div>
                                    <div class="space-y-1">
                                        <p class="text-[14px] text-gray-600">Budi Sentosa</p>
                                        <p class="text-[12px] text-gray-500">1 Jam lalu</p>
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
                                        <span class="text-[15px] font-bold text-[#4D4D4D]">Menandatangani KRS</span>
                                    </div>
                                    <div class="space-y-1">
                                        <p class="text-[14px] text-gray-600">Budi Sentosa</p>
                                        <p class="text-[12px] text-gray-500">1 Jam lalu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-white rounded-lg shadow-custom p-6">
                    <h3 class="text-lg font-bold text-[#4D4D4D] mb-4">Butuh Bantuan?</h3>
                    <p class="text-gray-600 mb-4">Ada pertanyaan mengenai sistem? Hubungi admin atau lihat panduan
                        penggunaan.</p>
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
        {{-- SETUJUI ttd --}}
        <div id="approveModalttd" class="fixed inset-0 overflow-y-auto h-full w-full hidden z-50">
            <div class="relative top-20 mx-auto p-5 border BORDER-WHITE w-full max-w-2xl shadow-lg rounded-md bg-white">
                <div class="flex justify-between items-center pb-4 ">
                    <h3 class="text-[20px] font-bold text-[#4D4D4D]">Setujui Dokumen</h3>
                </div>

                <div class="mt-4 space-y-6">
                    <div>
                        <p class="text-[14px] font-bold text-gray-600 mb-1">Dokumen: <span
                                class="font-medium text[14px]">Persetujuan KRS
                                Semester Ganjil</span></p>
                        <p class="text-[14px] font-bold text-gray-600">Mahasiswa: <span
                                class="font-medium text-[14px]">Budi Santoso -
                                24/555555/SV/22222</span></p>
                    </div>

                    <div class="border border-[#C1C1C1] rounded-lg p-4">
                        <h4 class="font-semibold text-[#4D4D4D] text-[14px] mb-3">1. Unduh Dokumen Asli</h4>
                        <div class="flex justify-center">
                            <button
                                class="border border-[#C1C1C1] rounded-lg p-4 flex items-center gap-2 text-[#4D4D4D] hover:text-[#4ca8a4] transition duration-200 ">
                                <img src="{{ asset('images/download.png') }}" alt="downloadDokumen"
                                    class="w-[16px] h-[16px]">
                                <span class="font-medium">Unduh Dokumen</span>
                            </button>
                        </div>
                    </div>

                    <div class="border border-[#C1C1C1] rounded-lg p-4">
                        <h4 class="font-semibold text-[#4D4D4D] mb-3">2. Upload Dokumen yang Sudah Ditandatangani</h4>

                        <div id="dropzone"
                            class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-[#5CBDB9] transition duration-200 cursor-pointer">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/upload.png') }}" alt="uploadDokumen"
                                    class="w-[24px] h-[24px]">
                            </div>
                            <p class="mt-2 text-sm text-gray-600">Drop file di sini atau <span
                                    class="text-[#5CBDB9] font-medium">pilih file</span></p>
                            <input type="file" id="fileInput" class="hidden" accept=".pdf,.doc,.docx">
                            <p class="text-xs text-gray-500 mt-1">PDF, DOC, DOCX (Max. 10MB)</p>
                        </div>

                        <div id="filePreview" class="hidden mt-3 p-3 bg-green-50 border border-green-200 rounded-lg">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="text-sm font-medium text-gray-700" id="fileName">
                                            document_signed.pdf</p>
                                        <p class="text-xs text-gray-500">Berhasil diupload</p>
                                    </div>
                                </div>
                                <button id="removeFile" class="text-gray-400 hover:text-gray-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex space-x-3 pt-4">
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
            <div class="relative top-20 mx-auto p-5 border border-white w-full max-w-2xl shadow-lg rounded-md bg-white">
                <div class="flex justify-between items-center pb-4">
                    <h3 class="text-[20px] font-bold text-[#4D4D4D]">Revisi Dokumen</h3>
                </div>

                <div class="mt-4 space-y-6">
                    <div>
                        <p class="text-[14px] font-bold text-gray-600 mb-1">Dokumen: <span
                                class="font-medium text-[14px]">Persetujuan KRS Semester Ganjil</span></p>
                        <p class="text-[14px] font-bold text-gray-600">Mahasiswa: <span
                                class="font-medium text-[14px]">Budi Santoso - 24/555555/SV/22222</span></p>
                    </div>

                    <div class="border border-[white] rounded-lg p-4">
                        <h4 class="font-semibold text-[#4D4D4D] text-[14px] mb-3">Alasan Revisi</h4>
                        <div class="flex justify-center">
                            <textarea id="alasan-revisi-input"
                                class="w-full border border-[#C1C1C1] rounded-lg py-3 px-4 text-sm focus:outline-none focus:ring-2 focus:ring-[#5CBDB9] focus:border-transparent resize-none"
                                placeholder="Ketikkan alasan dokumen perlu direvisi" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="flex space-x-3 pt-4">
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

        {{-- SETUJUI JANJI TEMU --}}
        <div id="approveModaljanjiTemu" class="fixed inset-0 overflow-y-auto h-full w-full hidden z-50">
            <div class="relative top-20 mx-auto p-5 border border-white w-full max-w-2xl shadow-lg rounded-md bg-white">
                <div class="flex justify-between items-center pb-4">
                    <h3 class="text-[20px] font-bold text-[#4D4D4D]">Setujui Janji Temu</h3>
                </div>

                <div class="mt-4 space-y-6">
                    <div>
                        <p class="text-[14px] font-bold text-gray-600 mb-1">Mahasiswa: <span
                                class="font-medium text-[14px]">Budi Santoso - 24/555555/SV/22222</span></p>
                        <p class="text-[14px] font-bold text-gray-600">Topik: <span
                                class="font-medium text-[14px]">Bimbingan Tugas Akhir</span></p>
                        <p class="text-[14px] font-bold text-gray-600">Waktu: <span class="font-medium text-[14px]">Jumat,
                                26 September 2025, 10:00 - 11:00</span></p>
                    </div>

                    <div class="border border-[#C1C1C1] rounded-lg p-4">
                        <h4 class="font-semibold text-[#4D4D4D] text-[14px] mb-3">Pilih Ruangan Untuk Pertemuan</h4>

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
                            <label class="block text-sm font-medium text-[#4D4D4D] mb-2">Masukkan nama ruangan</label>
                            <input type="text" id="custom-ruangan-input"
                                class="w-full border border-[#C1C1C1] rounded-md py-2 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#5CBDB9] focus:border-transparent"
                                placeholder="Contoh: Lab Komputer, Ruang Baca, dll.">
                        </div>

                        <!-- Display ruangan yang dipilih -->
                        <div id="ruanganTerpilih" class="hidden mt-4 p-3 bg-green-50 border border-green-200 rounded-lg">
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
                            <img src="{{ asset('images/centangputih.png') }}" alt="ikonKirim" class="w-[16px] h-[16px]">
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

    </main>
@endsection
@vite(['resources/js/tandaTangan.js'])
@vite(['resources/js/janjiTemu.js'])

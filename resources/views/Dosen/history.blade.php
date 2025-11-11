@extends('layouts.templateDosen')
@section('title', 'Janji Temu - SITandu')
@section('content')
    <!-- Main Content -->
    <main class="justify-start max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Left kiri -->
            <div class="flex-1 space-y-6">

                <!-- Permintaan Janji Temu -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-[#4D4D4D]">History Permintaan</h2>
                </div>

                <!-- Search and Filter Section -->
                <div class="flex flex-col md:flex-row gap-4 items-center mb-6">
                    <!-- Search Bar -->
                    <div class="flex-1 w-full md:max-w-[679px]">
                        <div class="flex items-center border border-[#C1C1C1] rounded-md px-4 py-3 bg-white h-[47px]">
                            <img src="{{ asset('images/search.png') }}" alt="ikonSearch" class="w-[16px] h-[16px]">
                            <input type="text" placeholder="Cari nama mahasiswa, NIM, atau judul..."
                                class="w-full text-[#717182] text-[14px] bg-transparent border-none outline-none ml-2">
                        </div>
                    </div>

                    <!-- Filter Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
                        <div class="relative flex-1 sm:flex-none">
                            <button id="sort-menu-button-1"
                                class="text-[#4D4D4D] gap-2 text-sm font-medium bg-[white] border border-[#C1C1C1] hover:bg-[#FFDA7A] rounded-md px-4 py-3 flex items-center justify-between w-full sm:w-48">
                                <span>Semua Jenis</span>
                                <img src="{{ asset('images/panah.png') }}" alt="dropdown Icon" class="w-[18px] h-[16px]">
                            </button>

                            <!-- Dropdown Menu 1 -->
                            <div id="sort-menu-1"
                                class="hidden absolute right-0 top-full mt-1 w-full sm:w-48 bg-white rounded-md shadow-lg py-2 z-50 border border-gray-200">
                                <div class="space-y-1">
                                    <div class="flex flex-col">
                                        <button
                                            class="sort-option w-full text-left px-4 py-2 text-sm text-[#4D4D4D] hover:bg-[#FFDA7A] rounded-md transition duration-200 font-medium mb-2"
                                            data-sort="terbaru">
                                            Semua Jenis
                                        </button>
                                        <button
                                            class="sort-option w-full text-left px-4 py-2 text-sm text-[#4D4D4D] hover:bg-[#FFDA7A] rounded-md transition duration-200 font-medium mb-2"
                                            data-sort="terlama">
                                            Tanda Tangan
                                        </button>
                                        <button
                                            class="sort-option w-full text-left px-4 py-2 text-sm text-[#4D4D4D] hover:bg-[#FFDA7A] rounded-md transition duration-200 font-medium"
                                            data-sort="prioritas">
                                            Janji Temu
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative flex-1 sm:flex-none">
                            <button id="sort-menu-button-2"
                                class="text-[#4D4D4D] gap-2 text-sm font-medium bg-[white] border border-[#C1C1C1] hover:bg-[#FFDA7A] rounded-md px-4 py-3 flex items-center justify-between w-full sm:w-48">
                                <span>Semua Status</span>
                                <img src="{{ asset('images/panah.png') }}" alt="dropdown Icon" class="w-[18px] h-[16px]">
                            </button>

                            <!-- Dropdown Menu 2 -->
                            <div id="sort-menu-2"
                                class="hidden absolute right-0 top-full mt-1 w-full sm:w-48 bg-white rounded-md shadow-lg py-2 z-50 border border-gray-200">
                                <div class="space-y-1">
                                    <div class="flex flex-col">
                                        <button
                                            class="sort-option w-full text-left px-4 py-2 text-sm text-[#4D4D4D] hover:bg-[#FFDA7A] rounded-md transition duration-200 font-medium mb-2"
                                            data-sort="semua">
                                            Semua Status
                                        </button>
                                        <button
                                            class="sort-option w-full text-left px-4 py-2 text-sm text-[#4D4D4D] hover:bg-[#FFDA7A] rounded-md transition duration-200 font-medium mb-2"
                                            data-sort="menunggu">
                                            Menunggu
                                        </button>
                                        <button
                                            class="sort-option w-full text-left px-4 py-2 text-sm text-[#4D4D4D] hover:bg-[#FFDA7A] rounded-md transition duration-200 font-medium mb-2"
                                            data-sort="disetujui">
                                            Disetujui
                                        </button>
                                        <button
                                            class="sort-option w-full text-left px-4 py-2 text-sm text-[#4D4D4D] hover:bg-[#FFDA7A] rounded-md transition duration-200 font-medium mb-2"
                                            data-sort="revisi">
                                            Revisi
                                        </button>
                                        <button
                                            class="sort-option w-full text-left px-4 py-2 text-sm text-[#4D4D4D] hover:bg-[#FFDA7A] rounded-md transition duration-200 font-medium"
                                            data-sort="dijadwal-ulang">
                                            Dijadwal Ulang
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Period Filter -->
                <div class="flex flex-wrap justify-start items-center gap-2 mb-4">
                    <div class="flex items-center">
                        <img src="{{ asset('images/sort.png') }}" alt="sortHistory" class="w-[16px] h-[16px]">
                        <h3 class="ml-2 text-[14px] text-[#4A5565]">Periode:</h3>
                    </div>
                    <button
                        class="period-filter relative z-10 cursor-pointer hover:translate-y-[-2px] hover:shadow-md active:translate-y-0 flex items-center justify-center gap-2 w-full sm:w-auto lg:w-[100px] py-2 text-[#0A0A0A] text-[14px] font-medium border border-[#0000001A] rounded-lg bg-[white] hover:bg-[#5CBDB9] hover:text-white duration-200 shadow-sm"
                        data-period="semua">
                        Semua
                    </button>
                    <button
                        class="period-filter relative z-10 cursor-pointer hover:translate-y-[-2px] hover:shadow-md active:translate-y-0 flex items-center justify-center gap-2 w-full sm:w-auto lg:w-[100px] py-2 text-[#0A0A0A] text-[14px] font-medium border border-[#0000001A] rounded-lg bg-[white] hover:bg-[#5CBDB9] hover:text-white duration-200 shadow-sm"
                        data-period="hari-ini">
                        Hari Ini
                    </button>
                    <button
                        class="period-filter relative z-10 cursor-pointer hover:translate-y-[-2px] hover:shadow-md active:translate-y-0 flex items-center justify-center gap-2 w-full sm:w-auto lg:w-[100px] py-2 text-[#0A0A0A] text-[14px] font-medium border border-[#0000001A] rounded-lg bg-[white] hover:bg-[#5CBDB9] hover:text-white duration-200 shadow-sm"
                        data-period="minggu-ini">
                        Minggu Ini
                    </button>
                    <button
                        class="period-filter relative z-10 cursor-pointer hover:translate-y-[-2px] hover:shadow-md active:translate-y-0 flex items-center justify-center gap-2 w-full sm:w-auto lg:w-[100px] py-2 text-[#0A0A0A] text-[14px] font-medium border border-[#0000001A] rounded-lg bg-[white] hover:bg-[#5CBDB9] hover:text-white duration-200 shadow-sm"
                        data-period="bulan-ini">
                        Bulan Ini
                    </button>
                </div>

                <!-- Cards Section -->
                {{-- card 1 --}}
                <div class="card-item bg-white border-l-4 border-[#10B981] rounded-2xl p-4 flex flex-col lg:flex-row items-start justify-between mb-4 cursor-pointer hover:translate-y-[-2px] hover:shadow-md active:translate-y-0 transition duration-200"
                    data-jenis="tanda-tangan" data-status="disetujui" style="pointer-events: none;">
                    <!-- seluruh card tidak bisa diklik -->

                    {{-- kiri --}}
                    <div class="flex-1 space-y-2 w-full">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 mb-2">
                            <div class="flex items-center gap-2">
                                <div
                                    class="border border-white bg-[#EFF6FF] w-8 h-8 flex items-center justify-center rounded-md">
                                    <img src="{{ asset('images/dokumen.png') }}" alt="ikonJanjiTemu" class="w-4 h-4">
                                </div>
                                <span class="font-bold text-[16px] text-[#4D4D4D]">Persetujuan KRS Semester Ganjil</span>
                            </div>
                            <div class="flex flex-wrap gap-2 sm:ml-auto mt-2 sm:mt-0">
                                <span
                                    class="bg-white text-[#0A0A0A] px-3 py-1 border border-[#0000001A] rounded-full text-[12px] font-medium">
                                    Tanda Tangan
                                </span>
                                <span class="bg-[#DCFCE7] text-[#016630] px-3 py-1 rounded-full text-[12px] font-medium">
                                    Disetujui
                                </span>
                            </div>
                        </div>

                        <div class="space-y-2 sm:ml-10">
                            <div class="flex flex-wrap items-center gap-2">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-4 h-4">
                                <span class="text-[#4A5565] text-[14px]">Andi Wijaya</span>
                                <img src="{{ asset('images/•.png') }}" alt="ikonDot" class="hidden sm:block">
                                <span class="text-[#4A5565] text-[14px]">20210001</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-[#4A5565] text-[14px]">Permohonan persetujuan KRS untuk semester ganjil
                                    2024/2025. Total 21 SKS dengan 7 mata kuliah.</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-2">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-[10px] h-[10px]">
                                <span class="text-[#4A5565] text-[12px]">Rabu, 30 Oktober 2024</span>
                                <img src="{{ asset('images/•.png') }}" alt="ikonDot" class="hidden sm:block">
                                <span class="text-[#4A5565] text-[12px]">14:00 WIB</span>
                                <img src="{{ asset('images/•.png') }}" alt="ikonDot" class="hidden sm:block">
                                <img src="{{ asset('images/dokumen.png') }}" alt="ikonPdf" class="w-[8px] h-[10px]">
                                <span class="text-[#4A5565] text-[12px]">PDF</span>
                            </div>
                        </div>
                    </div>

                    {{-- kanan --}}
                    <div
                        class="flex flex-row lg:flex-col items-center lg:items-end justify-center lg:ml-6 lg:min-w-[100px] space-y-0 lg:space-y-2 space-x-2 lg:space-x-0 mt-4 lg:mt-0 w-full lg:w-auto">
                        <button onclick="window.location.href='{{ route('dosen.progres') }}'"
                            class="flex items-center justify-center gap-2 w-full lg:w-[100px] py-2 text-[#4D4D4D] text-[13px] font-medium border border-[#0000001A] rounded-lg bg-white hover:bg-gray-100 transition duration-200 shadow-sm"
                            style="pointer-events: auto;">
                            <img src="{{ asset('images/mata.png') }}" alt="Detail" class="w-4 h-4">
                            Detail
                        </button>
                        <button
                            class="flex items-center justify-center gap-2 w-full lg:w-[100px] py-2 text-[#4D4D4D] text-[13px] font-medium border border-[#0000001A] rounded-lg bg-white hover:bg-gray-100 transition duration-200 shadow-sm"
                            style="pointer-events: auto;">
                            <img src="{{ asset('images/download.png') }}" alt="Download" class="w-4 h-4">
                            Unduh
                        </button>
                    </div>
                </div>


                {{-- card 2 --}}
                <div class="card-item bg-white border-l-4 border-[#F97316] rounded-2xl p-4 flex flex-col lg:flex-row items-start justify-between mb-4 cursor-pointer hover:translate-y-[-2px] hover:shadow-md active:translate-y-0 transition duration-200"
                    data-jenis="tanda-tangan" data-status="revisi" style="pointer-events: none;">

                    {{-- kiri --}}
                    <div class="flex-1 space-y-2 w-full">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 mb-2">
                            <div class="flex items-center gap-2">
                                <div
                                    class="border border-white bg-[#EFF6FF] w-8 h-8 flex items-center justify-center rounded-md">
                                    <img src="{{ asset('images/dokumen.png') }}" alt="ikonJanjiTemu" class="w-4 h-4">
                                </div>
                                <span class="font-bold text-[16px] text-[#4D4D4D]">Proposal Tugas Akhir</span>
                            </div>
                            <div class="flex flex-wrap gap-2 sm:ml-auto mt-2 sm:mt-0">
                                <span
                                    class="bg-white text-[#0A0A0A] px-3 py-1 border border-[#0000001A] rounded-full text-[12px] font-medium">
                                    Tanda Tangan
                                </span>
                                <span class="bg-[#FFEDD4] text-[#9F2D00] px-3 py-1 rounded-full text-[12px] font-medium">
                                    Revisi
                                </span>
                                <span class="bg-[#FFEDD4] text-[#9F2D00] px-3 py-1 rounded-full text-[12px] font-medium">
                                    Revisi Ke-2
                                </span>
                            </div>
                        </div>

                        <div class="space-y-2 sm:ml-10">
                            <div class="flex flex-wrap items-center gap-2">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-4 h-4">
                                <span class="text-[#4A5565] text-[14px]">Andi Wijaya</span>
                                <img src="{{ asset('images/•.png') }}" alt="ikonDot" class="hidden sm:block">
                                <span class="text-[#4A5565] text-[14px]">20210001</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-[#4A5565] text-[14px]">
                                    Persetujuan proposal tugas akhir dengan judul 'Implementasi Machine Learning untuk Prediksi Nilai Mahasiswa'
                                </span>
                            </div>
                            <div class="flex flex-wrap items-center gap-2">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-[10px] h-[10px]">
                                <span class="text-[#4A5565] text-[12px]">Rabu, 30 Oktober 2024</span>
                                <img src="{{ asset('images/•.png') }}" alt="ikonDot" class="hidden sm:block">
                                <span class="text-[#4A5565] text-[12px]">14:00 WIB</span>
                                <img src="{{ asset('images/•.png') }}" alt="ikonDot" class="hidden sm:block">
                                <img src="{{ asset('images/dokumen.png') }}" alt="ikonPdf" class="w-[8px] h-[10px]">
                                <span class="text-[#4A5565] text-[12px]">PDF</span>
                            </div>
                        </div>
                    </div>
                    {{-- kanan --}}
                    <div
                        class="flex flex-row lg:flex-col items-center lg:items-end justify-center lg:ml-6 lg:min-w-[100px] space-y-0 lg:space-y-2 space-x-2 lg:space-x-0 mt-4 lg:mt-0 w-full lg:w-auto">
                        <button onclick="window.location.href='{{ route('dosen.revisi') }}'"
                            class="flex items-center justify-center gap-2 w-full lg:w-[100px] py-2 text-[#4D4D4D] text-[13px] font-medium border border-[#0000001A] rounded-lg bg-white hover:bg-gray-100 transition duration-200 shadow-sm"
                            style="pointer-events: auto;">
                            <img src="{{ asset('images/mata.png') }}" alt="Detail" class="w-4 h-4">
                            Detail
                        </button>
                    </div>
                </div>

                {{-- card 3 --}}
                <div class="card-item bg-white border-l-4 border-[#3B82F6] rounded-2xl p-4 flex flex-col lg:flex-row items-start justify-between mb-4 cursor-pointer hover:translate-y-[-2px] hover:shadow-md active:translate-y-0 transition duration-200"
                    data-jenis="tanda-tangan" data-status="dijadwal-ulang" style="pointer-events: none;">
                    {{-- kiri --}}
                    <div class="flex-1 space-y-2 w-full">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 mb-2">
                            <div class="flex items-center gap-2">
                                <div
                                    class="border border-white bg-[#EFF6FF] w-8 h-8 flex items-center justify-center rounded-md">
                                    <img src="{{ asset('images/dokumen.png') }}" alt="ikonJanjiTemu" class="w-4 h-4">
                                </div>
                                <span class="font-bold text-[16px] text-[#4D4D4D]">Bimbingan Skripsi</span>
                            </div>
                            <div class="flex flex-wrap gap-2 sm:ml-auto mt-2 sm:mt-0">
                                <span
                                    class="bg-white text-[#0A0A0A] px-3 py-1 border border-[#0000001A] rounded-full text-[12px] font-medium">
                                    Tanda Tangan
                                </span>
                                <span class="bg-[#DBEAFE] text-[#193CB8] px-3 py-1 rounded-full text-[12px] font-medium">
                                    Dijadwal Ulang
                                </span>
                            </div>
                        </div>

                        <div class="space-y-2 sm:ml-10">
                            <div class="flex flex-wrap items-center gap-2">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-4 h-4">
                                <span class="text-[#4A5565] text-[14px]">Andi Wijaya</span>
                                <img src="{{ asset('images/•.png') }}" alt="ikonDot" class="hidden sm:block">
                                <span class="text-[#4A5565] text-[14px]">20210001</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-[#4A5565] text-[14px]">
                                    Review dan revisi BAB 4 hasil dan pembahasan.
                                </span>
                            </div>
                            <div class="flex flex-wrap items-center gap-2">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-[10px] h-[10px]">
                                <span class="text-[#4A5565] text-[12px]">Rabu, 30 Oktober 2024</span>
                                <img src="{{ asset('images/•.png') }}" alt="ikonDot" class="hidden sm:block">
                                <span class="text-[#4A5565] text-[12px]">14:00 WIB</span>
                                <img src="{{ asset('images/•.png') }}" alt="ikonDot" class="hidden sm:block">
                                <img src="{{ asset('images/dokumen.png') }}" alt="ikonPdf" class="w-[8px] h-[10px]">
                                <span class="text-[#4A5565] text-[12px]">PDF</span>
                            </div>
                        </div>
                    </div>
                    {{-- kanan --}}
                    <div
                        class="flex flex-row lg:flex-col items-center lg:items-end justify-center lg:ml-6 lg:min-w-[100px] space-y-0 lg:space-y-2 space-x-2 lg:space-x-0 mt-4 lg:mt-0 w-full lg:w-auto">
                        <button onclick="window.location.href='{{ route('dosen.jadwalUlang') }}'"
                            class="flex items-center justify-center gap-2 w-full lg:w-[100px] py-2 text-[#4D4D4D] text-[13px] font-medium border border-[#0000001A] rounded-lg bg-white hover:bg-gray-100 transition duration-200 shadow-sm"
                            style="pointer-events: auto;">
                            <img src="{{ asset('images/mata.png') }}" alt="Detail" class="w-4 h-4">
                            Detail
                        </button>
                    </div>
                </div>
                {{-- card 4 --}}
                <div class="card-item bg-white border-l-4 border-[#EF4444] rounded-2xl p-4 flex flex-col lg:flex-row items-start justify-between mb-4 cursor-pointer hover:translate-y-[-2px] hover:shadow-md active:translate-y-0 transition duration-200"
                    data-jenis="tanda-tangan" data-status="dijadwal-ulang" style="pointer-events: none;">
                    {{-- kiri --}}
                    <div class="flex-1 space-y-2 w-full">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 mb-2">
                            <div class="flex items-center gap-2">
                                <div
                                    class="border border-white bg-[#EFF6FF] w-8 h-8 flex items-center justify-center rounded-md">
                                    <img src="{{ asset('images/dokumen.png') }}" alt="ikonJanjiTemu" class="w-4 h-4">
                                </div>
                                <span class="font-bold text-[16px] text-[#4D4D4D]">Form Cuti Akademik</span>
                            </div>
                            <div class="flex flex-wrap gap-2 sm:ml-auto mt-2 sm:mt-0">
                                <span
                                    class="bg-white text-[#0A0A0A] px-3 py-1 border border-[#0000001A] rounded-full text-[12px] font-medium">
                                    Tanda Tangan
                                </span>
                                <span class="bg-[#FFE2E2] text-[#9F0712] px-3 py-1 rounded-full text-[12px] font-medium">
                                    Ditolak
                                </span>
                            </div>
                        </div>

                        <div class="space-y-2 sm:ml-10">
                            <div class="flex flex-wrap items-center gap-2">
                                <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-4 h-4">
                                <span class="text-[#4A5565] text-[14px]">Andi Wijaya</span>
                                <img src="{{ asset('images/•.png') }}" alt="ikonDot" class="hidden sm:block">
                                <span class="text-[#4A5565] text-[14px]">20210001</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-[#4A5565] text-[14px]">
                                    Permohonan cuti akademik semester genap 2024/2025.
                                </span>
                            </div>
                            <div class="flex flex-wrap items-center gap-2">
                                <img src="{{ asset('images/clock.png') }}" alt="ikonJam" class="w-[10px] h-[10px]">
                                <span class="text-[#4A5565] text-[12px]">Rabu, 30 Oktober 2024</span>
                                <img src="{{ asset('images/•.png') }}" alt="ikonDot" class="hidden sm:block">
                                <span class="text-[#4A5565] text-[12px]">14:00 WIB</span>
                                <img src="{{ asset('images/•.png') }}" alt="ikonDot" class="hidden sm:block">
                                <img src="{{ asset('images/dokumen.png') }}" alt="ikonPdf" class="w-[8px] h-[10px]">
                                <span class="text-[#4A5565] text-[12px]">PDF</span>
                            </div>
                        </div>
                    </div>
                    {{-- kanan --}}
                    <div
                        class="flex flex-row lg:flex-col items-center lg:items-end justify-center lg:ml-6 lg:min-w-[100px] space-y-0 lg:space-y-2 space-x-2 lg:space-x-0 mt-4 lg:mt-0 w-full lg:w-auto">
                        <button onclick="window.location.href='{{ route('dosen.ditolak') }}'"
                            class="flex items-center justify-center gap-2 w-full lg:w-[100px] py-2 text-[#4D4D4D] text-[13px] font-medium border border-[#0000001A] rounded-lg bg-white hover:bg-gray-100 transition duration-200 shadow-sm"
                            style="pointer-events: auto;">
                            <img src="{{ asset('images/mata.png') }}" alt="Detail" class="w-4 h-4">
                            Detail
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@vite(['resources/js/Dosen/history.js'])

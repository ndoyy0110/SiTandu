@extends('layouts.templateMahasiswa')
@section('title', 'Home - SITandu')
@section('content')
    <!-- Main Content -->
    <main class="justify-start max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Left kiri -->
            <div class="flex-auto space-y-6">
                <!-- Permintaan Tanda Tangan -->
                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-4 gap-3">
                    <h2 class="text-2xl font-bold text-[#4D4D4D]">Permintaan Tanda Tangan</h2>
                    <button onclick="window.location.href='{{ route('mahasiswa.tandaTangan') }}'"
                        class="bg-white text-[#4D4D4D] px-4 sm:px-6 py-2 rounded-lg text-[15px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 w-full sm:w-auto justify-center">
                        <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class="w-5 h-5">
                        Lihat Semua
                    </button>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Card 1 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white h-64 flex flex-col">
                        <div class="flex items-start mb-4">
                            <div class="flex-1">
                                <h2 class="text-[18px] font-semibold text-[#4D4D4D] leading-tight line-clamp-2">
                                    Wijayanti Dwi Astuti, S.Si., M.Sc., Ph.D.
                                </h2>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 mt-2">
                            <img src="{{ asset('images/user.png') }}" class="w-5 h-5">
                            <p class="text-[#4D4D4D] text-[14px]">Kepala Prodi TRIK</p>
                        </div>

                        <div class="mt-auto">
                            <button onclick="window.location.href='{{ route('mahasiswa.permintaanTTD') }}'"
                                class="bg-[#5CBDB9] text-white px-6 py-2 rounded-lg text-[12px] hover:bg-[#4da8a4] w-full flex items-center justify-center gap-2">
                                <img src="{{ asset('images/dokumenPutih.png') }}" class="w-5 h-5">
                                Tanda Tangan
                            </button>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white h-64 flex flex-col">
                        <div class="flex items-start mb-4">
                            <div class="flex-1">
                                <h2 class="text-[18px] font-semibold text-[#4D4D4D] leading-tight line-clamp-2">
                                    Wijayanti Dwi Astuti, S.Si., M.Sc., Ph.D.
                                </h2>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 mt-2">
                            <img src="{{ asset('images/user.png') }}" class="w-5 h-5">
                            <p class="text-[#4D4D4D] text-[14px]">Kepala Prodi TRIK</p>
                        </div>

                        <div class="mt-auto">
                            <button onclick="window.location.href='{{ route('mahasiswa.permintaanTTD') }}'"
                                class="bg-[#5CBDB9] text-white px-6 py-2 rounded-lg text-[12px] hover:bg-[#4da8a4] w-full flex items-center justify-center gap-2">
                                <img src="{{ asset('images/dokumenPutih.png') }}" class="w-5 h-5">
                                Tanda Tangan
                            </button>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white h-64 flex flex-col">
                        <div class="flex items-start mb-4">
                            <div class="flex-1">
                                <h2 class="text-[18px] font-semibold text-[#4D4D4D] leading-tight line-clamp-2">
                                    Wijayanti Dwi Astuti, S.Si., M.Sc., Ph.D.
                                </h2>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 mt-2">
                            <img src="{{ asset('images/user.png') }}" class="w-5 h-5">
                            <p class="text-[#4D4D4D] text-[14px]">Kepala Prodi TRIK</p>
                        </div>

                        <div class="mt-auto">
                            <button onclick="window.location.href='{{ route('mahasiswa.permintaanTTD') }}'"
                                class="bg-[#5CBDB9] text-white px-6 py-2 rounded-lg text-[12px] hover:bg-[#4da8a4] w-full flex items-center justify-center gap-2">
                                <img src="{{ asset('images/dokumenPutih.png') }}" class="w-5 h-5">
                                Tanda Tangan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Permintaan Janji Temu -->
                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-4 gap-3">
                    <h2 class="text-2xl font-bold text-[#4D4D4D]">Permintaan Janji Temu</h2>
                    <button onclick="window.location.href='{{ route('mahasiswa.janjiTemu') }}'"
                        class="bg-white text-[#4D4D4D] px-4 sm:px-6 py-2 rounded-lg text-[15px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 w-full sm:w-auto justify-center">
                        <img src="{{ asset('images/mata.png') }}" class="w-5 h-5">
                        Lihat Semua
                    </button>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- 3 Card janji temu (SAMA seperti di atas, responsif) -->
                    @for ($i = 0; $i < 3; $i++)
                        <div class="border border-gray-200 rounded-lg p-4 bg-white h-64 flex flex-col">
                            <div class="flex items-start mb-4">
                                <h2 class="text-[18px] font-semibold text-[#4D4D4D] leading-tight line-clamp-2">
                                    Wijayanti Dwi Astuti, S.Si., M.Sc., Ph.D.
                                </h2>
                            </div>

                            <div class="flex items-center gap-3 mt-2">
                                <img src="{{ asset('images/user.png') }}" class="w-5 h-5">
                                <p class="text-[#4D4D4D] text-[14px]">Kepala Prodi TRIK</p>
                            </div>

                            <div class="mt-auto">
                                <button onclick="window.location.href='{{ route('mahasiswa.permintaanJT') }}'"
                                    class="bg-[#5CBDB9] text-white px-6 py-2 rounded-lg text-[12px] hover:bg-[#4da8a4] w-full flex justify-center gap-2">
                                    <img src="{{ asset('images/calendar-days.png') }}" class="w-5 h-5">
                                    Janji Temu
                                </button>
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- Tracking -->
                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-4 gap-3">
                    <h2 class="text-2xl font-bold text-[#4D4D4D]">Tracking</h2>
                    <button onclick="window.location.href='{{ route('mahasiswa.tracking') }}'"
                        class="bg-white text-[#4D4D4D] px-4 sm:px-6 py-2 rounded-lg text-[15px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 w-full sm:w-auto justify-center">
                        <img src="{{ asset('images/mata.png') }}" class="w-5 h-5">
                        Lihat Semua
                    </button>
                </div>

                <div class="rounded-lg p-6 bg-white space-y-4">

                    {{-- Tracking cards tetap responsif otomatis karena flex-col --}}
                    @for ($i = 0; $i < 4; $i++)
                        <div class="bg-white border-l-4 border-[#FFD66B] pl-4 py-3">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="bg-[#5CBDB9] text-white px-3 py-1 rounded-lg text-[14px]">Janji Temu</span>
                                <span class="font-semibold text-[16px] text-[#4D4D4D]">Bimbingan Tugas Akhir</span>
                            </div>

                            <div class="flex flex-col sm:flex-row justify-between gap-4">
                                <div class="space-y-2 flex-1">
                                    <div class="flex items-center gap-2 text-[14px]">
                                        <img src="{{ asset('images/user.png') }}" class="w-4 h-4">
                                        <span>Andi Wijaya</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-[14px]">
                                        <img src="{{ asset('images/clock.png') }}" class="w-4 h-4">
                                        10:00 - 11:00 WIB
                                    </div>
                                    <div class="flex items-center gap-2 text-[14px]">
                                        <img src="{{ asset('images/pin.png') }}" class="w-4 h-4">
                                        Ruang Dosen 2
                                    </div>
                                </div>

                                <button onclick="window.location.href='{{ route('mahasiswa.tandaTangan') }}'"
                                    class="border border-gray-300 bg-white hover:bg-gray-200 text-[#4D4D4D] px-6 py-2 rounded-lg text-[15px] w-full sm:w-auto">
                                    Lacak
                                </button>
                            </div>
                        </div>
                    @endfor

                </div>
            </div>

            <!-- Kanan -->
            <div class="w-full lg:w-80 space-y-6">

                <!-- Aktivitas Terbaru -->
                <div class="bg-white rounded-lg shadow-custom p-6">
                    <h3 class="text-lg font-bold text-[#4D4D4D] mb-4">Aktivitas Terbaru</h3>

                    @for ($i = 0; $i < 3; $i++)
                        <div class="bg-[#F1F1F1] rounded-lg p-4 mb-4">
                            <div class="flex items-start gap-3">
                                <img src="{{ asset('images/dokumen-biru.png') }}" class="w-6 h-6 mt-1">
                                <div>
                                    <p class="text-[15px] font-bold text-[#4D4D4D]">Pengajuan Janji Temu</p>
                                    <p class="text-[14px] text-gray-600">Budi Sentosa</p>
                                    <p class="text-[12px] text-gray-500">1 Jam lalu</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- Bantuan -->
                <div class="bg-white rounded-lg shadow-custom p-6">
                    <h3 class="text-lg font-bold text-[#4D4D4D] mb-4">Butuh Bantuan?</h3>
                    <p class="text-gray-600 mb-4">Ada pertanyaan mengenai sistem? Hubungi admin atau lihat panduan penggunaan.</p>

                    <button class="border border-[#C1C1C1] w-full bg-white py-2 rounded-lg mb-2 hover:bg-[#FFD66B] transition">
                        Panduan Sistem
                    </button>
                    <button class="border border-[#C1C1C1] w-full bg-white py-2 rounded-lg hover:bg-[#FFD66B] transition">
                        Hubungi Admin
                    </button>
                </div>
            </div>
        </div>
    </main>
@endsection

@vite([''])
@vite([''])

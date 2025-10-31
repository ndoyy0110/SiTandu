@extends('layouts.templateMahasiswa')
@section('title', 'Home - SITandu')
@section('content')
    <!-- Main Content -->
    <main class="justify-start max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Left kiri -->
            <div class="flex-auto space-y-6 ">
                <!-- Permintaan Tanda Tangan -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-[#4D4D4D]">Permintaan Tanda Tangan</h2>
                    <button onclick="window.location.href='{{ route('mahasiswa.tandaTangan') }}'"
                        class="bg-white text-[#4D4D4D] px-6 py-2 rounded-lg text-[16px] hover:bg-gray-200 transition duration-200 flex items-center gap-2">
                        <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class="w-5 h-5">
                        Lihat Semua
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Card 1 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-6 py-6 h-64 flex flex-col">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h2 class="text-[18px] font-semibold text-[#4D4D4D] leading-tight line-clamp-2">
                                            Wijayanti Dwi Astuti, S.Si., M.Sc., Ph.D.
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 mt-2">
                            <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                            <div>
                                <p class="text-[#4D4D4D] text-[14px]">Kepala Prodi TRIK</p>
                            </div>
                        </div>

                        <div class="flex space-x-2 justify-center items-center mt-auto mb-1">
                            <button onclick="window.location.href='{{ route('mahasiswa.permintaanTTD') }}'"
                                class=" justify-center bg-[#5CBDB9] text-[#FFFFFF] border border-[white] px-6 py-2 rounded-lg text-[12px] hover:bg-[#4da8a4] transition duration-200 flex items-center gap-2 w-full">
                                <img src="{{ asset('images/dokumenPutih.png') }}" alt="ikonDokumen" class="w-5 h-5">
                                Tanda Tangan
                            </button>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-6 py-6 h-64 flex flex-col">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h2 class="text-[18px] font-semibold text-[#4D4D4D] leading-tight line-clamp-2">
                                            Wijayanti Dwi Astuti, S.Si., M.Sc., Ph.D.
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 mt-2">
                            <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                            <div>
                                <p class="text-[#4D4D4D] text-[14px]">Kepala Prodi TRIK</p>
                            </div>
                        </div>

                        <div class="flex space-x-2 justify-center items-center mt-auto mb-1">
                            <button onclick="window.location.href='{{ route('mahasiswa.permintaanTTD') }}'"
                                class="justify-center bg-[#5CBDB9] text-[#FFFFFF] border border-[white] px-6 py-2 rounded-lg text-[12px] hover:bg-[#4da8a4] transition duration-200 flex items-center gap-2 w-full">
                                <img src="{{ asset('images/dokumenPutih.png') }}" alt="ikonDokumenPutih" class="w-5 h-5">
                                Tanda Tangan
                            </button>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-6 py-6 h-64 flex flex-col">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h2 class="text-[18px] font-semibold text-[#4D4D4D] leading-tight line-clamp-2">
                                            Wijayanti Dwi Astuti, S.Si., M.Sc., Ph.D.
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 mt-2">
                            <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                            <div>
                                <p class="text-[#4D4D4D] text-[14px]">Kepala Prodi TRIK</p>
                            </div>
                        </div>

                        <div class="flex space-x-2 justify-center items-center mt-auto mb-1">
                            <button onclick="window.location.href='{{ route('mahasiswa.permintaanTTD') }}'"
                                class="justify-center bg-[#5CBDB9] text-[#FFFFFF] border border-[white] px-6 py-2 rounded-lg text-[12px] hover:bg-[#4da8a4] transition duration-200 flex items-center gap-2 w-full">
                                <img src="{{ asset('images/dokumenPutih.png') }}" alt="ikonDokumenPutih" class="w-5 h-5">
                                Tanda Tangan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Permintaan Janji Temu -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-[#4D4D4D]">Permintaan Janji Temu</h2>
                    <button onclick="window.location.href='{{ route('mahasiswa.janjiTemu') }}'"
                        class="bg-white text-[#4D4D4D] px-6 py-2 rounded-lg text-[16px] hover:bg-gray-200 transition duration-200 flex items-center gap-2">
                        <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class="w-5 h-5">
                        Lihat Semua
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Card 1 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-6 py-6 h-64 flex flex-col">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h2 class="text-[18px] font-semibold text-[#4D4D4D] leading-tight line-clamp-2">
                                            Wijayanti Dwi Astuti, S.Si., M.Sc., Ph.D.
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 mt-2">
                            <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                            <div>
                                <p class="text-[#4D4D4D] text-[14px]">Kepala Prodi TRIK</p>
                            </div>
                        </div>

                        <div class="flex space-x-2 justify-center items-center mt-auto mb-1">
                            <button onclick="window.location.href='{{ route('mahasiswa.permintaanJT') }}'"
                                class="justify-center bg-[#5CBDB9] text-[#FFFFFF] border border-[white] px-6 py-2 rounded-lg text-[12px] hover:bg-[#4da8a4] transition duration-200 flex items-center gap-2 w-full">
                                <img src="{{ asset('images/calendar-days.png') }}" alt="ikoncalendar-days" class="w-5 h-5">
                                Janji Temu
                            </button>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-6 py-6 h-64 flex flex-col">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h2 class="text-[18px] font-semibold text-[#4D4D4D] leading-tight line-clamp-2">
                                            Wijayanti Dwi Astuti, S.Si., M.Sc., Ph.D.
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 mt-2">
                            <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                            <div>
                                <p class="text-[#4D4D4D] text-[14px]">Kepala Prodi TRIK</p>
                            </div>
                        </div>

                        <div class="flex space-x-2 justify-center items-center mt-auto mb-1">
                            <button onclick="window.location.href='{{ route('mahasiswa.permintaanJT') }}'"
                                class="justify-center bg-[#5CBDB9] text-[#FFFFFF] border border-[white] px-6 py-2 rounded-lg text-[12px] hover:bg-[#4da8a4] transition duration-200 flex items-center gap-2 w-full">
                                <img src="{{ asset('images/calendar-days.png') }}" alt="ikoncalendar-days" class="w-5 h-5">
                                Janji Temu
                            </button>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="border border-gray-200 rounded-lg p-4 bg-white px-6 py-6 h-64 flex flex-col">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex items-start gap-4 w-full">
                                <div class="flex items-start gap-2 flex-1">
                                    <div class="max-w-[180px] flex-1">
                                        <h2 class="text-[18px] font-semibold text-[#4D4D4D] leading-tight line-clamp-2">
                                            Wijayanti Dwi Astuti, S.Si., M.Sc., Ph.D.
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 mt-2">
                            <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                            <div>
                                <p class="text-[#4D4D4D] text-[14px]">Kepala Prodi TRIK</p>
                            </div>
                        </div>

                        <div class="flex space-x-2 justify-center items-center mt-auto mb-1">
                            <button onclick="window.location.href='{{ route('mahasiswa.permintaanJT') }}'"
                                class="justify-center bg-[#5CBDB9] text-[#FFFFFF] border border-[white] px-6 py-2 rounded-lg text-[12px] hover:bg-[#4da8a4] transition duration-200 flex items-center gap-2 w-full">
                                <img src="{{ asset('images/calendar-days.png') }}" alt="ikoncalendar-days"
                                    class="w-5 h-5">
                                Janji Temu
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Tracking -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-[#4D4D4D]">Tracking</h2>
                    <button onclick="window.location.href='{{ route('mahasiswa.tracking') }}'"
                        class="bg-white text-[#4D4D4D] px-6 py-2 rounded-lg text-[16px] hover:bg-gray-200 transition duration-200 flex items-center gap-2">
                        <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class="w-5 h-5">
                        Lihat Semua
                    </button>
                </div>
                <div class="rounded-lg p-6 bg-white">
                    {{-- Card 1 --}}
                    <div class="bg-white border-l-4 border-[#FFD66B] pl-4 py-3 gap-4 mb-4">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-[#5CBDB9] rounded-lg text-[14px] text-white px-3 py-1">Janji Temu</span>
                            <span class="font-semibold text-[16px] text-[#4D4D4D]">Bimbingan Tugas Akhir</span>
                        </div>

                        <div class="flex justify-between items-start">
                            <!-- kiri -->
                            <div class="space-y-2 flex-1">
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

                            <!-- kanan -->
                            <div class="ml-4">
                                <button onclick="window.location.href='{{ route('mahasiswa.tandaTangan') }}'"
                                    class="bg-white text-[#4D4D4D] px-6 py-2 rounded-lg text-[16px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 border border-gray-300">
                                    <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class="w-5 h-5">
                                    Lihat Semua
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- Card 2 --}}
                    <div class="bg-white border-l-4 border-[#FFD66B] pl-4 py-3 gap-4 mb-4">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-[#FFD66B] rounded-lg text-[14px] text-[#4D4D4D] px-3 py-1">Janji Temu</span>
                            <span class="font-semibold text-[16px] text-[#4D4D4D]">Bimbingan Tugas Akhir</span>
                        </div>

                        <div class="flex justify-between items-start">
                            <!-- kiri -->
                            <div class="space-y-2 flex-1">
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

                            <!-- kanan -->
                            <div class="ml-4">
                                <button onclick="window.location.href='{{ route('mahasiswa.tandaTangan') }}'"
                                    class="bg-white text-[#4D4D4D] px-6 py-2 rounded-lg text-[16px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 border border-gray-300">
                                    <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class="w-5 h-5">
                                    Lihat Semua
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- Card 3 --}}
                    <div class="bg-white border-l-4 border-[#FFD66B] pl-4 py-3 gap-4 mb-4">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-[#FFD66B] rounded-lg text-[14px] text-[#4D4D4D] px-3 py-1">Janji Temu</span>
                            <span class="font-semibold text-[16px] text-[#4D4D4D]">Bimbingan Tugas Akhir</span>
                        </div>

                        <div class="flex justify-between items-start">
                            <!-- kiri -->
                            <div class="space-y-2 flex-1">
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

                            <!-- kanan -->
                            <div class="ml-4">
                                <button onclick="window.location.href='{{ route('mahasiswa.tandaTangan') }}'"
                                    class="bg-white text-[#4D4D4D] px-6 py-2 rounded-lg text-[16px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 border border-gray-300">
                                    <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class="w-5 h-5">
                                    Lihat Semua
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- Card 4 --}}
                    <div class="bg-white border-l-4 border-[#FFD66B] pl-4 py-3 gap-4 mb-4">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-[#5CBDB9] rounded-lg text-[14px] text-white px-3 py-1">Janji Temu</span>
                            <span class="font-semibold text-[16px] text-[#4D4D4D]">Bimbingan Tugas Akhir</span>
                        </div>

                        <div class="flex justify-between items-start">
                            <!-- kiri -->
                            <div class="space-y-2 flex-1">
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

                            <!-- kanan -->
                            <div class="ml-4">
                                <button onclick="window.location.href='{{ route('mahasiswa.tandaTangan') }}'"
                                    class="bg-white text-[#4D4D4D] px-6 py-2 rounded-lg text-[16px] hover:bg-gray-200 transition duration-200 flex items-center gap-2 border border-gray-300">
                                    <img src="{{ asset('images/mata.png') }}" alt="ikonMata" class="w-5 h-5">
                                    Lihat Semua
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Kanan -->
            <div class="w-full lg:w-80 space-y-6">
                <!-- riwayat -->
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
                                        <span class="text-[15px] font-bold text-[#4D4D4D]">Pengajuan Janji Temu</span>
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
                                        <span class="text-[15px] font-bold text-[#4D4D4D]">Bimbingan KRS</span>
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
                                        <span class="text-[15px] font-bold text-[#4D4D4D]">Permintaan Tanda Tangan</span>
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

                <!-- bantuan -->
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
    </main>
@endsection
@vite([''])
@vite([''])

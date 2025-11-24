@extends('layouts.templateMahasiswa')
@section('title', 'Permintaan Tanda Tangan - SITandu')
@section('content')
<main class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row justify-between sm:items-center mb-4 gap-3">
        <h2 class="text-xl sm:text-2xl font-bold text-[#4D4D4D]">Janji Temu</h2>

        <button onclick="window.location.href='{{ route('mahasiswa.janjiTemu') }}'"
            class="bg-white border border-[#C1C1C1] text-[#4D4D4D] px-4 py-2 sm:px-6 sm:py-2 rounded-lg hover:bg-gray-100 flex items-center gap-2 text-sm sm:text-base">
            <img src="{{ asset('images/panahKiri.png') }}" alt="ikonKembali" class="w-4 h-4 sm:w-5 sm:h-5">
            Kembali
        </button>
    </div>

    <!-- Dosen Tujuan -->
    <p class="text-[#4D4D4D] text-[14px] sm:text-[16px] mb-8">Kepada: Wijayanti Dwí Astuti, S.Si., M.Sc., Ph.D.</p>

    <!-- Card Utama -->
    <div class="bg-white rounded-lg shadow-md p-4 sm:p-6">
        <form action="#" method="POST">
            @csrf

            <!-- Judul Pertemuan -->
            <div class="mb-8">
                <h2 class="text-[16px] sm:text-lg font-medium text-[#4D4D4D] mb-3">Judul Pertemuan</h2>
                <input type="text" placeholder="Ketikkan Judul Pertemuan"
                    class="w-full px-4 py-3 text-[13px] sm:text-[14px] text-[#4D4D4D] border border-[#C1C1C1] rounded-lg
                    focus:ring-2 focus:ring-[#5CBDB9] focus:outline-none">
            </div>

            <!-- Pilih Waktu -->
            <div class="mb-8">
                <h2 class="text-[16px] sm:text-lg font-medium text-[#4D4D4D] mb-3">Pilih Waktu</h2>

                <div class="flex flex-col lg:flex-row gap-8 items-start">

                    <!-- Kalender -->
                    <div class="w-full lg:w-[350px] border border-[#C1C1C1] rounded-xl p-4 sm:p-5 shadow-sm bg-white">

                        <!-- Navigasi Bulan -->
                        <div class="flex justify-between items-center mb-4 text-[#4D4D4D]">
                            <button type="button" class="text-base sm:text-lg font-semibold px-2 sm:px-3 hover:text-[#5CBDB9] transition">&lt;</button>

                            <div class="flex items-center gap-2 sm:gap-3">
                                <select class="border border-[#C1C1C1] rounded-lg px-2 sm:px-3 py-1 text-xs sm:text-sm focus:ring-1 focus:ring-[#5CBDB9] focus:outline-none">
                                    <option>Jun</option>
                                    <option>Jul</option>
                                    <option>Agu</option>
                                </select>

                                <select class="border border-[#C1C1C1] rounded-lg px-2 sm:px-3 py-1 text-xs sm:text-sm focus:ring-1 focus:ring-[#5CBDB9] focus:outline-none">
                                    <option>2025</option>
                                    <option>2026</option>
                                </select>
                            </div>

                            <button type="button" class="text-base sm:text-lg font-semibold px-2 sm:px-3 hover:text-[#5CBDB9] transition">&gt;</button>
                        </div>

                        <!-- Hari -->
                        <div class="grid grid-cols-7 text-center text-[10px] sm:text-xs font-medium text-[#6B7280] uppercase mb-2">
                            <div>Su</div><div>Mo</div><div>Tu</div><div>We</div><div>Th</div><div>Fr</div><div>Sa</div>
                        </div>

                        <!-- Tanggal -->
                        <div class="grid grid-cols-7 gap-y-2 text-center text-xs sm:text-sm text-[#4D4D4D] select-none">
                            @for ($i = 1; $i <= 30; $i++)
                                @if ($i == 25)
                                    <div class="bg-[#4D4D4D] text-white font-semibold rounded-full
                                        w-8 h-8 sm:w-9 sm:h-9 flex items-center justify-center mx-auto">
                                        {{ $i }}
                                    </div>
                                @else
                                    <div class="hover:bg-[#E7F8F8] rounded-full cursor-pointer transition
                                        w-8 h-8 sm:w-9 sm:h-9 flex items-center justify-center mx-auto">
                                        {{ $i }}
                                    </div>
                                @endif
                            @endfor
                        </div>
                    </div>

                    <!-- Daftar Jadwal -->
                    <div class="flex-1 w-full">
                        <h3 class="text-sm sm:text-base font-medium text-[#4D4D4D] mb-4">Jum’at, 25 Juni 2025</h3>

                        <div id="daftar-jadwal" class="space-y-3">
                            @php
                                $jadwal = [
                                    ['07:15 - 08:55', true],
                                    ['08:55 - 10:55', true],
                                    ['10:55 - 11:55', false],
                                    ['12:15 - 14:55', true],
                                    ['15:15 - 16:55', false],
                                ];
                            @endphp

                            @foreach ($jadwal as [$jam, $tersedia])
                                <div class="jadwal-item flex flex-col sm:flex-row justify-between items-start sm:items-center
                                    border border-[#C1C1C1] rounded-lg px-4 py-3 text-sm text-[#4D4D4D]">

                                    <div>{{ $jam }}</div>

                                    @if ($tersedia)
                                        <div class="flex items-center gap-4 mt-2 sm:mt-0">
                                            <span class="text-xs sm:text-xs text-[#4D4D4D]">Dapat Diajukan</span>

                                            <button type="button"
                                                class="pilih-waktu px-3 sm:px-4 py-2 border border-[#C1C1C1] bg-white text-gray-600 text-xs rounded-lg hover:bg-[#4D4D4D] hover:text-white transition"
                                                data-jam="{{ $jam }}">
                                                Pilih Waktu
                                            </button>
                                        </div>
                                    @else
                                        <span class="text-xs text-[#4D4D4D] mt-1 sm:mt-0">Tidak Dapat Diajukan</span>
                                    @endif
                                </div>
                            @endforeach
                        </div>

                        <!-- Dropdown Interval -->
                        <div id="dropdown-container"
                            class="hidden mt-6 border border-[#C1C1C1] rounded-lg p-4 bg-white shadow-md">
                            <label class="block text-xs sm:text-sm text-[#4D4D4D] mb-1">Pilih Interval Waktu</label>

                            <select
                                class="w-full px-3 py-2 border border-[#C1C1C1] rounded-lg text-xs sm:text-sm text-[#4D4D4D] focus:ring-2 focus:ring-[#5CBDB9] focus:outline-none">
                                <option value="">Pilih Interval Waktu</option>
                                <option value="15">15 Menit</option>
                                <option value="30">30 Menit</option>
                                <option value="45">45 Menit</option>
                                <option value="60">1 Jam</option>
                                <option value="all">Keseluruhan Waktu</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kepentingan Pertemuan -->
            <div class="mb-6">
                <h2 class="text-[16px] sm:text-lg font-medium text-[#4D4D4D] mb-3">Kepentingan Pertemuan</h2>
                <textarea placeholder="Jelaskan Kepentingan Pertemuan..."
                    class="w-full px-4 py-4 text-xs sm:text-sm text-[#4D4D4D] border border-[#C1C1C1] rounded-lg
                    focus:ring-2 focus:ring-[#5CBDB9] focus:outline-none" rows="4"></textarea>
            </div>

            <!-- Catatan Lokasi -->
            <div class="border border-[#C1C1C1] rounded-lg bg-[#FFF3D3] p-3 flex items-start gap-3 mb-6">
                <img src="{{ asset('images/pin.png') }}" alt="ikonInfo" class="w-4 h-4 mt-1 sm:mt-0">

                <div>
                    <h3 class="text-xs font-semibold text-[#4D4D4D] mb-1">Catatan Lokasi</h3>
                    <p class="text-xs text-[#4D4D4D]">Lokasi pertemuan akan ditentukan oleh dosen setelah permintaan anda disetujui.</p>
                </div>
            </div>

            <!-- Tombol Submit -->
            <div class="flex justify-end">
                <button type="submit"
                    class="px-6 sm:px-8 py-3 bg-[#5CBDB9] text-white text-xs sm:text-sm rounded-lg hover:bg-[#4da8a4] flex items-center gap-2 transition">
                    <img src="{{ asset('images/send.png') }}" alt="ikonSend" class="w-4 h-4">
                    Kirim Dokumen
                </button>
            </div>
        </form>
    </div>
</main>
@endsection

@vite(['resources/js/Mahasiswa/permintaanJT.js'])

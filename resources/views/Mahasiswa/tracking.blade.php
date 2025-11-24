@extends('layouts.templateMahasiswa')
@section('title', 'Home - SITandu')
@section('content')
    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-8">

            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2">
                <h2 class="text-2xl font-bold text-[#4D4D4D]">Tracking</h2>
            </div>

            <!-- Janji Temu Section -->
            <section>
                <h3 class="text-xl font-medium text-[#4D4D4D] mb-6">Permintaan Janji Temu</h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
                    <!-- Card Status: Selesai -->
                    <div class="border border-gray-200 rounded-lg p-6 bg-white flex flex-col">
                        <div class="flex flex-wrap items-center justify-between mb-4 gap-2">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('images/calendar-biru.png') }}" alt="calendarlogo" class="w-6 h-6">
                                <h2 class="text-lg font-semibold text-[#4D4D4D] break-words">Bimbingan Tugas Akhir</h2>
                            </div>
                            <span class="bg-[#9DD7D5] text-[#4D4D4D] px-3 py-1 rounded-full text-xs font-medium whitespace-nowrap">
                                Selesai
                            </span>
                        </div>

                        <div class="mb-4">
                            <p class="text-[#4D4D4D] font-medium break-words">Budi Santoso</p>
                            <p class="text-[#4D4D4D] text-sm break-words">22/555555/SV/25555</p>
                            <p class="text-[#4D4D4D] text-sm mt-1 break-words">Kamis, 2 Oktober 2025</p>
                        </div>

                        <div class="flex items-start mb-4">
                            <img src="{{ asset('images/Ellipse.png') }}" alt="dot" class="w-[10px] h-[10px] mt-1 flex-shrink-0">
                            <span class="text-[#737373] text-xs font-light ml-2 leading-relaxed">Status Terkini:</span>
                        </div>

                        <div class="border-l-2 border-[#C1C1C1] pl-4 mb-4">
                            <p class="text-[#2DAA9E] text-sm font-regular">Janji Temu Disetujui</p>
                            <p class="text-[#4D4D4D] text-xs font-light mt-1 break-words">Lokasi: Ruang Dosen 201</p>

                            <div class="space-y-1 mt-2">
                                <div class="flex items-center">
                                    <img src="{{ asset('images/check-abu.png') }}" alt="centangAbu" class="w-3 h-3">
                                    <span class="text-[#737373] text-xs font-light ml-1 break-words">Janji temu telah disetujui</span>
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('images/check-abu.png') }}" alt="centangAbu" class="w-3 h-3">
                                    <span class="text-[#737373] text-xs font-light ml-1 break-words">Pertemuan selesai</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-auto">
                            <button onclick="window.location.href='{{ route('mahasiswa.selesaiTrackingJT') }}'"
                                class="w-full bg-[#4D4D4D] text-white py-2 rounded-lg text-sm font-medium hover:bg-[#3D3D3D] transition duration-200">
                                Lihat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Card Status: Menunggu -->
                    <div class="border border-gray-200 rounded-lg p-6 bg-white flex flex-col">
                        <div class="flex flex-wrap items-center justify-between mb-4 gap-2">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('images/calendar-biru.png') }}" alt="calendarlogo" class="w-6 h-6">
                                <h2 class="text-lg font-semibold text-[#4D4D4D] break-words">Konsultasi Mata Kuliah</h2>
                            </div>
                            <span class="bg-[#DBEAFE] text-[#193CB8] px-3 py-1 rounded-full text-xs font-medium whitespace-nowrap">
                                Menunggu
                            </span>
                        </div>

                        <div class="mb-4">
                            <p class="text-[#4D4D4D] font-medium">Budi Santoso</p>
                            <p class="text-[#4D4D4D] text-sm break-words">22/555555/SV/25555</p>
                            <p class="text-[#4D4D4D] text-sm mt-1 break-words">Senin, 6 Oktober 2025</p>
                        </div>

                        <div class="flex items-start mb-4">
                            <img src="{{ asset('images/Ellipse.png') }}" alt="dot" class="w-[10px] h-[10px] mt-1">
                            <span class="text-[#737373] text-xs font-light ml-2 leading-relaxed">Status Terkini:</span>
                        </div>

                        <div class="border-l-2 border-[#C1C1C1] pl-4 mb-4">
                            <p class="text-[#193CB8] text-sm font-regular">Sedang Ditinjau</p>
                            <p class="text-[#4D4D4D] text-xs font-light mt-1 break-words">Lokasi: Belum ditentukan</p>

                            <div class="space-y-1 mt-2">
                                <div class="flex items-center">
                                    <img src="{{ asset('images/check-abu.png') }}" alt="clock" class="w-3 h-3">
                                    <span class="text-[#737373] text-xs font-light ml-1 break-words">Menunggu konfirmasi dosen</span>
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('images/check-abu.png') }}" alt="pending" class="w-3 h-3">
                                    <span class="text-[#737373] text-xs font-light ml-1 break-words">Dalam antrian</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-auto">
                            <button onclick="window.location.href='{{ route('mahasiswa.menungguTrackingJT') }}'"
                                class="w-full bg-[#4D4D4D] text-white py-2 rounded-lg text-sm font-medium hover:bg-[#3D3D3D] transition duration-200">
                                Lihat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Card Status: Dijadwal Ulang -->
                    <div class="border border-gray-200 rounded-lg p-6 bg-white flex flex-col">
                        <div class="flex flex-wrap items-center justify-between mb-4 gap-2">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('images/calendar-biru.png') }}" alt="calendarlogo" class="w-6 h-6">
                                <h2 class="text-lg font-semibold text-[#4D4D4D] break-words">Bimbingan Skripsi</h2>
                            </div>
                            <span class="bg-[#DBEAFE] text-[#193CB8] px-3 py-1 rounded-full text-xs font-medium whitespace-nowrap">
                                Dijadwal Ulang
                            </span>
                        </div>

                        <div class="mb-4">
                            <p class="text-[#4D4D4D] font-medium">Budi Santoso</p>
                            <p class="text-[#4D4D4D] text-sm break-words">22/555555/SV/25555</p>
                            <p class="text-[#4D4D4D] text-sm mt-1 break-words">Kamis, 2 Oktober 2025</p>
                        </div>

                        <div class="flex items-start mb-4">
                            <img src="{{ asset('images/Ellipse.png') }}" alt="dot" class="w-[10px] h-[10px] mt-1">
                            <span class="text-[#737373] text-xs font-light ml-2 leading-relaxed">Status Terkini:</span>
                        </div>

                        <div class="border-l-2 border-[#C1C1C1] pl-4 mb-4">
                            <p class="text-[#193CB8] text-sm font-regular">Dijadwal Ulang</p>
                            <p class="text-[#4D4D4D] text-xs font-light mt-1 break-words">Alasan: Dosen berhalangan hadir</p>

                            <div class="space-y-1 mt-2">
                                <div class="flex items-center">
                                    <img src="{{ asset('images/check-abu.png') }}" alt="reschedule" class="w-3 h-3">
                                    <span class="text-[#737373] text-xs font-light ml-1 break-words">Perlu jadwal baru</span>
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('images/check-abu.png') }}" alt="info" class="w-3 h-3">
                                    <span class="text-[#737373] text-xs font-light ml-1 break-words">Konfirmasi ketersediaan</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-auto">
                            <button onclick="window.location.href='{{ route('mahasiswa.jadwalUlangTrackingJT') }}'"
                                class="w-full bg-[#4D4D4D] text-white py-2 rounded-lg text-sm font-medium hover:bg-[#3D3D3D] transition duration-200">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Permintaan Tanda Tangan Section -->
            <section>
                <h3 class="text-xl font-medium text-[#4D4D4D] mb-6">Permintaan Tanda Tangan</h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">

                    <!-- Card Status: Selesai -->
                    <div class="border border-gray-200 rounded-lg p-6 bg-white flex flex-col">
                        <div class="flex flex-wrap items-center justify-between mb-4 gap-2">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('images/dokumen-biru.png') }}" alt="signaturelogo" class="w-6 h-6">
                                <h2 class="text-lg font-semibold text-[#4D4D4D] break-words">Persetujuan KRS Semester Ganjil</h2>
                            </div>
                            <span class="bg-[#9DD7D5] text-[#4D4D4D] px-3 py-1 rounded-full text-xs font-medium whitespace-nowrap">
                                Selesai
                            </span>
                        </div>

                        <div class="mb-4">
                            <p class="text-[#4D4D4D] font-medium break-words">Budi Santoso</p>
                            <p class="text-[#4D4D4D] text-sm break-words">22/555555/SV/25555</p>
                            <p class="text-[#4D4D4D] text-sm mt-1 break-words">Kamis, 2 Oktober 2025</p>
                        </div>

                        <div class="flex items-start mb-4">
                            <img src="{{ asset('images/Ellipse.png') }}" alt="dot" class="w-[10px] h-[10px] mt-1">
                            <span class="text-[#737373] text-xs font-light ml-2 leading-relaxed">Status Terkini:</span>
                        </div>

                        <div class="border-l-2 border-[#C1C1C1] pl-4 mb-4">
                            <p class="text-[#2DAA9E] text-sm font-regular">Dokumen Disetujui</p>
                            <p class="text-[#4D4D4D] text-xs font-light mt-1 break-words">Siap Diunduh</p>

                            <div class="space-y-1 mt-2">
                                <div class="flex items-center">
                                    <img src="{{ asset('images/check-abu.png') }}" alt="centangAbu" class="w-3 h-3">
                                    <span class="text-[#737373] text-xs font-light ml-1 break-words">Dokumen Dikirim</span>
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('images/check-abu.png') }}" alt="centangAbu" class="w-3 h-3">
                                    <span class="text-[#737373] text-xs font-light ml-1 break-words">Ditinjau Dosen</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2 justify-center w-full">
                            <button
                                class="w-full bg-white text-[#2DAA9E] border border-[#2DAA9E] py-2 rounded-lg text-sm font-medium hover:bg-gray-50 transition duration-200 flex items-center justify-center gap-2">
                                <img src="{{ asset('images/downloadbiru.png') }}" alt="downloadbiru" class="w-4 h-4">
                                Download
                            </button>
                            <button onclick="window.location.href='{{ route('mahasiswa.selesaiTrackingTTD') }}'"
                                class="w-full bg-[#4D4D4D] text-white py-2 rounded-lg text-sm font-medium hover:bg-[#3D3D3D] transition duration-200 flex items-center justify-center">
                                Lihat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Card Status: Perlu Revisi -->
                    <div class="border border-gray-200 rounded-lg p-6 bg-white flex flex-col">
                        <div class="flex flex-wrap items-center justify-between mb-4 gap-2">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('images/dokumen-biru.png') }}" alt="signaturelogo" class="w-6 h-6">
                                <h2 class="text-lg font-semibold text-[#4D4D4D] break-words">Surat Keterangan Mahasiswa Aktif</h2>
                            </div>
                            <span class="bg-[#FFEDD4] text-[#4D4D4D] px-3 py-1 rounded-full text-xs font-medium whitespace-nowrap">
                                Perlu Revisi
                            </span>
                        </div>

                        <div class="mb-4">
                            <p class="text-[#4D4D4D] font-medium">Budi Santoso</p>
                            <p class="text-[#4D4D4D] text-sm break-words">22/555555/SV/25555</p>
                            <p class="text-[#4D4D4D] text-sm mt-1 break-words">Kamis, 2 Oktober 2025</p>
                        </div>

                        <div class="flex items-start mb-4">
                            <img src="{{ asset('images/Ellipse.png') }}" alt="dot" class="w-[10px] h-[10px] mt-1">
                            <span class="text-[#737373] text-xs font-light ml-2 leading-relaxed">Status Terkini:</span>
                        </div>

                        <div class="border-l-2 border-[#C1C1C1] pl-4 mb-4">
                            <p class="text-[#CCAE62] text-sm font-regular">Perlu Revisi</p>
                            <p class="text-[#4D4D4D] text-xs font-light mt-1 break-words">Dokumen Memerlukan Perbaikan</p>

                            <div class="space-y-1 mt-2">
                                <div class="flex items-center">
                                    <img src="{{ asset('images/check-abu.png') }}" alt="warning" class="w-3 h-3">
                                    <span class="text-[#737373] text-xs font-light ml-1 break-words">Dokumen Dikirim</span>
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('images/check-abu.png') }}" alt="edit" class="w-3 h-3">
                                    <span class="text-[#737373] text-xs font-light ml-1 break-words">Dokumen Ditinjau</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-auto">
                            <button onclick="window.location.href='{{ route('mahasiswa.revisiTrackingTTD') }}'"
                                class="w-full bg-[#4D4D4D] text-white py-2 rounded-lg text-sm font-medium hover:bg-[#3D3D3D] transition duration-200">
                                Lihat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Card Status: Ditolak -->
                    <div class="border border-gray-200 rounded-lg p-6 bg-white flex flex-col">
                        <div class="flex flex-wrap items-center justify-between mb-4 gap-2">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('images/dokumen-biru.png') }}" alt="signaturelogo" class="w-6 h-6">
                                <h2 class="text-lg font-semibold text-[#4D4D4D] break-words">Surat Dispensasi Ujian</h2>
                            </div>
                            <span class="bg-[#FFE2E2] border border-[#FFC9C9] text-[#4D4D4D] px-3 py-1 rounded-full text-xs font-medium whitespace-nowrap">
                                Ditolak
                            </span>
                        </div>

                        <div class="mb-4">
                            <p class="text-[#4D4D4D] font-medium break-words">Budi Santoso</p>
                            <p class="text-[#4D4D4D] text-sm break-words">22/555555/SV/25555</p>
                            <p class="text-[#4D4D4D] text-sm mt-1 break-words">Kamis, 2 Oktober 2025</p>
                        </div>

                        <div class="flex items-start mb-4">
                            <img src="{{ asset('images/Ellipse.png') }}" alt="dot" class="w-[10px] h-[10px] mt-1">
                            <span class="text-[#737373] text-xs font-light ml-2 leading-relaxed">Status Terkini:</span>
                        </div>

                        <div class="border-l-2 border-[#C1C1C1] pl-4 mb-4">
                            <p class="text-[#E7000B] text-sm font-regular">Ditolak</p>
                            <p class="text-[#4D4D4D] text-xs font-light mt-1 break-words">Silahkan ajukan ulang</p>

                            <div class="space-y-1 mt-2">
                                <div class="flex items-center">
                                    <img src="{{ asset('images/check-abu.png') }}" alt="cross" class="w-3 h-3">
                                    <span class="text-[#737373] text-xs font-light ml-1 break-words">Dokumen Dikirim</span>
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('images/check-abu.png') }}" alt="info" class="w-3 h-3">
                                    <span class="text-[#737373] text-xs font-light ml-1 break-words">Ditinjau Dosen</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-auto">
                            <button onclick="window.location.href='{{ route('mahasiswa.ditolakTrackingTTD') }}'"
                                class="w-full bg-[#4D4D4D] text-white py-2 rounded-lg text-sm font-medium hover:bg-[#3D3D3D] transition duration-200">
                                Lihat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Card Status: Dibaca -->
                    <div class="border border-gray-200 rounded-lg p-6 bg-white flex flex-col">
                        <div class="flex flex-wrap items-center justify-between mb-4 gap-2">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('images/dokumen-biru.png') }}" alt="signaturelogo" class="w-6 h-6">
                                <h2 class="text-lg font-semibold text-[#4D4D4D] break-words">Proposal Tugas Akhir</h2>
                            </div>
                            <span class="bg-[#DBEAFE] text-[#4D4D4D] px-3 py-1 rounded-full text-xs font-medium whitespace-nowrap">
                                Dibaca
                            </span>
                        </div>

                        <div class="mb-4">
                            <p class="text-[#4D4D4D] font-medium break-words">Budi Santoso</p>
                            <p class="text-[#4D4D4D] text-sm break-words">22/555555/SV/25555</p>
                            <p class="text-[#4D4D4D] text-sm mt-1 break-words">Kamis, 2 Oktober 2025</p>
                        </div>

                        <div class="flex items-start mb-4">
                            <img src="{{ asset('images/Ellipse.png') }}" alt="dot" class="w-[10px] h-[10px] mt-1">
                            <span class="text-[#737373] text-xs font-light ml-2 leading-relaxed">Status Terkini:</span>
                        </div>

                        <div class="border-l-2 border-[#C1C1C1] pl-4 mb-4">
                            <p class="text-[#6CC4C0] text-sm font-regular">Sedang Ditinjau</p>

                            <div class="space-y-1 mt-2">
                                <div class="flex items-center">
                                    <img src="{{ asset('images/check-abu.png') }}" alt="eye" class="w-3 h-3">
                                    <span class="text-[#737373] text-xs font-light ml-1 break-words">Dokumen telah dibaca</span>
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('images/check-abu.png') }}" alt="clock" class="w-3 h-3">
                                    <span class="text-[#737373] text-xs font-light ml-1 break-words">Menunggu keputusan</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-auto">
                            <button onclick="window.location.href='{{ route('mahasiswa.dibacaTrackingTTD') }}'"
                                class="w-full bg-[#4D4D4D] text-white py-2 rounded-lg text-sm font-medium hover:bg-[#3D3D3D] transition duration-200">
                                Lihat Detail
                            </button>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </main>
@endsection

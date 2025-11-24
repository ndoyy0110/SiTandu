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
            <p class="text-[#4D4D4D] text-[16px]">Permintaan Tanda Tangan</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <!-- Judul dan status sejajar -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                <h2 class="text-lg sm:text-xl md:text-[18px] font-medium text-[#0A0A0A] mb-2 sm:mb-0">Persetujuan KRS
                    Semester Ganjil</h2>
                <span class="bg-[#FFE2E2] text-[#4D4D4D] px-3 py-1 rounded-full text-xs font-medium w-fit">
                    Ditolak
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
                                    <img src="{{ asset('images/tracking/dokumenDitolak.png') }}" alt="DokumenDikirimIkon"
                                        class="w-7 h-7 sm:w-8 sm:h-8 inline-block">
                                    <div class="h-6 sm:h-8 border-l-2 border-dashed border-gray-300 mt-2"></div>
                                </div>
                                <div class="flex-1">
                                    <p class="font-medium text-gray-700 text-sm sm:text-base">Dokumen Dikirim</p>
                                    <p class="text-xs sm:text-sm text-gray-500">Dokumen PDF telah dikirim ke dosen. Menunggu untuk ditinjau.</p>
                                    <p class="text-xs sm:text-sm text-gray-500">30 Okt 2024, 09:30</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex flex-col items-center mr-3 sm:mr-4">
                                    <img src="{{ asset('images/tracking/userDitolak.png') }}" alt="DokumenDikirimIkon"
                                        class="w-7 h-7 sm:w-8 sm:h-8 inline-block">
                                    <div class="h-6 sm:h-8 border-l-2 border-dashed border-gray-300 mt-2"></div>
                                </div>
                                <div class="flex-1">
                                    <p class="font-medium text-gray-700 text-sm sm:text-base">Diterima Dosen</p>
                                    <p class="text-xs sm:text-sm text-gray-500">Dosen telah membuka dan membaca dokumen Anda. Sedang dalam proses peninjauan.</p>
                                    <p class="text-xs sm:text-sm text-gray-500">30 Okt 2024, 09:30</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex flex-col items-center mr-3 sm:mr-4">
                                    <img src="{{ asset('images/tracking/jamDitolak.png') }}" alt="DokumenDikirimIkon"
                                        class="w-7 h-7 sm:w-8 sm:h-8 inline-block">
                                    <div class="h-6 sm:h-8 border-l-2 border-dashed border-gray-300 mt-2"></div>
                                </div>
                                <div class="flex-1">
                                    <p class="font-medium text-gray-700 text-sm sm:text-base">Diproses</p>
                                    <p class="text-xs sm:text-sm text-gray-500">Dokumen sedang diproses untuk persetujuan atau tanda tangan.</p>
                                    <p class="text-xs sm:text-sm text-gray-500">30 Okt 2024, 09:30</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex flex-col items-center mr-3 sm:mr-4">
                                    <img src="{{ asset('images/Container-Ditolak.png') }}" alt="DokumenDikirimIkon"
                                        class="w-7 h-7 sm:w-8 sm:h-8 inline-block">
                                    <div class="h-6 sm:h-8 border-dashed border-gray-300 mt-2"></div>
                                </div>
                                <div class="flex-1">
                                    <p class="font-medium text-gray-700 text-sm sm:text-base">Dokumen Ditolak</p>
                                    <p class="text-xs sm:text-sm text-gray-500">Dokumen telah selesai ditandatangani oleh dosen dan siap untuk diunduh.
                                    </p>
                                    <p class="text-xs sm:text-sm text-gray-500">30 Okt 2024, 09:45</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-[#FEF2F2] border border-[#FFC9C9] rounded-lg shadow-md mb-6 p-4">
                    <div class="flex items-start">
                        <div class="flex flex-col items-start mr-3 sm:mr-4">
                            <h3 class="text-[18px] text-[#4D4D4D] font-semibold ">Alasan Penolakan</h3>
                            <p class="text-[#4D4D4D] text-sm sm:text-base">
                                Dokumen pendukung yang diberikan tidak lengkap. Diperlukan: <br>1) Kartu Tanda Mahasiswa,
                                <br>2) Surat Keterangan Resmi, <br>3) Bukti pembayaran UKT semester berjalan. Silahkan
                                ajukan dokumen dan ajukan kembali </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection

@vite(['resources/js/Mahasiswa/permintaan.js'])

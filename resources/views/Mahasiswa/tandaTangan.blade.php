@extends('layouts.templateMahasiswa')
@section('title', 'Home - SITandu')
@section('content')
    <!-- Main Content -->
    <main class="justify-start max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-6">
            <div class="flex-auto space-y-6">

                <!-- Permintaan Tanda Tangan -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-[#4D4D4D]">Permintaan Tanda Tangan</h2>
                </div>

                <!-- GRID RESPONSIVE -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

                    <!-- Card 1 -->
                    <div class="border border-gray-200 rounded-lg p-6 bg-white flex flex-col">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex items-start gap-2 flex-1">
                                <div class="flex-1">
                                    <h2 class="text-[18px] font-semibold text-[#4D4D4D] leading-tight line-clamp-2">
                                        Wijayanti Dwi Astuti, S.Si., M.Sc., Ph.D.
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 mt-2">
                            <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                            <p class="text-[#4D4D4D] text-[14px]">Kepala Prodi TRIK</p>
                        </div>

                        <div class="mt-auto pt-4">
                            <button onclick="window.location.href='{{ route('mahasiswa.permintaanTTD') }}'"
                                class="w-full justify-center bg-[#5CBDB9] text-white px-6 py-2 rounded-lg text-[12px] hover:bg-[#4da8a4] transition duration-200 flex items-center gap-2">
                                <img src="{{ asset('images/dokumenPutih.png') }}" alt="ikonDokumen" class="w-5 h-5">
                                Tanda Tangan
                            </button>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="border border-gray-200 rounded-lg p-6 bg-white flex flex-col">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex items-start gap-2 flex-1">
                                <div class="flex-1">
                                    <h2 class="text-[18px] font-semibold text-[#4D4D4D] leading-tight line-clamp-2">
                                        Wijayanti Dwi Astuti, S.Si., M.Sc., Ph.D.
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 mt-2">
                            <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                            <p class="text-[#4D4D4D] text-[14px]">Kepala Prodi TRIK</p>
                        </div>

                        <div class="mt-auto pt-4">
                            <button onclick="window.location.href='{{ route('mahasiswa.permintaanTTD') }}'"
                                class="w-full justify-center bg-[#5CBDB9] text-white px-6 py-2 rounded-lg text-[12px] hover:bg-[#4da8a4] transition duration-200 flex items-center gap-2">
                                <img src="{{ asset('images/dokumenPutih.png') }}" alt="ikonDokumenPutih" class="w-5 h-5">
                                Tanda Tangan
                            </button>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="border border-gray-200 rounded-lg p-6 bg-white flex flex-col">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex items-start gap-2 flex-1">
                                <div class="flex-1">
                                    <h2 class="text-[18px] font-semibold text-[#4D4D4D] leading-tight line-clamp-2">
                                        Wijayanti Dwi Astuti, S.Si., M.Sc., Ph.D.
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 mt-2">
                            <img src="{{ asset('images/user.png') }}" alt="ikonUser" class="w-5 h-5">
                            <p class="text-[#4D4D4D] text-[14px]">Kepala Prodi TRIK</p>
                        </div>

                        <div class="mt-auto pt-4">
                            <button onclick="window.location.href='{{ route('mahasiswa.permintaanTTD') }}'"
                                class="w-full justify-center bg-[#5CBDB9] text-white px-6 py-2 rounded-lg text-[12px] hover:bg-[#4da8a4] transition duration-200 flex items-center gap-2">
                                <img src="{{ asset('images/dokumenPutih.png') }}" alt="ikonDokumenPutih" class="w-5 h-5">
                                Tanda Tangan
                            </button>
                        </div>
                    </div>

                </div> <!-- end grid -->

            </div>
        </div>
    </main>
@endsection

@extends('layouts.templateMahasiswa')
@section('title', 'Permintaan Tanda Tangan - SITandu')
@section('content')
    <!-- Main Content -->
    <main class="justify-start max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

        <!-- HEADER -->
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-4 gap-3">
            <h2 class="text-[20px] sm:text-[24px] font-bold text-[#4D4D4D]">
                Permintaan Tanda Tangan
            </h2>

            <button onclick="window.location.href='{{ route('mahasiswa.tandaTangan') }}'"
                class="bg-white border border-[#C1C1C1] text-[#4D4D4D] px-4 py-2 sm:px-6 sm:py-2 rounded-lg text-[14px] sm:text-[16px] hover:bg-gray-200 transition duration-200 flex items-center gap-2">
                <img src="{{ asset('images/panahKiri.png') }}" alt="ikonKembali" class="w-[18px] h-[18px] sm:w-[20px] sm:h-[20px]">
                Kembali
            </button>
        </div>

        <!-- NAMA DOSEN -->
        <div class="mb-8">
            <p class="text-[#4D4D4D] text-[14px] sm:text-[16px]">
                Kepada: Wijayanti Dwí Astuti, S.Si., M.Sc., Ph.D.
            </p>
        </div>

        <!-- FORM CONTAINER -->
        <div class="bg-white rounded-lg shadow-md p-4 sm:p-6">
            <form action="#" method="POST">

                <!-- Judul Permintaan -->
                <div class="mb-6">
                    <h2 class="text-[18px] sm:text-[20px] font-medium text-[#4D4D4D] mb-3">Judul Permintaan</h2>
                    <input type="text" placeholder="Ketikkan Judul Permintaan Tanda Tangan"
                        class="w-full px-4 py-3 text-[12px] text-[#4D4D4D] border border-[#C1C1C1] rounded-lg
                        focus:outline-none focus:ring-2 focus:ring-[#5CBDB9] focus:border-transparent">
                </div>

                <!-- Unggah File -->
                <div class="mb-6">
                    <h2 class="text-[18px] sm:text-[20px] font-medium text-[#4D4D4D] mb-3">Unggah File</h2>

                    <div
                        class="border-2 border-dashed border-gray-300 rounded-lg p-6 sm:p-8 text-center
                        hover:border-[#5CBDB9] transition-colors duration-200">
                        <div class="flex flex-col items-center justify-center">
                            <img src="{{ asset('images/upload.png') }}" alt="ikonUpload"
                                class="w-[22px] h-[22px] sm:w-[24px] sm:h-[24px] mb-4">

                            <p class="mt-2 text-sm text-[#4D4D4D]">
                                Drop file di sini atau
                                <span class="text-[#5CBDB9] font-medium">pilih file</span>
                            </p>

                            <p class="text-[11px] text-[#4D4D4D]">Mendukung: PDF</p>

                            <input type="file" class="hidden" id="fileInput" accept=".pdf">
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-200 my-6"></div>

                <!-- Kapan Dibutuhkan -->
                <div class="mb-6">
                    <h2 class="text-[18px] sm:text-[20px] font-medium text-[#4D4D4D]">
                        Kapan Dokumen Dibutuhkan
                    </h2>

                    <input type="date"
                        class="w-full px-4 py-3 text-[12px] text-[#4D4D4D] border border-[#C1C1C1] rounded-lg
                        focus:outline-none focus:ring-2 focus:ring-[#5CBDB9] focus:border-transparent">
                </div>

                <!-- Kepentingan -->
                <div class="mb-6">
                    <h2 class="text-[18px] sm:text-[20px] font-medium text-[#4D4D4D] mb-3">
                        Kepentingan Tanda Tangan
                    </h2>

                    <input type="text" placeholder="Jelaskan Kepentingan Tanda Tangan..."
                        class="w-full px-4 py-8 text-[12px] text-[#4D4D4D] border border-[#C1C1C1] rounded-lg
                        focus:outline-none focus:ring-2 focus:ring-[#5CBDB9] focus:border-transparent">
                </div>

                <!-- SUBMIT -->
                <div class="flex justify-end mt-8">
                    <button type="submit"
                        class="px-6 sm:px-8 py-3 bg-[#5CBDB9] text-[12px] text-white rounded-lg hover:bg-[#4da8a4]
                        transition-colors duration-200 flex items-center">
                        <img src="{{ asset('images/send.png') }}" alt="ikonSend"
                            class="w-[15px] h-[15px] sm:w-[16px] sm:h-[16px] mr-2">
                        Kirim Dokumen
                    </button>
                </div>

            </form>
        </div>
    </main>
@endsection

@vite(['resources/js/Mahasiswa/permintaan.js'])

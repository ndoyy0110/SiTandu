@extends('layouts.templateAdmin')
@section('title', 'Permintaan Registrasi - SITandu')
@section('content')
    <!-- Main Content -->
    <main class="justify-start max-w-7xl mx-auto py-4 sm:py-6 px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mb-6">
            <div>
                <h2 class="text-[20px] sm:text-[24px] font-bold text-[#4D4D4D]">Daftar Registrasi Akun</h2>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 w-full sm:w-auto">
                <div class="relative w-full sm:w-64">
                    <input type="text" placeholder="Cari permintaan..."
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5CBDB9] focus:border-transparent text-sm">
                    <img src="{{ asset('images/search.png') }}" alt="Search" class="w-4 h-4 sm:w-5 sm:h-5 absolute left-3 top-2.5">
                </div>
                <!-- Bagian kanan: Dropdown Role -->
                <div class="w-full sm:w-auto">
                    <div class="relative">
                        <select
                            class="w-full appearance-none bg-white border border-gray-300 rounded-lg px-3 sm:px-4 py-2 pr-8 focus:outline-none focus:ring-2 focus:ring-[#5CBDB9] focus:border-transparent text-sm">
                            <option value="">Pilih Role</option>
                            <option value="dosen">Dosen</option>
                            <option value="mahasiswa">Mahasiswa</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-3 w-3 sm:h-4 sm:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Daftar Permintaan Registrasi -->
        <div class="space-y-4">
            <!-- Card 1: Dosen -->
            <div class="bg-white rounded-lg shadow-md p-4 sm:p-6">
                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">
                    <!-- Bagian kiri: Foto dan informasi -->
                    <div class="flex items-start gap-3 sm:gap-4 flex-1">
                        <!-- Foto -->
                        <div
                            class="w-12 h-12 sm:w-16 sm:h-16 bg-gray-200 rounded-full flex items-center justify-center flex-shrink-0 overflow-hidden">
                            <img src="{{ asset('images/avatar-dosen.png') }}" alt="Foto Dr. Ahmad Fauzi"
                                class="w-full h-full object-cover">
                        </div>

                        <!-- Informasi -->
                        <div class="flex-1 min-w-0">
                            <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-3 mb-2">
                                <h3 class="text-base sm:text-lg font-semibold text-gray-900 truncate">Dr. Ahmad Fauzi, M.Kom</h3>
                                <span class="flex items-center border-[0.8px] border-[#5CBDB933] gap-2 bg-[#5CBDB91A] text-[#5CBDB9] px-2 py-1 rounded-full text-xs font-medium w-fit">
                                    <img src="{{ asset('images/admin/dosenAdmin.png') }}" alt="dosen" class="w-[10px] h-[10px] sm:w-[12px] sm:h-[12px]">
                                    Dosen
                                </span>
                            </div>

                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset('images/email.png') }}" alt="Email" class="w-3 h-3 sm:w-4 sm:h-4 flex-shrink-0">
                                    <p class="text-gray-700 text-sm sm:text-base truncate">ahmad.fauzi@university.ac.id</p>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-6 text-xs sm:text-sm text-gray-600">
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('images/dokumen.png') }}" alt="NIP" class="w-3 h-3 sm:w-4 sm:h-4 flex-shrink-0">
                                        <span class="truncate">NIP: 0123456789</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('images/clock.png') }}" alt="Tanggal" class="w-3 h-3 sm:w-4 sm:h-4 flex-shrink-0">
                                        <span>7 Nov 2024, 09:30</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bagian kanan: Tombol Aksi -->
                    <div class="flex flex-col gap-3 sm:ml-4 sm:mt-6">
                        <!-- Tombol Aksi -->
                        <div class="flex gap-2 justify-start sm:justify-end">
                            <button onclick="approveRequest(1)"
                                class="px-3 sm:px-4 py-2 bg-[#00A63E] text-white rounded-lg hover:bg-green-700 transition duration-200 font-medium flex items-center gap-2 text-xs sm:text-sm w-full sm:w-auto justify-center">
                                <img src="{{ asset('images/admin/setujuAdmin.png') }}" alt="Setujui" class="w-[14px] h-[14px] sm:w-[16px] sm:h-[16px]">
                                Setujui
                            </button>
                            <button onclick="rejectRequest(1)"
                                class="px-3 sm:px-4 py-2 bg-[white] text-[#C10007] border-[#FFA2A2] border-[0.8px] rounded-lg hover:bg-[#ddd9d96b] transition duration-200 font-medium flex items-center gap-2 text-xs sm:text-sm w-full sm:w-auto justify-center">
                                <img src="{{ asset('images/admin/tolakAdmin.png') }}" alt="Tolak" class="w-[14px] h-[14px] sm:w-[16px] sm:h-[16px]">
                                Tolak
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2: Mahasiswa -->
            <div class="bg-white rounded-lg shadow-md p-4 sm:p-6">
                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">
                    <!-- Bagian kiri: Foto dan informasi -->
                    <div class="flex items-start gap-3 sm:gap-4 flex-1">
                        <!-- Foto -->
                        <div
                            class="w-12 h-12 sm:w-16 sm:h-16 bg-gray-200 rounded-full flex items-center justify-center flex-shrink-0 overflow-hidden">
                            <img src="{{ asset('images/avatar-mahasiswa.png') }}" alt="Foto Budi Santoso"
                                class="w-full h-full object-cover">
                        </div>

                        <!-- Informasi -->
                        <div class="flex-1 min-w-0">
                            <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-3 mb-2">
                                <h3 class="text-base sm:text-lg font-semibold text-gray-900 truncate">Budi Santoso</h3>
                                <span class="flex items-center bg-[#EFF6FF] gap-2 text-[#1447E6] border-[0.8px] border-[#BEDBFF] px-2 py-1 rounded-full text-xs font-medium w-fit">
                                    <img src="{{ asset('images/admin/mahasiswaAdmin.png') }}" alt="mahasiswa" class="w-[10px] h-[10px] sm:w-[12px] sm:h-[12px]">
                                    Mahasiswa
                                </span>
                            </div>

                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset('images/email.png') }}" alt="Email" class="w-3 h-3 sm:w-4 sm:h-4 flex-shrink-0">
                                    <p class="text-gray-700 text-sm sm:text-base truncate">budi.santoso@student.university.ac.id</p>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-6 text-xs sm:text-sm text-gray-600">
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('images/dokumen.png') }}" alt="NIM" class="w-3 h-3 sm:w-4 sm:h-4 flex-shrink-0">
                                        <span class="truncate">NIM: 82010001</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('images/clock.png') }}" alt="Tanggal" class="w-3 h-3 sm:w-4 sm:h-4 flex-shrink-0">
                                        <span>6 Nov 2024, 14:20</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bagian kanan: Tombol Aksi -->
                    <div class="flex flex-col gap-3 sm:ml-4 sm:mt-6">
                        <!-- Tombol Aksi -->
                        <div class="flex gap-2 justify-start sm:justify-end">
                            <button onclick="approveRequest(2)"
                                class="px-3 sm:px-4 py-2 bg-[#00A63E] text-white rounded-lg hover:bg-green-700 transition duration-200 font-medium flex items-center gap-2 text-xs sm:text-sm w-full sm:w-auto justify-center">
                                <img src="{{ asset('images/admin/setujuAdmin.png') }}" alt="Setujui" class="w-[14px] h-[14px] sm:w-[16px] sm:h-[16px]">
                                Setujui
                            </button>
                            <button onclick="rejectRequest(2)"
                                class="px-3 sm:px-4 py-2 bg-[white] text-[#C10007] border-[#FFA2A2] border-[0.8px] rounded-lg hover:bg-[#ddd9d96b] transition duration-200 font-medium flex items-center gap-2 text-xs sm:text-sm w-full sm:w-auto justify-center">
                                <img src="{{ asset('images/admin/tolakAdmin.png') }}" alt="Tolak" class="w-[14px] h-[14px] sm:w-[16px] sm:h-[16px]">
                                Tolak
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
<script>
    function approveRequest(id) {
        if (confirm('Apakah Anda yakin ingin menyetujui permintaan registrasi ini?')) {
            // Implementasi API call untuk approve
            console.log('Menyetujui permintaan:', id);
            // Tambahkan logika AJAX/Fetch di sini
        }
    }

    function rejectRequest(id) {
        if (confirm('Apakah Anda yakin ingin menolak permintaan registrasi ini?')) {
            // Implementasi API call untuk reject
            console.log('Menolak permintaan:', id);
            // Tambahkan logika AJAX/Fetch di sini
        }
    }
</script>

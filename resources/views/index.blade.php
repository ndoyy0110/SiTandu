<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiTandu - Kelola Tanda Tangan & Janji Temu</title>
    <!-- Tailwind CSS -->

    @vite('resources/css/app.css')
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts - Noto Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

</head>

<body class="font-noto text-[#4D4D4D] min-h-screen flex flex-col">
    <section id="Login"
        class="bg-[#F1F1F1] text-[#4D4D4D] py-16 relative flex flex-col md:flex-row items-center md:items-start gap-10">
        <div class="fixed top-0 left-0 right-0 bg-[#F1F1F1] z-50 py-4 px-8 shadow-sm">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Logo -->
                <h1 class="text-2xl md:text-3xl font-bold">SiTandu</h1>

                <!-- Login/Signup Buttons -->
                <div class="flex gap-2">
                    <a href="{{ route('login') }}"
                        class="bg-transparent text-[#4D4D4D] border border-[#4D4D4D] px-4 md:px-6 py-2 rounded-lg font-medium hover:bg-white transition-all hover:-translate-y-0.5 text-sm md:text-base">
                        Login
                    </a>
                    <a href="{{ route('register') }}"
                        class="bg-[#5CBDB9] text-white px-4 md:px-6 py-2 rounded-lg font-medium hover:bg-[#4CAEA9] transition-all hover:-translate-y-0.5 text-sm md:text-base">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row items-center md:items-start gap-10">
            <div class="max-w-4xl">
                <h1 class="text-5xl mb-8 leading-tight font-bold">
                    Kelola <Span class="text-[#5CBDB9]">Tanda</Span><br>
                    <span class="text-[#5CBDB9]">Tangan & Janji</Span><br>
                    <span class="text-[#5CBDB9]">Temu </span>dengan<br>
                    Mudah
                </h1>
                <p class="text-lg mb-10 leading-relaxed">
                    SiTandu menyederhanakan proses administrasi akademik<br>
                    dengan sistem tanda tangan digital dan <br>
                    penjadwalan janji temu yang efisien untuk dosen dan <br>
                    mahasiswa.
                </p>

                <div class="flex flex-wrap gap-4">
                    <button onclick="window.location.href='{{ route('login') }}'"
                        class="bg-[#5CBDB9] text-white px-8 py-3 rounded-lg font-semibold hover:bg-gray-200 transition-all hover:-translate-y-0.5">
                        Mulai Sekarang
                    </button>
                    <button onclick="scrollToCaraKerja()"
                        class="bg-transparent text-[#4D4D4D] border-2 border-[#4D4D4D] px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-primary transition-all hover:-translate-y-0.5">
                        Pelajari Lebih Lanjut
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-[#F1F1F1]">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Fitur Unggulan SiTandu</h2>
                <p class="text-xl max-w-2xl mx-auto">
                    Sistem yang dirancang khusus untuk memudahkan interaksi antara dosen dan mahasiswa dalam proses
                    administrasi akademik.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-2xl mx-auto">
                <!-- Tanda Tangan Digital -->
                <div class="border border-gray-200 rounded-xl p-8 hover:shadow-lg transition-all hover:-translate-y-1">
                    <img src="images/Frame 56.png" alt="Tanda Tangan Digital" class="w-16 h-16 mb-4">
                    <h3 class="text-xl font-bold mb-4">Tanda Tangan Digital</h3>
                    <p class="text-gray-600 mb-6">
                        Proses persetujuan dokumen akademik seperti KRS, surat keterangan, dan proposal tugas akhir
                        secara digital dan aman.
                    </p>

                    <div class="space-y-3">
                        <div class="flex items-center">
                            <img src="images/circle-check-big.png" alt="check" class="w-5 h-5 mr-3">
                            <span>Upload dokumen langsung</span>
                        </div>
                        <div class="flex items-center">
                            <img src="images/circle-check-big.png" alt="check" class="w-5 h-5 mr-3">
                            <span>Tracking status real-time</span>
                        </div>
                        <div class="flex items-center">
                            <img src="images/circle-check-big.png" alt="check" class="w-5 h-5 mr-3">
                            <span>Download dokumen</span>
                        </div>
                    </div>
                </div>

                <!-- Penjadwalan Janji Temu -->
                <div class="border border-gray-200 rounded-xl p-8 hover:shadow-lg transition-all hover:-translate-y-1">
                    <img src="images/Frame 57.png" alt="Penjadwalan Janji Temu" class="w-16 h-16 mb-4">
                    <h3 class="text-xl font-bold mb-4">Penjadwalan Janji Temu</h3>
                    <p class="text-gray-600 mb-6">
                        Sistem booking janji temu untuk bimbingan tugas akhir, konsultasi akademik, dan diskusi
                        penelitian dengan dosen.
                    </p>

                    <div class="space-y-3">
                        <div class="flex items-center">
                            <img src="images/circle-check-big.png" alt="check" class="w-5 h-5 mr-3">
                            <span>Kalender dosen real-time</span>
                        </div>
                        <div class="flex items-center">
                            <img src="images/circle-check-big.png" alt="check" class="w-5 h-5 mr-3">
                            <span>Pemilihan ruangan</span>
                        </div>
                        <div class="flex items-center">
                            <img src="images/circle-check-big.png" alt="check" class="w-5 h-5 mr-3">
                            <span>Notifikasi email</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="CaraKerja" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Cara Kerja SiTandu</h2>
            <div class="text-center text-2xl max-w-3xl mx-auto space-y-6">
                <p>Proses yang sederhana dan efisien untuk semua kebutuhan administrasi akademik Anda.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto py-16">
            <!-- Step 1 -->
            <div class="border border-white rounded-xl p-8">
                <div class="flex justify-center mb-6">
                    <img src="images/Frame 60.png" alt="Untuk Mahasiswa" class="w-16 h-16">
                </div>
                <h1 class="text-2xl font-bold mb-6 text-center">Untuk Mahasiswa</h1>
                <p class="text-center mb-6">Proses pengajuan yang mudah dan tracking yang transparan</p>
                <div class="flex items-start mb-4">
                    <div
                        class="bg-[#5CBDB9] text-white rounded-full w-10 h-10 flex items-center justify-center mr-4 font-bold flex-shrink-0">
                        1</div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Upload Dokumen</h3>
                        <p class="text-gray-600">Upload dokumen yang perlu ditandatangi atau ajukan janji temu dengan
                            dosen</p>
                    </div>
                </div>
                <div class="flex items-start mb-4">
                    <div
                        class="bg-[#5CBDB9] text-white rounded-full w-10 h-10 flex items-center justify-center mr-4 font-bold flex-shrink-0">
                        2</div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Tracking Real-time</h3>
                        <p class="text-gray-600">Pantau status permintaan Anda dengan sistem tracking yang informatif
                        </p>
                    </div>
                </div>
                <div class="flex items-start mb-4">
                    <div
                        class="bg-[#5CBDB9] text-white rounded-full w-10 h-10 flex items-center justify-center mr-4 font-bold flex-shrink-0">
                        3</div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Download & Hadiri</h3>
                        <p class="text-gray-600">Download dokumen yang telah ditandatangani atau hadiri janji temu
                            sesuai jadwal</p>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="border border-white rounded-xl p-8">
                <div class="flex justify-center mb-6">
                    <img src="images/Frame 61.png" alt="Untuk Dosen" class="w-16 h-16">
                </div>
                <h1 class="text-2xl font-bold mb-6 text-center">Untuk Dosen</h1>
                <p class="text-center mb-6">Dashboard terpusat untuk mengelola semua permintaan mahasiswa</p>
                <div class="flex items-start mb-4">
                    <div
                        class="bg-[#E6C160] text-white rounded-full w-10 h-10 flex items-center justify-center mr-4 font-bold flex-shrink-0">
                        1</div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Review Permintaan</h3>
                        <p class="text-gray-600">Lihat dan review semua permintaan tanda tangan dan janji temu dari
                            mahasiswa</p>
                    </div>
                </div>
                <div class="flex items-start mb-4">
                    <div
                        class="bg-[#E6C160] text-white rounded-full w-10 h-10 flex items-center justify-center mr-4 font-bold flex-shrink-0">
                        2</div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Setuju atau Revisi</h3>
                        <p class="text-gray-600">Berikan persetujuan, minta revisi, atau jadwalkan janji temu dengan
                            mudah</p>
                    </div>
                </div>
                <div class="flex items-start mb-4">
                    <div
                        class="bg-[#E6C160] text-white rounded-full w-10 h-10 flex items-center justify-center mr-4 font-bold flex-shrink-0">
                        3</div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Kelola Jadwal</h3>
                        <p class="text-gray-600">Pantau jadwal harian dan kelola semua aktivitas dalam satu dashboard
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="py-4 bg-[#5CBDB9] mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-right">
            <p class="mb-0 text-[#4D4D4D] font-medium">&copy; 2025 SiTandu. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function scrollToLogin() {
            document.querySelector('.absolute.top-8.right-8').scrollIntoView({
                behavior: 'smooth'
            });
        }

        function scrollToCaraKerja() {
            document.getElementById('CaraKerja').scrollIntoView({
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>

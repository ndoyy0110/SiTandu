@extends('layouts.templateMahasiswa')
@section('title', 'Permintaan Tanda Tangan - SITandu')
@section('content')
    <!-- Main Content -->
    <main class="justify-start max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-[24px] font-bold text-[#4D4D4D]">Janji Temu</h2>
            <button onclick="window.location.href='{{ route('mahasiswa.janjiTemu') }}'"
                class="bg-white border border-[#C1C1C1] text-[#4D4D4D] px-6 py-2 rounded-lg text-[16px] hover:bg-gray-200 transition duration-200 flex items-center gap-2">
                <img src="{{ asset('images/panahKiri.png') }}" alt="ikonKembali" class="w-[20px] h-[20px]">
                Kembali
            </button>
        </div>
        <div class="mb-8">
            <p class="text-[#4D4D4D] text-[16px]">Kepada: Wijayanti Dwí Astuti, S.Si., M.Sc., Ph.D.</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
            <!-- Form Section -->
            <form action="#" method="POST">
                <!-- Judul Pertemuan -->
                <div class="mb-6">
                    <h2 class="text-[20px] font-medium text-[#4D4D4D] mb-3">Judul Pertemuan</h2>
                    <input type="text" placeholder="Ketikkan Judul Pertemuan"
                        class="w-full px-4 py-3 text-[12px] text-[#4D4D4D] border border-[#C1C1C1] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5CBDB9] focus:border-transparent">
                </div>

                <!-- Pilih Waktu dan Jadwal -->
                <div class="mb-6">
                    <h2 class="text-[20px] font-medium text-[#4D4D4D] mb-3">Pilih Waktu</h2>
                    <div class="flex gap-6">
                        <!-- Kalender -->
                        <div class="w-1/2 border border-[#C1C1C1] rounded-lg p-4">
                            <div class="flex justify-between items-center mb-4">
                                <div class="text-[#4D4D4D] font-medium">Jun</div>
                                <div class="text-[#4D4D4D] font-medium">2025</div>
                                <div class="text-[#4D4D4D] font-medium">Jan</div>
                            </div>
                            <div class="grid grid-cols-7 gap-2 text-center text-[12px] text-[#4D4D4D] mb-2">
                                <div>Su</div>
                                <div>Mo</div>
                                <div>Tu</div>
                                <div>We</div>
                                <div>Th</div>
                                <div>Fr</div>
                                <div>Sa</div>
                            </div>
                            <div class="grid grid-cols-7 gap-2 text-center text-[12px] text-[#4D4D4D]">
                                <div>1</div>
                                <div>2</div>
                                <div>3</div>
                                <div>4</div>
                                <div>5</div>
                                <div>6</div>
                                <div>7</div>
                                <div>8</div>
                                <div>9</div>
                                <div>10</div>
                                <div>11</div>
                                <div>12</div>
                                <div>13</div>
                                <div>14</div>
                                <div>15</div>
                                <div>16</div>
                                <div>17</div>
                                <div>18</div>
                                <div>19</div>
                                <div>20</div>
                                <div>21</div>
                                <div>22</div>
                                <div>23</div>
                                <div>24</div>
                                <div>25</div>
                                <div>26</div>
                                <div>25</div>
                                <div>28</div>
                                <div>29</div>
                                <div>30</div>
                                <div>1</div>
                                <div>2</div>
                                <div>3</div>
                                <div>4</div>
                                <div>5</div>
                            </div>
                        </div>

                        <!-- Jadwal -->
                        <div class="w-1/2">
                            <h3 class="text-[16px] font-medium text-[#4D4D4D] mb-4">Jum'at, 25 Juni 2025</h3>
                            <div class="space-y-4">
                                <div class="flex justify-between items-center border border-[#C1C1C1] rounded-lg p-4">
                                    <div class="text-[14px] text-[#4D4D4D]">07:15 - 08:55</div>
                                    <div class="flex items-center gap-4">
                                        <div class="text-[12px] text-[#5CBDB9]">Jadwal Tersedia</div>
                                        <button class="px-4 py-2 bg-[#5CBDB9] text-white rounded-lg text-[12px]">Pilih Waktu</button>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center border border-[#C1C1C1] rounded-lg p-4">
                                    <div class="text-[14px] text-[#4D4D4D]">08:55 - 10:55</div>
                                    <div class="flex items-center gap-4">
                                        <div class="text-[12px] text-[#5CBDB9]">Jadwal Tersedia</div>
                                        <button class="px-4 py-2 bg-[#5CBDB9] text-white rounded-lg text-[12px]">Pilih Waktu</button>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center border border-[#C1C1C1] rounded-lg p-4">
                                    <div class="text-[14px] text-[#4D4D4D]">10:55 - 11:55</div>
                                    <div class="text-[12px] text-[#FF6B6B]">Jadwal Tidak Tersedia</div>
                                </div>
                                <div class="flex justify-between items-center border border-[#C1C1C1] rounded-lg p-4">
                                    <div class="text-[14px] text-[#4D4D4D]">12:15 - 14:55</div>
                                    <div class="flex items-center gap-4">
                                        <div class="text-[12px] text-[#5CBDB9]">Jadwal Tersedia</div>
                                        <button class="px-4 py-2 bg-[#5CBDB9] text-white rounded-lg text-[12px]">Pilih Waktu</button>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center border border-[#C1C1C1] rounded-lg p-4">
                                    <div class="text-[14px] text-[#4D4D4D]">15:15 - 16:55</div>
                                    <div class="text-[12px] text-[#FF6B6B]">Jadwal Tidak Tersedia</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kepentingan Pertemuan -->
                <div class="mb-6">
                    <h2 class="text-[20px] font-medium text-[#4D4D4D] mb-3">Kepentingan Pertemuan</h2>
                    <input type="text" placeholder="Jelaskan Kepentingan Pertemuan..."
                        class="w-full px-4 py-8 text-[12px] text-[#4D4D4D] border border-[#C1C1C1] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5CBDB9] focus:border-transparent">
                </div>

<!-- Catatan Lokasi -->
<div class="mb-6">
    <div class="border border-[#C1C1C1] rounded-lg bg-[#FFF3D3] p-2">
        <div class="flex items-start gap-3">
            <img src="{{ asset('images/pin.png') }}" alt="ikonInfo" class="w-[10.67px] h-[13.33px] mt-3">
            <div class="flex-1">
                <h3 class="text-[12px] font-regular text-[#4D4D4D] mb-1">Catatan Lokasi</h3>
                <p class="text-[12px] text-[#4D4D4D]">Lokasi pertemuan akan ditentukan oleh dosen setelah permintaan anda disetujui.</p>
            </div>
        </div>
    </div>
</div>

                <!-- Submit Button -->
                <div class="flex justify-end mt-8">
                    <button type="submit"
                        class="px-8 py-3 bg-[#5CBDB9] text-[12px] text-[white] rounded-lg hover:bg-[#4da8a4] transition-colors duration-200 font-regular flex items-center">
                        <img src="{{ asset('images/send.png') }}" alt="ikonSend" class=" w-[16px] h-[16px] mr-2">
                        Kirim Dokumen
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection

@vite(['resources/js/Mahasiswa/permintaanJT.js'])

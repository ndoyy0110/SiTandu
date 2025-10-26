@extends('layouts.template')
@section('title', 'Login - SITandu')
@section('content')
    <!-- Main Content -->
    <main class="justify-start max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Left kiri -->
            <div class="flex-1 space-y-6">
                <!-- Jadwal Mendatang -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-[#4D4D4D]">Jadwal Mendatang</h2>
                </div>
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-[20px] text-[#4D4D4D]">Kamis, 18 September 2025</h2>
                </div>
                <div class="rounded-lg p-6 bg-[#F1F1F1]">
                    {{--  Card 1 --}}
                    <div class="bg-white border-l-4 border-white pl-4 py-3 gap-4 mb-4 rounded-2xl">
                        <div class="bg-white border-l-8 border-[#FFD66B] pl-4 py-3 gap-4 mb-4">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="bg-[#5CBDB9] rounded-lg text-[14px] text-white px-3 py-1">Janji Temu</span>
                                <span class="font-bold text-[16px] text-[#4D4D4D]">Bimbingan Tugas Akhir</span>
                            </div>

                            <div class="space-y-2">
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
                        </div>
                    </div>
                    {{--  Card 2 --}}
                    <div class="bg-white border-l-4 border-white pl-4 py-3 gap-4 mb-4 rounded-2xl">
                        <div class="bg-white border-l-8 border-[#FFD66B] pl-4 py-3 gap-4 mb-4">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="bg-[#5CBDB9] rounded-lg text-[14px] text-white px-3 py-1">Janji Temu</span>
                                <span class="font-bold text-[16px] text-[#4D4D4D]">Bimbingan Tugas Akhir</span>
                            </div>

                            <div class="space-y-2">
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
                        </div>
                    </div>
                    {{--  Card 3 --}}
                    <div class="bg-white border-l-4 border-white pl-4 py-3 gap-4 mb-4 rounded-2xl">
                        <div class="bg-white border-l-8 border-[#FFD66B] pl-4 py-3 gap-4 mb-4">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="bg-[#5CBDB9] rounded-lg text-[14px] text-white px-3 py-1">Janji Temu</span>
                                <span class="font-bold text-[16px] text-[#4D4D4D]">Bimbingan Tugas Akhir</span>
                            </div>

                            <div class="space-y-2">
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
                        </div>
                    </div>
                    {{--  Card 4 --}}
                    <div class="bg-white border-l-4 border-white pl-4 py-3 gap-4 mb-4 rounded-2xl">
                        <div class="bg-white border-l-8 border-[#FFD66B] pl-4 py-3 gap-4 mb-4">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="bg-[#5CBDB9] rounded-lg text-[14px] text-white px-3 py-1">Janji Temu</span>
                                <span class="font-bold text-[16px] text-[#4D4D4D]">Bimbingan Tugas Akhir</span>
                            </div>

                            <div class="space-y-2">
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
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Column - Sidebar Kanan -->
            <div class="w-full lg:w-80 space-y-6">
                <div class="flex justify-start relative">
                    <button id="calendar-button"
                        class="text-[#4D4D4D] gap-2 text-sm font-medium bg-[white] border border-[#C1C1C1] hover:bg-[#FFDA7A] rounded-md px-6 py-4 flex items-center">
                            Kamis, 18 September 2025
                        <img src="{{ asset('images/panah.png') }}" alt="dropdown Icon" class="w-[18px] h-[16px]">
                    </button>

                    <!-- Calendar Dropdown Menu -->
                    <div id="calendar-dropdown"
                        class="hidden absolute right-0 top-full mt-2 w-80 bg-white rounded-lg shadow-lg border border-gray-200 z-10 p-4">
                        <!-- Calendar Header -->
                        <div class="flex justify-between items-center mb-4">
                            <button class="text-gray-600 hover:text-gray-800 p-2 rounded-lg hover:bg-gray-100">
                                <i class="fas fa-chevron-left text-sm"></i>
                            </button>
                            <span class="font-bold text-[#4D4D4D]">September 2025</span>
                            <button class="text-gray-600 hover:text-gray-800 p-2 rounded-lg hover:bg-gray-100">
                                <i class="fas fa-chevron-right text-sm"></i>
                            </button>
                        </div>

                        <!-- Calendar Days -->
                        <div class="grid grid-cols-7 gap-1 text-center mb-2">
                            <div class="text-gray-500 text-xs font-medium py-1">Min</div>
                            <div class="text-gray-500 text-xs font-medium py-1">Sen</div>
                            <div class="text-gray-500 text-xs font-medium py-1">Sel</div>
                            <div class="text-gray-500 text-xs font-medium py-1">Rab</div>
                            <div class="text-gray-500 text-xs font-medium py-1">Kam</div>
                            <div class="text-gray-500 text-xs font-medium py-1">Jum</div>
                            <div class="text-gray-500 text-xs font-medium py-1">Sab</div>
                        </div>

                        <!-- Calendar Dates -->
                        <div class="grid grid-cols-7 gap-1 text-center">
                            <!-- Previous month dates -->
                            <div class="text-gray-400 text-xs py-2">25</div>
                            <div class="text-gray-400 text-xs py-2">26</div>
                            <div class="text-gray-400 text-xs py-2">27</div>
                            <div class="text-gray-400 text-xs py-2">28</div>
                            <div class="text-gray-400 text-xs py-2">29</div>
                            <div class="text-gray-400 text-xs py-2">30</div>
                            <div class="text-gray-400 text-xs py-2">31</div>

                            <!-- Current month dates -->
                            <div class="text-gray-600 text-xs py-2">1</div>
                            <div class="text-gray-600 text-xs py-2">2</div>
                            <div class="text-gray-600 text-xs py-2">3</div>
                            <div class="text-gray-600 text-xs py-2">4</div>
                            <div class="text-gray-600 text-xs py-2">5</div>
                            <div class="text-gray-600 text-xs py-2">6</div>
                            <div class="text-gray-600 text-xs py-2">7</div>
                            <div class="text-gray-600 text-xs py-2">8</div>
                            <div class="text-gray-600 text-xs py-2">9</div>
                            <div class="text-gray-600 text-xs py-2">10</div>
                            <div class="text-gray-600 text-xs py-2">11</div>
                            <div class="text-gray-600 text-xs py-2">12</div>
                            <div class="text-gray-600 text-xs py-2">13</div>
                            <div class="text-gray-600 text-xs py-2">14</div>
                            <div class="text-gray-600 text-xs py-2">15</div>
                            <div class="text-gray-600 text-xs py-2">16</div>
                            <div class="text-gray-600 text-xs py-2">17</div>
                            <div class="bg-[#5CBDB9] text-white text-xs py-2 rounded-full font-bold">18</div>
                            <div class="text-gray-600 text-xs py-2">19</div>
                            <div class="text-gray-600 text-xs py-2">20</div>
                            <div class="text-gray-600 text-xs py-2">21</div>
                            <div class="text-gray-600 text-xs py-2">22</div>
                            <div class="text-gray-600 text-xs py-2">23</div>
                            <div class="text-gray-600 text-xs py-2">24</div>
                            <div class="text-gray-600 text-xs py-2">25</div>
                            <div class="text-gray-600 text-xs py-2">26</div>
                            <div class="text-gray-600 text-xs py-2">27</div>
                            <div class="text-gray-600 text-xs py-2">28</div>
                            <div class="text-gray-600 text-xs py-2">29</div>
                            <div class="text-gray-600 text-xs py-2">30</div>
                        </div>

                        <!-- Today Button -->
                        <div class="mt-4 pt-3 border-t border-gray-200">
                            <button class="w-full bg-[#F1F1F1] text-[#4D4D4D] py-2 rounded-lg text-sm font-medium hover:bg-gray-200 transition duration-200">
                                Hari Ini
                            </button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Calendar Dropdown Toggle
        document.getElementById('calendar-button').addEventListener('click', function() {
            const calendarDropdown = document.getElementById('calendar-dropdown');
            const userMenu = document.getElementById('user-menu');

            // Toggle calendar dropdown
            calendarDropdown.classList.toggle('hidden');

            // Close user menu if open
            userMenu.classList.add('hidden');
        });

        // Select date functionality
        document.querySelectorAll('#calendar-dropdown .text-gray-600').forEach(date => {
            date.addEventListener('click', function() {
                const selectedDate = this.textContent;
                const monthYear = 'September 2025';
                const dayNames = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                const dateObj = new Date(2025, 8, parseInt(selectedDate)); // September is month 8 (0-indexed)
                const dayName = dayNames[dateObj.getDay()];

                // Update the button text
                document.getElementById('calendar-button').innerHTML =
                    `${dayName}, ${selectedDate} September 2025 <img src="{{ asset('images/panah.png') }}" alt="dropdown Icon" class="w-[18px] h-[16px]">`;

                // Close dropdown
                document.getElementById('calendar-dropdown').classList.add('hidden');
            });
        });
    </script>
@endsection

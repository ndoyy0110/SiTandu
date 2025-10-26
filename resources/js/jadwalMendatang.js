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

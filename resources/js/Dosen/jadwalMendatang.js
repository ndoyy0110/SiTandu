// resources/js/Dosen/jadwalMendatang.js

document.addEventListener('DOMContentLoaded', function() {
    // Mobile Calendar
    const calendarButtonMobile = document.getElementById('calendar-button-mobile');
    const calendarDropdownMobile = document.getElementById('calendar-dropdown-mobile');

    // Desktop Calendar
    const calendarButtonDesktop = document.getElementById('calendar-button-desktop');
    const calendarDropdownDesktop = document.getElementById('calendar-dropdown-desktop');

    // Calendar navigation
    let currentDate = new Date(2025, 8, 18); // September 18, 2025 (month is 0-indexed)

    // Function to toggle mobile calendar
    if (calendarButtonMobile && calendarDropdownMobile) {
        calendarButtonMobile.addEventListener('click', function(e) {
            e.stopPropagation();
            calendarDropdownMobile.classList.toggle('hidden');
        });
    }

    // Function to toggle desktop calendar
    if (calendarButtonDesktop && calendarDropdownDesktop) {
        calendarButtonDesktop.addEventListener('click', function(e) {
            e.stopPropagation();
            calendarDropdownDesktop.classList.toggle('hidden');
        });
    }

    // Close dropdowns when clicking outside
    document.addEventListener('click', function() {
        if (calendarDropdownMobile) {
            calendarDropdownMobile.classList.add('hidden');
        }
        if (calendarDropdownDesktop) {
            calendarDropdownDesktop.classList.add('hidden');
        }
    });

    // Prevent dropdowns from closing when clicking inside them
    if (calendarDropdownMobile) {
        calendarDropdownMobile.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    }

    if (calendarDropdownDesktop) {
        calendarDropdownDesktop.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    }

    // Calendar navigation functions
    function updateCalendarDisplay() {
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const formattedDate = currentDate.toLocaleDateString('id-ID', options);

        // Update button texts
        if (calendarButtonMobile) {
            calendarButtonMobile.querySelector('span').textContent = formattedDate;
        }
        if (calendarButtonDesktop) {
            calendarButtonDesktop.querySelector('span').textContent = formattedDate;
        }

        // Update calendar header
        const monthYear = currentDate.toLocaleDateString('id-ID', { month: 'long', year: 'numeric' });
        const monthYearElements = document.querySelectorAll('#calendar-dropdown-mobile .font-bold, #calendar-dropdown-desktop .font-bold');
        monthYearElements.forEach(element => {
            if (element.textContent.includes('September') || element.textContent.includes('2025')) {
                element.textContent = monthYear;
            }
        });

        // Update calendar days
        updateCalendarDays();
    }

    function updateCalendarDays() {
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();

        const firstDay = new Date(year, month, 1);
        const lastDay = new Date(year, month + 1, 0);
        const daysInMonth = lastDay.getDate();
        const startingDay = firstDay.getDay(); // 0 = Sunday, 1 = Monday, etc.

        // Get previous month's last days
        const prevMonthLastDay = new Date(year, month, 0).getDate();

        // Update both mobile and desktop calendars
        updateSingleCalendar('mobile');
        updateSingleCalendar('desktop');

        function updateSingleCalendar(type) {
            const calendarGrid = document.querySelector(`#calendar-dropdown-${type} .grid.grid-cols-7`);
            if (!calendarGrid) return;

            // Clear existing content except the day headers
            const days = calendarGrid.querySelectorAll('.text-gray-400, .text-gray-600, .bg-\\[#5CBDB9\\]');
            days.forEach(day => day.remove());

            // Add previous month's days
            for (let i = startingDay - 1; i >= 0; i--) {
                const prevDay = document.createElement('div');
                prevDay.className = 'text-gray-400 text-xs py-2';
                prevDay.textContent = prevMonthLastDay - i;
                calendarGrid.appendChild(prevDay);
            }

            // Add current month's days
            for (let day = 1; day <= daysInMonth; day++) {
                const dayElement = document.createElement('div');
                dayElement.className = 'text-gray-600 text-xs py-2 cursor-pointer hover:bg-gray-100 rounded-full';
                dayElement.textContent = day;

                // Highlight current selected date
                if (day === currentDate.getDate() && month === currentDate.getMonth() && year === currentDate.getFullYear()) {
                    dayElement.className = 'bg-[#5CBDB9] text-white text-xs py-2 rounded-full font-bold cursor-pointer';
                }

                // Add click event to select date
                dayElement.addEventListener('click', function() {
                    currentDate = new Date(year, month, day);
                    updateCalendarDisplay();
                    // Close dropdowns after selecting a date
                    if (calendarDropdownMobile) calendarDropdownMobile.classList.add('hidden');
                    if (calendarDropdownDesktop) calendarDropdownDesktop.classList.add('hidden');
                });

                calendarGrid.appendChild(dayElement);
            }

            // Add next month's days to fill the grid (42 cells total - 6 rows)
            const totalCells = 42; // 6 rows * 7 days
            const remainingCells = totalCells - (startingDay + daysInMonth);

            for (let day = 1; day <= remainingCells; day++) {
                const nextDay = document.createElement('div');
                nextDay.className = 'text-gray-400 text-xs py-2';
                nextDay.textContent = day;
                calendarGrid.appendChild(nextDay);
            }
        }
    }

    // Navigation buttons
    function setupNavigation() {
        // Mobile navigation
        const mobilePrevBtn = document.querySelector('#calendar-dropdown-mobile .fa-chevron-left').closest('button');
        const mobileNextBtn = document.querySelector('#calendar-dropdown-mobile .fa-chevron-right').closest('button');
        const mobileTodayBtn = document.querySelector('#calendar-dropdown-mobile button:last-child');

        // Desktop navigation
        const desktopPrevBtn = document.querySelector('#calendar-dropdown-desktop .fa-chevron-left').closest('button');
        const desktopNextBtn = document.querySelector('#calendar-dropdown-desktop .fa-chevron-right').closest('button');
        const desktopTodayBtn = document.querySelector('#calendar-dropdown-desktop button:last-child');

        // Previous month function
        function goToPreviousMonth() {
            currentDate.setMonth(currentDate.getMonth() - 1);
            updateCalendarDisplay();
        }

        // Next month function
        function goToNextMonth() {
            currentDate.setMonth(currentDate.getMonth() + 1);
            updateCalendarDisplay();
        }

        // Today function
        function goToToday() {
            currentDate = new Date();
            updateCalendarDisplay();
        }

        // Add event listeners for mobile
        if (mobilePrevBtn) mobilePrevBtn.addEventListener('click', goToPreviousMonth);
        if (mobileNextBtn) mobileNextBtn.addEventListener('click', goToNextMonth);
        if (mobileTodayBtn) mobileTodayBtn.addEventListener('click', goToToday);

        // Add event listeners for desktop
        if (desktopPrevBtn) desktopPrevBtn.addEventListener('click', goToPreviousMonth);
        if (desktopNextBtn) desktopNextBtn.addEventListener('click', goToNextMonth);
        if (desktopTodayBtn) desktopTodayBtn.addEventListener('click', goToToday);
    }

    // Initialize calendar
    updateCalendarDisplay();
    setupNavigation();

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            if (calendarDropdownMobile) calendarDropdownMobile.classList.add('hidden');
            if (calendarDropdownDesktop) calendarDropdownDesktop.classList.add('hidden');
        }
    });
});

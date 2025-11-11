// resources/js/Dosen/janjiTemu.js

document.addEventListener('DOMContentLoaded', function() {
    // Dropdown functionality for filter menus
    const sortMenuButton1 = document.getElementById('sort-menu-button-1');
    const sortMenu1 = document.getElementById('sort-menu-1');
    const sortMenuButton2 = document.getElementById('sort-menu-button-2');
    const sortMenu2 = document.getElementById('sort-menu-2');

    // Toggle dropdown menu 1 (Jenis)
    if (sortMenuButton1 && sortMenu1) {
        sortMenuButton1.addEventListener('click', function(e) {
            e.stopPropagation();
            sortMenu1.classList.toggle('hidden');
            // Close other dropdown
            sortMenu2.classList.add('hidden');
        });
    }

    // Toggle dropdown menu 2 (Status)
    if (sortMenuButton2 && sortMenu2) {
        sortMenuButton2.addEventListener('click', function(e) {
            e.stopPropagation();
            sortMenu2.classList.toggle('hidden');
            // Close other dropdown
            sortMenu1.classList.add('hidden');
        });
    }

    // Close dropdowns when clicking outside
    document.addEventListener('click', function() {
        if (sortMenu1) sortMenu1.classList.add('hidden');
        if (sortMenu2) sortMenu2.classList.add('hidden');
    });

    // Prevent dropdowns from closing when clicking inside them
    if (sortMenu1) {
        sortMenu1.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    }

    if (sortMenu2) {
        sortMenu2.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    }

    // Handle sort option selection
    const sortOptions = document.querySelectorAll('.sort-option');
    sortOptions.forEach(option => {
        option.addEventListener('click', function() {
            const sortValue = this.getAttribute('data-sort');
            const buttonText = this.textContent.trim();

            // Find which dropdown this option belongs to
            const dropdownMenu = this.closest('[id^="sort-menu"]');
            if (dropdownMenu) {
                const menuId = dropdownMenu.id;
                const menuButton = document.getElementById(menuId + '-button');

                if (menuButton) {
                    const spanElement = menuButton.querySelector('span');
                    if (spanElement) {
                        spanElement.textContent = buttonText;
                    }
                }
            }

            // Close the dropdown
            if (dropdownMenu) {
                dropdownMenu.classList.add('hidden');
            }

            // Here you can add functionality to actually sort/filter the cards
            // based on the selected sortValue
            console.log('Selected sort:', sortValue);

            // You can implement the actual filtering logic here
            filterCards(sortValue);
        });
    });

    // Search functionality
    const searchInput = document.querySelector('input[type="text"]');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            filterCardsBySearch(searchTerm);
        });
    }

    // Period filter buttons
    const periodButtons = document.querySelectorAll('.flex.justify-start.items-center.mb-4 button');
    periodButtons.forEach(button => {
        button.addEventListener('click', function() {
            const period = this.textContent.trim();

            // Remove active state from all buttons
            periodButtons.forEach(btn => {
                btn.classList.remove('bg-[#5CBDB9]', 'text-white');
                btn.classList.add('bg-[white]', 'text-[#0A0A0A]');
            });

            // Add active state to clicked button
            this.classList.remove('bg-[white]', 'text-[#0A0A0A]');
            this.classList.add('bg-[#5CBDB9]', 'text-white');

            console.log('Selected period:', period);
            filterCardsByPeriod(period);
        });
    });

    // Card click functionality
    const cards = document.querySelectorAll('.bg-white.border-l-4.rounded-2xl');
    cards.forEach(card => {
        card.addEventListener('click', function(e) {
            // Don't trigger if clicking on buttons inside the card
            if (!e.target.closest('button')) {
                const detailButton = this.querySelector('button[onclick*="progres"], button[onclick*="jadwalUlang"]');
                if (detailButton) {
                    detailButton.click();
                }
            }
        });
    });

    // Filter functions
    function filterCards(sortValue) {
        const cards = document.querySelectorAll('.bg-white.border-l-4.rounded-2xl');

        cards.forEach(card => {
            let shouldShow = true;

            // Filter logic based on sortValue
            if (sortValue === 'terlama') {
                // Filter for Tanda Tangan
                const hasTandaTangan = card.querySelector('span:contains("Tanda Tangan")');
                shouldShow = !!hasTandaTangan;
            } else if (sortValue === 'prioritas') {
                // Filter for Janji Temu
                const hasJanjiTemu = card.querySelector('span:contains("Janji Temu")');
                shouldShow = !!hasJanjiTemu;
            } else if (sortValue === 'disetujui') {
                // Filter for Disetujui status
                const hasDisetujui = card.querySelector('span.bg-\\[#DCFCE7\\]');
                shouldShow = !!hasDisetujui;
            } else if (sortValue === 'revisi') {
                // Filter for Revisi status
                const hasRevisi = card.querySelector('span.bg-\\[#FFEDD4\\]');
                shouldShow = !!hasRevisi;
            } else if (sortValue === 'dijadwal-ulang') {
                // Filter for Dijadwal Ulang status
                const hasDijadwalUlang = card.querySelector('span.bg-\\[#DBEAFE\\]');
                shouldShow = !!hasDijadwalUlang;
            }
            // For 'terbaru' and 'semua', show all cards

            card.style.display = shouldShow ? 'flex' : 'none';
        });
    }

    function filterCardsBySearch(searchTerm) {
        const cards = document.querySelectorAll('.bg-white.border-l-4.rounded-2xl');

        if (searchTerm === '') {
            // Show all cards if search is empty
            cards.forEach(card => {
                card.style.display = 'flex';
            });
            return;
        }

        cards.forEach(card => {
            const cardText = card.textContent.toLowerCase();
            const shouldShow = cardText.includes(searchTerm);
            card.style.display = shouldShow ? 'flex' : 'none';
        });
    }

    function filterCardsByPeriod(period) {
        const cards = document.querySelectorAll('.bg-white.border-l-4.rounded-2xl');

        // This is a simplified implementation - you would need to implement
        // actual date filtering based on your data structure
        cards.forEach(card => {
            let shouldShow = true;

            // You would implement actual date filtering logic here
            // For now, this just shows all cards
            if (period === 'Hari Ini') {
                // Filter for today's items
                // Implementation depends on your date data
            } else if (period === 'Minggu Ini') {
                // Filter for this week's items
                // Implementation depends on your date data
            } else if (period === 'Bulan Ini') {
                // Filter for this month's items
                // Implementation depends on your date data
            }
            // For 'Semua', show all cards

            card.style.display = shouldShow ? 'flex' : 'none';
        });
    }

    // Add contains selector for older browsers
    if (!Element.prototype.matches) {
        Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;
    }

    if (!Element.prototype.closest) {
        Element.prototype.closest = function(s) {
            var el = this;
            if (!document.documentElement.contains(el)) return null;
            do {
                if (el.matches(s)) return el;
                el = el.parentElement || el.parentNode;
            } while (el !== null && el.nodeType === 1);
            return null;
        };
    }
});

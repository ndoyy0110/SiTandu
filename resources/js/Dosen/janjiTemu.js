// resources/js/janjiTemu.js
console.log(' janjiTemu.js loaded');

document.addEventListener('DOMContentLoaded', function() {
    console.log(' Initializing janji temu modal...');
    initializeJanjiTemuModal();
});

function initializeJanjiTemuModal() {
    const approveButtons = document.querySelectorAll('.btn-setujui-janjiTemu');
    const approveModal = document.getElementById('approveModaljanjiTemu');

    console.log('Janji Temu buttons found:', approveButtons.length);
    console.log('Janji Temu modal found:', !!approveModal);

    if (!approveModal || approveButtons.length === 0) {
        console.log(' Modal atau tombol tidak ditemukan');
        return;
    }

    approveButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            console.log(' Tombol Setujui Janji Temu diklik!');
            approveModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });
    });

    setupJanjiTemuModalFunctionality();
}

function setupJanjiTemuModalFunctionality() {
    const approveModal = document.getElementById('approveModaljanjiTemu');
    const cancelApprove = document.getElementById('cancelApproveJanjiTemu');
    const submitApprove = document.getElementById('submitApproveJanjiTemu');
    const ruanganDropdownButton = document.getElementById('ruangan-dropdown-button');
    const ruanganDropdownMenu = document.getElementById('ruangan-dropdown-menu');
    const ruanganOptions = document.querySelectorAll('.ruangan-option');
    const selectedRuanganText = document.getElementById('selected-ruangan-text');
    const alternatifInput = document.getElementById('alternatif-input');
    const customRuanganInput = document.getElementById('custom-ruangan-input');
    const ruanganTerpilih = document.getElementById('ruanganTerpilih');
    const namaRuangan = document.getElementById('namaRuangan');

    let selectedRuangan = '';

    // Toggle dropdown ruangan
    if (ruanganDropdownButton && ruanganDropdownMenu) {
        ruanganDropdownButton.addEventListener('click', function(e) {
            e.stopPropagation();
            ruanganDropdownMenu.classList.toggle('hidden');
        });

        // Close dropdown
        document.addEventListener('click', function(event) {
            if (!ruanganDropdownButton.contains(event.target) && !ruanganDropdownMenu.contains(event.target)) {
                ruanganDropdownMenu.classList.add('hidden');
            }
        });
    }

    // Event listener opsi ruangan
    ruanganOptions.forEach(option => {
        option.addEventListener('click', function() {
            const ruanganValue = this.getAttribute('data-ruangan');
            const ruanganText = this.textContent.trim();

            console.log('🏢 Ruangan dipilih:', ruanganValue);

            // Update tombol dropdown
            selectedRuanganText.textContent = ruanganText;

            // Sembunyikan dropdown
            ruanganDropdownMenu.classList.add('hidden');

            // alternatif
            if (ruanganValue === 'alternatif') {
                alternatifInput.classList.remove('hidden');
                ruanganTerpilih.classList.add('hidden');
                selectedRuangan = '';
            } else {
                alternatifInput.classList.add('hidden');
                selectedRuangan = ruanganValue;
                namaRuangan.textContent = ruanganValue;
                ruanganTerpilih.classList.remove('hidden');
            }
        });
    });

    // Event listener input custom ruangan
    if (customRuanganInput) {
        customRuanganInput.addEventListener('input', function() {
            selectedRuangan = this.value.trim();
            if (selectedRuangan) {
                namaRuangan.textContent = selectedRuangan;
                ruanganTerpilih.classList.remove('hidden');
            } else {
                ruanganTerpilih.classList.add('hidden');
            }
        });
    }

    // Event listener ruangan terpilih
    if (ruanganTerpilih) {
        ruanganTerpilih.addEventListener('click', function() {
            console.log(' Mengubah pilihan ruangan');
            this.classList.add('hidden');
            resetRuanganSelection();
        });
    }

    function resetRuanganSelection() {
        selectedRuanganText.textContent = 'Pilih ruangan...';
        alternatifInput.classList.add('hidden');
        if (customRuanganInput) customRuanganInput.value = '';
        selectedRuangan = '';
    }

    function closeModal() {
        console.log(' Closing janji temu modal');
        approveModal.classList.add('hidden');
        document.body.style.overflow = 'auto';
        resetRuanganSelection();

        if (submitApprove) {
            submitApprove.innerHTML = `<img src="/images/send.png" alt="ikonKirim" class="w-[16px] h-[16px]"> Konfirmasi`;
            submitApprove.disabled = false;
        }
    }

    // Event listener tombol batal
    if (cancelApprove) {
        cancelApprove.addEventListener('click', closeModal);
    }

    // Close modal
    if (approveModal) {
        approveModal.addEventListener('click', function(e) {
            if (e.target === approveModal) {
                closeModal();
            }
        });
    }

    // Close modal
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && approveModal && !approveModal.classList.contains('hidden')) {
            closeModal();
        }
    });

    // Submit approval
    if (submitApprove) {
        submitApprove.addEventListener('click', function() {
            console.log('🚀 Tombol konfirmasi janji temu diklik');

            if (!selectedRuangan) {
                alert('Silakan pilih atau masukkan ruangan terlebih dahulu');
                return;
            }

            //loading state
            this.innerHTML = `
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Mengkonfirmasi...
            `;
            this.disabled = true;

            // Simulate API call
            setTimeout(() => {
                alert(`Janji temu berhasil dikonfirmasi! Ruangan: ${selectedRuangan}`);
                closeModal();

                // Reset button
                this.innerHTML = `<img src="/images/send.png" alt="ikonKirim" class="w-[16px] h-[16px]"> Konfirmasi`;
                this.disabled = false;
            }, 2000);
        });
    }

    console.log(' Janji temu modal functionality setup completed');
}

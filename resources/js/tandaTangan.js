// resources/js/tandaTangan.js
console.log('✅ tandaTangan.js loaded');

document.addEventListener('DOMContentLoaded', function() {
    console.log('🔄 DOM Content Loaded');

    // Initialize dropdown
    initializeDropdown();

    // Initialize approve modal untuk tanda tangan
    initializeApproveModalttd();

    // Initialize revisi modal untuk tanda tangan
    initializeRevisiModalttd();
});

function initializeDropdown() {
    console.log('🔄 Initializing dropdown...');

    const sortMenuButton = document.getElementById('sort-menu-button');
    const sortMenu = document.getElementById('sort-menu');
    const sortOptions = document.querySelectorAll('.sort-option');

    console.log('Dropdown Button found:', !!sortMenuButton);
    console.log('Dropdown Menu found:', !!sortMenu);
    console.log('Sort options found:', sortOptions.length);

    if (sortMenuButton && sortMenu) {
        sortMenuButton.addEventListener('click', function(e) {
            e.stopPropagation();
            console.log('🎯 Dropdown button clicked');
            sortMenu.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!sortMenuButton.contains(event.target) && !sortMenu.contains(event.target)) {
                sortMenu.classList.add('hidden');
            }
        });

        sortOptions.forEach(option => {
            option.addEventListener('click', function() {
                const sortType = this.getAttribute('data-sort');
                const buttonText = this.textContent.trim();
                console.log(`Sorting by: ${sortType}`);

                sortMenuButton.innerHTML = `${buttonText} <img src="/images/panah.png" alt="dropdown Icon" class="w-[18px] h-[16px]">`;
                applySorting(sortType);
                sortMenu.classList.add('hidden');
            });
        });
    }
}

function initializeApproveModalttd() {
    console.log('🔄 Initializing approve modal untuk TTD...');

    const approveButtons = document.querySelectorAll('.btn-setujui-ttd');
    const approveModalttd = document.getElementById('approveModalttd');

    console.log('Approve TTD buttons found:', approveButtons.length);
    console.log('Approve TTD modal found:', !!approveModalttd);

    if (!approveModalttd || approveButtons.length === 0) {
        console.log('❌ Modal TTD atau tombol tidak ditemukan');
        return;
    }

    approveButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            console.log('🎯 Tombol Setujui TTD diklik!');
            approveModalttd.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });
    });

    setupApproveModalFunctionality();
}

function setupApproveModalFunctionality() {
    const approveModalttd = document.getElementById('approveModalttd');
    const cancelApprove = document.getElementById('cancelApprove');
    const dropzone = document.getElementById('dropzone');
    const fileInput = document.getElementById('fileInput');
    const filePreview = document.getElementById('filePreview');
    const removeFile = document.getElementById('removeFile');
    const submitApprove = document.getElementById('submitApprove');

    console.log('Cancel button found:', !!cancelApprove);
    console.log('Dropzone found:', !!dropzone);
    console.log('Submit button found:', !!submitApprove);

    function closeModal() {
        console.log('🔒 Closing approve modal');
        if (approveModalttd) {
            approveModalttd.classList.add('hidden');
        }
        document.body.style.overflow = 'auto';
        resetFileUpload();

        if (submitApprove) {
            submitApprove.innerHTML = `<img src="/images/send.png" alt="ikonKirim" class="w-[16px] h-[16px]"> Kirim & Setujui`;
            submitApprove.disabled = false;
        }
    }

    // Event listener untuk tombol batal
    if (cancelApprove) {
        cancelApprove.addEventListener('click', closeModal);
        console.log('✅ Cancel button event listener added');
    }

    // Close modal when clicking outside
    if (approveModalttd) {
        approveModalttd.addEventListener('click', function(e) {
            if (e.target === approveModalttd) {
                closeModal();
            }
        });
    }

    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && approveModalttd && !approveModalttd.classList.contains('hidden')) {
            closeModal();
        }
    });

    // File upload functionality
    if (dropzone && fileInput) {
        dropzone.addEventListener('click', () => {
            fileInput.click();
        });

        ['dragover', 'dragleave', 'drop'].forEach(event => {
            dropzone.addEventListener(event, (e) => {
                e.preventDefault();
                if (event === 'dragover') {
                    dropzone.classList.add('border-[#5CBDB9]', 'bg-blue-50');
                } else if (event === 'dragleave' || event === 'drop') {
                    dropzone.classList.remove('border-[#5CBDB9]', 'bg-blue-50');
                }

                if (event === 'drop' && e.dataTransfer.files.length) {
                    handleFileSelect(e.dataTransfer.files[0]);
                }
            });
        });

        fileInput.addEventListener('change', (e) => {
            if (e.target.files.length) {
                handleFileSelect(e.target.files[0]);
            }
        });
    }

    function handleFileSelect(file) {
        const validTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        const maxSize = 10 * 1024 * 1024;

        if (!validTypes.includes(file.type)) {
            alert('Hanya file PDF, DOC, atau DOCX yang diizinkan');
            return;
        }

        if (file.size > maxSize) {
            alert('File terlalu besar. Maksimal 10MB');
            return;
        }

        const fileNameElement = document.getElementById('fileName');
        if (fileNameElement) fileNameElement.textContent = file.name;
        if (filePreview) filePreview.classList.remove('hidden');
        if (dropzone) dropzone.classList.add('hidden');
    }

    if (removeFile) {
        removeFile.addEventListener('click', resetFileUpload);
    }

    function resetFileUpload() {
        if (fileInput) fileInput.value = '';
        if (filePreview) filePreview.classList.add('hidden');
        if (dropzone) dropzone.classList.remove('hidden');
    }

    // Submit approval
    if (submitApprove) {
        submitApprove.addEventListener('click', function() {
            if (!fileInput || fileInput.files.length === 0) {
                alert('Silakan upload dokumen yang sudah ditandatangani terlebih dahulu');
                return;
            }

            this.innerHTML = `<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Mengirim...`;
            this.disabled = true;

            setTimeout(() => {
                alert('Dokumen berhasil disetujui dan dikirim!');
                closeModal();
                this.innerHTML = `<img src="/images/send.png" alt="ikonKirim" class="w-[16px] h-[16px]"> Kirim & Setujui`;
                this.disabled = false;
            }, 2000);
        });
    }

    console.log('✅ Approve modal functionality setup completed');
}

function initializeRevisiModalttd() {
    console.log('🔄 Initializing revisi modal untuk TTD...');

    // PERBAIKAN: Gunakan class btn-revisi (dengan dash)
    const revisiButtons = document.querySelectorAll('.btn-revisi');
    const revisiModalttd = document.getElementById('revisiModalttd');

    console.log('Revisi TTD buttons found:', revisiButtons.length);
    console.log('Revisi TTD modal found:', !!revisiModalttd);

    if (!revisiModalttd || revisiButtons.length === 0) {
        console.log('❌ Modal revisi TTD atau tombol tidak ditemukan');
        return;
    }

    revisiButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            console.log('🎯 Tombol Revisi TTD diklik!');
            revisiModalttd.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });
    });

    setupRevisiModalFunctionality();
}

function setupRevisiModalFunctionality() {
    const revisiModalttd = document.getElementById('revisiModalttd');
    const cancelRevisi = document.getElementById('cancelRevisi');
    const submitRevisi = document.getElementById('submitRevisi');
    const alasanRevisiInput = document.getElementById('alasan-revisi-input');

    console.log('Cancel revisi button found:', !!cancelRevisi);
    console.log('Submit revisi button found:', !!submitRevisi);
    console.log('Alasan revisi input found:', !!alasanRevisiInput);

    function closeModal() {
        console.log('🔒 Closing revisi modal');
        if (revisiModalttd) {
            revisiModalttd.classList.add('hidden');
        }
        document.body.style.overflow = 'auto';
        resetForm();

        if (submitRevisi) {
            submitRevisi.innerHTML = `<img src="/images/send.png" alt="ikonKirim" class="w-[16px] h-[16px]"> Kirim Revisi`;
            submitRevisi.disabled = false;
        }
    }

    function resetForm() {
        if (alasanRevisiInput) {
            alasanRevisiInput.value = '';
        }
    }

    if (cancelRevisi) {
        cancelRevisi.addEventListener('click', closeModal);
    }

    if (revisiModalttd) {
        revisiModalttd.addEventListener('click', function(e) {
            if (e.target === revisiModalttd) {
                closeModal();
            }
        });
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && revisiModalttd && !revisiModalttd.classList.contains('hidden')) {
            closeModal();
        }
    });

    if (submitRevisi) {
        submitRevisi.addEventListener('click', function() {
            const alasanRevisi = alasanRevisiInput ? alasanRevisiInput.value.trim() : '';

            if (!alasanRevisi) {
                alert('Silakan ketikkan alasan revisi terlebih dahulu');
                return;
            }

            this.innerHTML = `<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Mengirim...`;
            this.disabled = true;

            setTimeout(() => {
                alert(`Revisi berhasil dikirim!\nAlasan: ${alasanRevisi}`);
                closeModal();
                this.innerHTML = `<img src="/images/send.png" alt="ikonKirim" class="w-[16px] h-[16px]"> Kirim Revisi`;
                this.disabled = false;
            }, 2000);
        });
    }

    console.log('✅ Revisi modal functionality setup completed');
}

function applySorting(sortType) {
    console.log(`Applying sort: ${sortType}`);

    switch(sortType) {
        case 'terbaru':
            alert('Mengurutkan dari TERBARU');
            break;
        case 'terlama':
            alert('Mengurutkan dari TERLAMA');
            break;
        case 'prioritas':
            alert('Mengurutkan berdasarkan PRIORITAS TINGGI');
            break;
    }
}

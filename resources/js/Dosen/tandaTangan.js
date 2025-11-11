// resources/js/Dosen/tandaTangan.js
console.log('tandaTangan.js loaded');

document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM Content Loaded');

    // Initialize dropdown
    initializeDropdown();

    // Initialize approve modal tanda tangan
    initializeApproveModalttd();

    // Initialize revisi modal tanda tangan
    initializeRevisiModalttd();

    // Initialize tolak modal tanda tangan
    initializeTolakModalttd();
});

function initializeDropdown() {
    console.log('Initializing dropdown...');

    const sortMenuButton = document.getElementById('sort-menu-button');
    const sortMenu = document.getElementById('sort-menu');
    const sortOptions = document.querySelectorAll('.sort-option');

    console.log('Dropdown Button found:', !!sortMenuButton);
    console.log('Dropdown Menu found:', !!sortMenu);
    console.log('Sort options found:', sortOptions.length);

    if (sortMenuButton && sortMenu) {
        sortMenuButton.addEventListener('click', function(e) {
            e.stopPropagation();
            console.log('Dropdown button clicked');
            sortMenu.classList.toggle('hidden');
        });

        // Close dropdown
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
    console.log('Initializing approve modal TTD...');

    const approveButtons = document.querySelectorAll('.btn-setujui-ttd');
    const approveModalttd = document.getElementById('approveModalttd');

    console.log('Approve TTD buttons found:', approveButtons.length);
    console.log('Approve TTD modal found:', !!approveModalttd);

    if (!approveModalttd || approveButtons.length === 0) {
        console.log('Modal TTD atau tombol tidak ditemukan');
        return;
    }

    approveButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            console.log('Tombol Setujui TTD diklik!');
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
        console.log('Closing approve modal');
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

    // Event listener tombol batal
    if (cancelApprove) {
        cancelApprove.addEventListener('click', closeModal);
        console.log('Cancel button event listener added');
    }

    // Close modal when clicking outside
    if (approveModalttd) {
        approveModalttd.addEventListener('click', function(e) {
            if (e.target === approveModalttd) {
                closeModal();
            }
        });
    }

    // Close modal with ESC
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
                    handleFileSelect(e.dataTransfer.files[0], fileInput, filePreview, dropzone);
                }
            });
        });

        fileInput.addEventListener('change', (e) => {
            if (e.target.files.length) {
                handleFileSelect(e.target.files[0], fileInput, filePreview, dropzone);
            }
        });
    }

    function handleFileSelect(file, fileInput, filePreview, dropzone) {
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

                // Remove card from UI
                const activeCard = document.querySelector('.btn-setujui-ttd')?.closest('.border');
                if (activeCard) {
                    activeCard.style.opacity = '0';
                    activeCard.style.transition = 'opacity 0.3s ease';
                    setTimeout(() => {
                        activeCard.remove();
                        checkEmptyState();
                    }, 300);
                }

                closeModal();
                this.innerHTML = `<img src="/images/send.png" alt="ikonKirim" class="w-[16px] h-[16px]"> Kirim & Setujui`;
                this.disabled = false;
            }, 2000);
        });
    }

    console.log('Approve modal functionality setup completed');
}

function initializeRevisiModalttd() {
    console.log('Initializing revisi modal TTD...');

    const revisiButtons = document.querySelectorAll('.btn-revisi');
    const revisiModalttd = document.getElementById('revisiModalttd');

    console.log('Revisi TTD buttons found:', revisiButtons.length);
    console.log('Revisi TTD modal found:', !!revisiModalttd);

    if (!revisiModalttd || revisiButtons.length === 0) {
        console.log('Modal revisi TTD atau tombol tidak ditemukan');
        return;
    }

    revisiButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            console.log('Tombol Revisi TTD diklik!');
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

    // File upload elements for revisi modal
    const dropzoneRevisi = revisiModalttd.querySelector('#dropzone');
    const fileInputRevisi = revisiModalttd.querySelector('#fileInput');
    const filePreviewRevisi = revisiModalttd.querySelector('#filePreview');
    const removeFileRevisi = revisiModalttd.querySelector('#removeFile');
    const fileNameRevisi = revisiModalttd.querySelector('#fileName');

    console.log('Cancel revisi button found:', !!cancelRevisi);
    console.log('Submit revisi button found:', !!submitRevisi);
    console.log('Alasan revisi input found:', !!alasanRevisiInput);
    console.log('Dropzone revisi found:', !!dropzoneRevisi);
    console.log('File input revisi found:', !!fileInputRevisi);

    function closeModal() {
        console.log('Closing revisi modal');
        if (revisiModalttd) {
            revisiModalttd.classList.add('hidden');
        }
        document.body.style.overflow = 'auto';
        resetForm();
        resetFileUploadRevisi();

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

    function resetFileUploadRevisi() {
        if (fileInputRevisi) fileInputRevisi.value = '';
        if (filePreviewRevisi) filePreviewRevisi.classList.add('hidden');
        if (dropzoneRevisi) dropzoneRevisi.classList.remove('hidden');
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

    // File upload functionality for revisi modal
    if (dropzoneRevisi && fileInputRevisi) {
        dropzoneRevisi.addEventListener('click', () => {
            fileInputRevisi.click();
        });

        ['dragover', 'dragleave', 'drop'].forEach(event => {
            dropzoneRevisi.addEventListener(event, (e) => {
                e.preventDefault();
                if (event === 'dragover') {
                    dropzoneRevisi.classList.add('border-[#5CBDB9]', 'bg-blue-50');
                } else if (event === 'dragleave' || event === 'drop') {
                    dropzoneRevisi.classList.remove('border-[#5CBDB9]', 'bg-blue-50');
                }

                if (event === 'drop' && e.dataTransfer.files.length) {
                    handleFileSelectRevisi(e.dataTransfer.files[0]);
                }
            });
        });

        fileInputRevisi.addEventListener('change', (e) => {
            if (e.target.files.length) {
                handleFileSelectRevisi(e.target.files[0]);
            }
        });
    }

    function handleFileSelectRevisi(file) {
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

        if (fileNameRevisi) fileNameRevisi.textContent = file.name;
        if (filePreviewRevisi) filePreviewRevisi.classList.remove('hidden');
        if (dropzoneRevisi) dropzoneRevisi.classList.add('hidden');
    }

    if (removeFileRevisi) {
        removeFileRevisi.addEventListener('click', resetFileUploadRevisi);
    }

    if (submitRevisi) {
        submitRevisi.addEventListener('click', function() {
            const alasanRevisi = alasanRevisiInput ? alasanRevisiInput.value.trim() : '';

            if (!alasanRevisi) {
                alert('Silakan ketikkan alasan revisi terlebih dahulu');
                return;
            }

            // Check if file is uploaded (optional for revisi)
            const hasFile = fileInputRevisi && fileInputRevisi.files.length > 0;

            if (!hasFile) {
                if (!confirm('Anda belum mengupload file revisi. Apakah ingin melanjutkan tanpa file?')) {
                    return;
                }
            }

            this.innerHTML = `<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Mengirim...`;
            this.disabled = true;

            setTimeout(() => {
                const fileInfo = hasFile ? `\nFile: ${fileInputRevisi.files[0].name}` : '\nTidak ada file yang diupload';
                alert(`Revisi berhasil dikirim!\nAlasan: ${alasanRevisi}${fileInfo}`);

                // Remove card from UI
                const activeCard = document.querySelector('.btn-revisi')?.closest('.border');
                if (activeCard) {
                    activeCard.style.opacity = '0';
                    activeCard.style.transition = 'opacity 0.3s ease';
                    setTimeout(() => {
                        activeCard.remove();
                        checkEmptyState();
                    }, 300);
                }

                closeModal();
                this.innerHTML = `<img src="/images/send.png" alt="ikonKirim" class="w-[16px] h-[16px]"> Kirim Revisi`;
                this.disabled = false;
            }, 2000);
        });
    }

    console.log('Revisi modal functionality setup completed');
}

function initializeTolakModalttd() {
    console.log('Initializing tolak modal TTD...');

    const tolakButtons = document.querySelectorAll('.btn-tolak-ttd');
    const tolakModalttd = document.getElementById('tolakModalttd');

    console.log('Tolak TTD buttons found:', tolakButtons.length);
    console.log('Tolak TTD modal found:', !!tolakModalttd);

    if (!tolakModalttd || tolakButtons.length === 0) {
        console.log('Modal tolak TTD atau tombol tidak ditemukan');
        return;
    }

    tolakButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            console.log('Tombol Tolak TTD diklik!');
            tolakModalttd.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });
    });

    setupTolakModalFunctionality();
}

function setupTolakModalFunctionality() {
    const tolakModalttd = document.getElementById('tolakModalttd');
    const cancelTolak = document.getElementById('cancelTolak');
    const submitTolak = document.getElementById('submitTolak');
    const alasanTolakInput = document.getElementById('alasan-tolak-input');

    console.log('Cancel tolak button found:', !!cancelTolak);
    console.log('Submit tolak button found:', !!submitTolak);
    console.log('Alasan tolak input found:', !!alasanTolakInput);

    function closeModal() {
        console.log('Closing tolak modal');
        if (tolakModalttd) {
            tolakModalttd.classList.add('hidden');
        }
        document.body.style.overflow = 'auto';
        resetForm();

        if (submitTolak) {
            submitTolak.innerHTML = `<img src="/images/tolak.png" alt="ikonTolak" class="w-[16px] h-[16px]"> Tolak Permintaan`;
            submitTolak.disabled = false;
        }
    }

    function resetForm() {
        if (alasanTolakInput) {
            alasanTolakInput.value = '';
        }
    }

    if (cancelTolak) {
        cancelTolak.addEventListener('click', closeModal);
    }

    if (tolakModalttd) {
        tolakModalttd.addEventListener('click', function(e) {
            if (e.target === tolakModalttd) {
                closeModal();
            }
        });
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && tolakModalttd && !tolakModalttd.classList.contains('hidden')) {
            closeModal();
        }
    });

    if (submitTolak) {
        submitTolak.addEventListener('click', function() {
            const alasanTolak = alasanTolakInput ? alasanTolakInput.value.trim() : '';

            if (!alasanTolak) {
                alert('Silakan ketikkan alasan penolakan terlebih dahulu');
                return;
            }

            this.innerHTML = `<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Menolak...`;
            this.disabled = true;

            setTimeout(() => {
                alert(`Permintaan berhasil ditolak!\nAlasan: ${alasanTolak}`);

                // Remove card from UI
                const activeCard = document.querySelector('.btn-tolak-ttd')?.closest('.border');
                if (activeCard) {
                    activeCard.style.opacity = '0';
                    activeCard.style.transition = 'opacity 0.3s ease';
                    setTimeout(() => {
                        activeCard.remove();
                        checkEmptyState();
                    }, 300);
                }

                closeModal();
                this.innerHTML = `<img src="/images/tolak.png" alt="ikonTolak" class="w-[16px] h-[16px]"> Tolak Permintaan`;
                this.disabled = false;
            }, 2000);
        });
    }

    console.log('Tolak modal functionality setup completed');
}

function checkEmptyState() {
    const cards = document.querySelectorAll('.grid.grid-cols-1.md\\:grid-cols-2.lg\\:grid-cols-4.gap-4 .border');
    console.log('Cards remaining:', cards.length);

    if (cards.length === 0) {
        const gridContainer = document.querySelector('.grid.grid-cols-1.md\\:grid-cols-2.lg\\:grid-cols-4.gap-4');
        if (gridContainer && !gridContainer.querySelector('.empty-state')) {
            const emptyState = document.createElement('div');
            emptyState.className = 'empty-state col-span-4 text-center py-8';
            emptyState.innerHTML = `
                <div class="text-gray-400 mb-4">
                    <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <p class="text-gray-500 text-lg">Tidak ada permintaan tanda tangan</p>
                <p class="text-gray-400 text-sm">Semua permintaan tanda tangan telah diproses</p>
            `;
            gridContainer.appendChild(emptyState);
        }
    }
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

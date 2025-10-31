    const fileInput = document.getElementById('fileInput');
    const dropZone = document.querySelector('.border-dashed');

    // Handle file drop
    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.classList.add('border-[#5CBDB9]', 'bg-[#F0F9F8]');
    });

    dropZone.addEventListener('dragleave', () => {
        dropZone.classList.remove('border-[#5CBDB9]', 'bg-[#F0F9F8]');
    });

    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropZone.classList.remove('border-[#5CBDB9]', 'bg-[#F0F9F8]');
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            fileInput.files = files;
            // You can add file validation here
            alert(`File "${files[0].name}" berhasil diunggah`);
        }
    });

    // Handle click on drop zone
    dropZone.addEventListener('click', () => {
        fileInput.click();
    });

    // Handle file selection
    fileInput.addEventListener('change', (e) => {
        if (e.target.files.length > 0) {
            alert(`File "${e.target.files[0].name}" berhasil dipilih`);
        }
    });

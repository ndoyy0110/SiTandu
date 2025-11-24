document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".pilih-waktu");
    const dropdownContainer = document.getElementById("dropdown-container");
    const daftarJadwal = document.getElementById("daftar-jadwal");

    let activeButton = null;

    buttons.forEach((button) => {
        button.addEventListener("click", (e) => {
            e.stopPropagation();

            // Jika tombol yang sama diklik lagi → tutup
            if (activeButton === button && !dropdownContainer.classList.contains("hidden")) {
                dropdownContainer.classList.add("hidden");
                activeButton = null;
                return;
            }

            // Tampilkan dropdown di bawah semua jadwal
            daftarJadwal.after(dropdownContainer);
            dropdownContainer.classList.remove("hidden");

            activeButton = button;
        });
    });

    // Klik di luar area → sembunyikan dropdown
    document.addEventListener("click", (e) => {
        if (
            !dropdownContainer.contains(e.target) &&
            !e.target.classList.contains("pilih-waktu")
        ) {
            dropdownContainer.classList.add("hidden");
            activeButton = null;
        }
    });

    // Mencegah klik di dalam dropdown menutup otomatis
    dropdownContainer.addEventListener("click", (e) => e.stopPropagation());
});

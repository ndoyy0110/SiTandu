// Toggle password visibility
document.addEventListener('DOMContentLoaded', function () {
    const togglePassword = document.querySelector('.toggle-password');
    const password = document.getElementById('password');

    // toggle password
    if (togglePassword && password) {
        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            const icon = this.querySelector('i');
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });
    }

    // Custom Dropdown
    const roleDropdownTrigger = document.getElementById('role-dropdown-trigger');
    const roleDropdownMenu = document.getElementById('role-dropdown-menu');
    const roleSelectedText = document.getElementById('role-selected-text');
    const roleHiddenInput = document.getElementById('role');
    const roleOptions = document.querySelectorAll('.role-option');
    const namaField = document.getElementById('nama-field');
    const nimField = document.getElementById('nim-field');
    const nipField = document.getElementById('nip-field');

    let isDropdownOpen = false;

    // Toggle dropdown
    if (roleDropdownTrigger && roleDropdownMenu) {
        roleDropdownTrigger.addEventListener('click', function (e) {
            e.stopPropagation();
            isDropdownOpen = !isDropdownOpen;

            if (isDropdownOpen) {
                roleDropdownMenu.classList.remove('opacity-0', 'invisible', '-translate-y-2');
                roleDropdownMenu.classList.add('opacity-100', 'visible', 'translate-y-0');
                roleDropdownTrigger.querySelector('i').classList.add('rotate-180');
            } else {
                roleDropdownMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                roleDropdownMenu.classList.add('opacity-0', 'invisible', '-translate-y-2');
                roleDropdownTrigger.querySelector('i').classList.remove('rotate-180');
            }
        });

        // Handle option selection
        roleOptions.forEach(option => {
            option.addEventListener('click', function () {
                const value = this.getAttribute('data-value');
                const text = this.textContent;

                roleHiddenInput.value = value;
                roleSelectedText.textContent = text;
                roleSelectedText.classList.remove('text-gray-400');
                roleSelectedText.classList.add('text-[#4D4D4D]');

                // Close dropdown
                isDropdownOpen = false;
                roleDropdownMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                roleDropdownMenu.classList.add('opacity-0', 'invisible', '-translate-y-2');
                roleDropdownTrigger.querySelector('i').classList.remove('rotate-180');

                // Show/hide
                if (value === 'mahasiswa') {
                    namaField.classList.remove('hidden');
                    nimField.classList.remove('hidden');
                    nipField.classList.add('hidden');
                } else if (value === 'dosen') {
                    namaField.classList.add('hidden');
                    nimField.classList.add('hidden');
                    nipField.classList.remove('hidden');
                } else {
                    namaField.classList.add('hidden');
                    nimField.classList.add('hidden');
                    nipField.classList.add('hidden');
                }
            });
        });

        // nutup dropdown
        document.addEventListener('click', function () {
            if (isDropdownOpen) {
                isDropdownOpen = false;
                roleDropdownMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                roleDropdownMenu.classList.add('opacity-0', 'invisible', '-translate-y-2');
                roleDropdownTrigger.querySelector('i').classList.remove('rotate-180');
            }
        });
        roleDropdownMenu.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    }
});

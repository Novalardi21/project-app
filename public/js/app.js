import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.querySelector('[data-password-wrapper]');
    if (!wrapper) return;

    const input = wrapper.querySelector('[data-password-input]');
    const toggle = wrapper.querySelector('[data-toggle-password]');
    const eyeOpen = wrapper.querySelector('[data-eye-open]');
    const eyeClosed = wrapper.querySelector('[data-eye-closed]');

    if (!input || !toggle) return;

    toggle.addEventListener('click', () => {
        const isPassword = input.type === 'password';
        input.type = isPassword ? 'text' : 'password';

        // ganti icon
        eyeOpen.classList.toggle('hidden', !isPassword);
        eyeClosed.classList.toggle('hidden', isPassword);
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('fotoUpload');
    const preview = document.getElementById('fotoPreview');
    const fileNames = document.getElementById('fotoFileNames');
    const errorText = document.getElementById('fotoError');

    let selectedFiles = [];
    const MAX_FILES = 3;

    input.addEventListener('change', function () {
        const newFiles = Array.from(this.files);
        selectedFiles = [...selectedFiles, ...newFiles];

        if (selectedFiles.length > MAX_FILES) {
            selectedFiles = selectedFiles.slice(0, MAX_FILES);
            errorText.textContent = `Maksimal ${MAX_FILES} foto. Hanya 3 foto pertama digunakan.`;
            errorText.classList.remove('hidden');
        } else {
            errorText.classList.add('hidden');
        }

        // === KUNCI: rebuild input.files supaya ikut terkirim ===
        const dt = new DataTransfer();
        selectedFiles.forEach(file => dt.items.add(file));
        input.files = dt.files;   // <--- sekarang form akan kirim semua selectedFiles

        // Render ulang preview
        preview.innerHTML = '';
        fileNames.innerHTML = '';

        selectedFiles.forEach(file => {
            const reader = new FileReader();
            reader.onload = function (e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = "w-full h-24 object-cover rounded-lg border border-gray-200";
                preview.appendChild(img);
                preview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);

            const li = document.createElement('div');
            li.className = 'flex items-center gap-2 text-xs';
            li.innerHTML = `
                <span class="inline-block w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                <span>${file.name}</span>
            `;
            fileNames.appendChild(li);
        });

        // PENTING: jangan lagi di-reset ke ""
        // input.value = "";
    });
});

document.getElementById('proofUpload').addEventListener('change', function (e) {
    const file = e.target.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function (event) {
            const img = document.getElementById('proofPreviewImg');
            img.src = event.target.result;
            document.getElementById('proofPreview').classList.remove('hidden');
        };

        reader.readAsDataURL(file);
    }
});

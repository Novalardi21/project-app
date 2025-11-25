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
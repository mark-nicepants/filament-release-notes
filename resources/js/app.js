import persist from '@alpinejs/persist'

document.addEventListener('alpine:init', () => {
    window.Alpine.plugin(persist);
});

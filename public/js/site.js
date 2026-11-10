const toggle = document.querySelector('.menu-toggle');
const nav = document.querySelector('.main-nav');
function closeMenu() {
    toggle?.setAttribute('aria-expanded', 'false');
    toggle?.setAttribute('aria-label', 'Open navigation');
    nav?.classList.remove('is-open');
}
toggle?.addEventListener('click', () => {
    const open = toggle.getAttribute('aria-expanded') !== 'true';
    toggle.setAttribute('aria-expanded', String(open));
    toggle.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
    nav.classList.toggle('is-open', open);
});
nav?.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMenu));
document.addEventListener('keydown', event => {
    if (event.key === 'Escape' && toggle?.getAttribute('aria-expanded') === 'true') {
        closeMenu();
        toggle.focus();
    }
});
document.addEventListener('click', event => {
    if (!event.target.closest('.navigation')) closeMenu();
});
window.matchMedia('(min-width: 981px)').addEventListener('change', closeMenu);
document.querySelector('#enquiry-form')?.addEventListener('submit', event => {
    event.preventDefault();
    const data = new FormData(event.currentTarget);
    const subject = `Project enquiry: ${data.get('service')}`;
    const body = `Hello Swarajya Construction,\n\n${data.get('message')}\n\nName: ${data.get('name')}\nEmail: ${data.get('email')}\nPhone: ${data.get('phone') || 'Not provided'}\nProject type: ${data.get('service')}\nLocation: ${data.get('location') || 'Not provided'}`;
    window.location.href = `mailto:info@swarajyaconstruction.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    const status = document.querySelector('#form-status');
    status.hidden = false;
    status.textContent = 'Your email draft is ready to open. If your email app did not open, email info@swarajyaconstruction.com directly. Your enquiry has not been sent from this website.';
});

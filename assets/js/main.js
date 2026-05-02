const fadeElements = document.querySelectorAll('.fade-in');

window.addEventListener('scroll', () => {
    fadeElements.forEach(el => {
        const top = el.getBoundingClientRect().top;
        if (top < window.innerHeight - 50) {
            el.classList.add('show');
        }
    });
});

window.addEventListener('scroll', function() {
    const nav = document.querySelector('.navbar');
    nav.classList.toggle('scrolled', window.scrollY > 50);
});


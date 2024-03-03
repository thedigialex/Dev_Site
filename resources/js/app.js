import './bootstrap';
document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('.section');
    const navLinks = document.querySelectorAll('nav ul li a');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const targetId = entry.target.id;
                navLinks.forEach(link => {
                    link.style.fontWeight = 'normal';
                    link.style.color = '#0ea5e9'
                });
                const activeLink = document.querySelector(`a[href="#${targetId}"]`);
                activeLink.style.fontWeight = 'bold';
                activeLink.style.color = '#0369a1';
            }
        });
    }, { threshold: 0.3 });
    sections.forEach(section => {
        observer.observe(section);
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('dot-container');
    for (let i = 0; i < 200; i++) {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        const size = Math.random() * 5 + 2; 
        dot.style.width = dot.style.height = `${size}px`;
        dot.style.top = `${Math.random() * (80 - (size / container.clientHeight * 100))}%`;
        dot.style.left = `${Math.random() * (100 - (size / container.clientWidth * 100))}%`;
        container.appendChild(dot);
    }
});
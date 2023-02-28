let toggle = document.querySelector('.toggle');
let navLinks = document.querySelector('.nav-links');

toggle.addEventListener('click', () => {
    toggle.classList.toggle('open');
    navLinks.classList.toggle('open');
})

document.querySelectorAll(".nav-links").forEach(n => n.
    addEventListener('click', () => {
        toggle.classList.remove('open');
        navLinks.classList.remove('open');
    }))

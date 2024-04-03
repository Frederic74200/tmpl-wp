console.log("tototooto")
// dark mode
const toggleModeButton = document.getElementById('toggle-mode');
const body = document.querySelector('body');
const postCont = document.querySelectorAll('.post-content');
const postAside = document.querySelectorAll('.post-aside');

toggleModeButton.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    toggleModeButton.classList.toggle('dark');

    for (const item of postCont) {
        item.classList.toggle('dark-mode');
    }

    for (const item of postAside) {
        item.classList.toggle('dark-mode');
    }

})

// menu hamburger

const menuToggle = document.getElementById('menu-toggle');
const menu = document.querySelector('nav');

menuToggle.addEventListener('click', () => {

    menu.classList.toggle('active');
})
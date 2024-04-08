


// dark mode
const toggleModeButton = document.getElementById('toggle-mode');
const body = document.querySelector('body');
const postCont = document.querySelectorAll('.post-content');
const postAside = document.querySelectorAll('.post-aside');
// Définir la clé du localStorage
const THEME_DARK_KEY = 'themeDark'



function toggleTheme() {
    const isDarkModeActive = localStorage.getItem(THEME_DARK_KEY) === 'true';

    if (isDarkModeActive) {
        document.body.classList.remove('dark-mode');
        toggleModeButton.classList.remove('dark');
        for (const item of postCont) {
            item.classList.remove('dark-mode');
        }

        for (const item of postAside) {
            item.classList.remove('dark-mode');
        }
        localStorage.setItem(THEME_DARK_KEY, 'false');
    } else {
        document.body.classList.add('dark-mode');
        toggleModeButton.classList.add('dark');
        for (const item of postCont) {
            item.classList.add('dark-mode');
        }

        for (const item of postAside) {
            item.classList.add('dark-mode');
        }
        localStorage.setItem(THEME_DARK_KEY, 'true');
    }
}

const isDarkModeFromStorage = localStorage.getItem(THEME_DARK_KEY) === 'true';
if (isDarkModeFromStorage) {
    document.body.classList.add('dark-mode');
}


// Ecouter l'événement "click" sur le bouton
toggleModeButton.addEventListener('click', toggleTheme);



/*

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
*/
// menu hamburger

const menuToggle = document.getElementById('menu-toggle');
const menu = document.querySelector('nav');

menuToggle.addEventListener('click', () => {

    menu.classList.toggle('active');
})
const menu = document.querySelector('.list-container');
const menuButton = document.querySelector('.burger-button');

// Ocultar-Desplegar menu
function HideShowMenu() {
    if (menu.classList.contains('is-active')) {
        menu.classList.remove('is-active');
    }
    else {
        menu.classList.add('is-active');
    }
}
menuButton.addEventListener('click', HideShowMenu);
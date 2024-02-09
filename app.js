let toggle__menu = document.querySelector('.navbar__toggle-menu');
let navbar__links = document.querySelector('.navbar-menu-modal');

toggle__menu.addEventListener('click', function() {
    toggle__menu.classList.toggle('opened');
    navbar__links.classList.toggle('showed');
});
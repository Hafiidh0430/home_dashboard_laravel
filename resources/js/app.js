import './bootstrap';


const hamburgerMenu = document.querySelector('.hamburger_menu');
const sidebarMenu = document.querySelector('.sidebar_menu');

hamburgerMenu.addEventListener('click', () => {
   hamburgerMenu.classList.toggle('active');
   sidebarMenu.classList.toggle('active');
})
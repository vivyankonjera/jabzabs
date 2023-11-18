require('bootstrap');

const menuBtn = document.querySelector('.menuBtn');
const menuPanel = document.querySelector('.menu-wrapper');
let menuOpen = false; 

menuBtn.addEventListener('click', () => {
    if(!menuOpen){
        menuBtn.classList.add('open');
        menuPanel.classList.add('open');
        document.body.style.position = "fixed";
        menuOpen = true;
    } else{
        menuBtn.classList.remove('open');
        menuPanel.classList.remove('open');
        document.body.style.position = "";
        menuOpen = false;
    }
});
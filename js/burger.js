/*
╔═══════════════════════════════╗ 
              Burger 
╚═══════════════════════════════╝ 
*/
let burger = document.querySelector('.hamburger');
let menu = document.querySelector('#menu');


burger.addEventListener('click', function () {
    this.classList.toggle('is-active'); 
    menu.classList.toggle('active'); 
}, false)
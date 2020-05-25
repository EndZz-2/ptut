/*
╔═══════════════════════════════╗ 
              Burger 
╚═══════════════════════════════╝ 
*/
let burger = document.querySelector('.hamburger');
let menu = document.querySelector('#menu');
let adminmenu = document.querySelector('#admin');
let adminBtn = document.querySelector('.admin-arrow');
let ul = document.querySelector('#ul')


burger.addEventListener('click', function () {
    this.classList.toggle('is-active'); 
    menu.classList.toggle('active'); 
}, false);

if(adminBtn != null){
adminBtn.addEventListener('click', function () {
    adminmenu.classList.toggle('active'); 
    ul.classList.toggle('out'); 
}, false);
}
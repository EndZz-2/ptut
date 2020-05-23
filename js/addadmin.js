var admin = 1;

// afficher le tableau au chargement de la page
document.addEventListener("DOMContentLoaded", function () {
    db(admin);
}); 

// Envoie de nouveau client
btn = document.querySelector('#send');
btn.addEventListener("click", function(){
    sendform(admin);
});

btnConfirm.addEventListener('click', function(){
    toggleClasses();
    modalConfirm(admin);
});


formMerci = document.querySelector('#f-merci');
button = document.querySelector('.button');

let forget = document.querySelector('#f-UEmail');

forget.addEventListener('click', function () {
    let UE = document.querySelector('#UEmail'),
        infos = document.querySelector('#infos');
    if (UE.value != "") {
        post('./include/forget.inc.php', "UEmail=" + UE.value, function () {
            if (this.readyState == 4 && this.status == 200) {
                if (this.response == "👌") {
                    classToggle();
                    UE.value = "";                   
                } else if (this.response == "❌") {
                    infos.classList.add("--active");
                    infos.children[0].classList.add('fa-exclamation-triangle', '--error')
                    UE.value = "";
                    document.querySelector('#usermessage').style.color = "#ff1d4e";
                    document.querySelector('#usermessage').innerText = "Aucun utilisateur trouvé 😢"
                }
                else if (this.response == "👌mail-error") {
                    infos.classList.add("--active");
                    infos.children[0].classList.add('fa-exclamation-triangle', '--error')
                    UE.value = "";
                    document.querySelector('#usermessage').style.color = "#ff1d4e";
                    document.querySelector('#usermessage').innerText = "Le mail n'a pas réussi à être envoyer 😢"
                }
            }
        });
    }
})

function classToggle() {
    formMerci.classList.toggle("active");
    button.classList.toggle("hide");
}
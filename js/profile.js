error = document.querySelector('.error');
icone = document.querySelector('.fa-user');

formMdp = document.querySelector('#form-mdp');
button = document.querySelector('.button');

id = document.querySelector('#Uid').value;

let mdp = document.querySelector('#mdp');

mdp.addEventListener('click', function () {
    let pass = document.querySelector('#Upass'),
    infos = document.querySelector('#infos1');
    if (pass.value != "") {
        post('./include/mdpverif.inc.php', "id=" + id + "&pass=" + pass.value, function () {
            if (this.readyState == 4 && this.status == 200) {
                if (this.response == 'mdp-incorrect') {
                    infos.classList.add("--active");
                    infos.children[0].classList.add('fa-exclamation-triangle','--error')
                    pass.value = "";
                    document.querySelector('#usermessage1').style.color = "#ff1d4e";
                    document.querySelector('#usermessage1').innerText = "Mot de passe Incorecte 😢"
                } else if (this.response == 'mdp-correct') {                        
                    classToggle();
                    pass.value = "";
                } else {
                    error.classList.remove("active");
                    pass.value = "";
                }
            }
        });
    }
})

let usern = document.querySelector('#usern');

usern.addEventListener('click', function () {
    let user = document.querySelector('#user').value,
    infos = document.querySelector('#infos2'),
    message = document.querySelector('#usermessage2');
    if (user != "") {
        post('./include/profile.inc.php', "id=" + id + "&user=" + user, function () {          
            if (this.readyState == 4 && this.status == 200) {
                if (this.response === "👌"){                
                    infos.classList.add('--active')
                    infos.children[0].classList.add('fa-check','--success')
                    message.style.color = "#1dff56";
                    message.innerText = "Le username a bien été modifier 👌"
                } else if (this.response === "❌") {
                    infos.classList.add('--active')
                    infos.children[0].classList.add('fa-times','--error')
                    message.style.color = "#ff1d4e";
                    message.innerText = "Le username n'a pas été modifier 😢"
                }
            }
        });
    }
})

let passn = document.querySelector('#newmdp');

passn.addEventListener('click', function () {
    let npass1 = document.querySelector('#npass1'),
        npass2 = document.querySelector('#npass2');

    let infos1 = document.querySelector('#infos3'),
    infos2 = document.querySelector('#infos4'),
    message = document.querySelector("#usermessage3");
    if(npass1.value || npass2.value){
    if (npass1.value === npass2.value) {
        post('./include/profile.inc.php', "id=" + id + "&pass=" + npass1.value, function () {
            if (this.readyState == 4 && this.status == 200) {
                if (this.response === "👌"){
                    infos1.classList.add('--active')
                    infos1.children[0].classList.add('fa-check','--success')
                    infos2.classList.add('--active')
                    infos2.children[0].classList.add('fa-check','--success')
                    message.style.color = "#1dff56";
                    message.innerText = "Le mot de passe a bien été modifier 👌"
                    npass1.value = "";
                    npass2.value = "";
                } else if (this.response === "❌") {
                    infos1.classList.add('--active')
                    infos1.children[0].classList.add('fa-times','--error')
                    infos2.classList.add('--active')
                    infos2.children[0].classList.add('fa-times','--error')
                    message.style.color = "#ff1d4e";
                    message.innerText = "Le mot de passe n'a pas été modifier 😢"
                    npass1.value = "";
                    npass2.value = "";
                }
            }
        });
    }
}
})

function classToggle() {
    formMdp.classList.toggle("active");
    button.classList.toggle("hide");
    icone.classList.toggle("active");
}
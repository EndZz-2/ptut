// fonction de ajax post
function post(url, v, f) {
    let http = new XMLHttpRequest();
    http.addEventListener('load', f);
    http.open("POST", url, true);
    http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    http.send(v);
}

// fonction d'actualisation du tableau
function db() {
    post('./include/request.inc.php', "", function () {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelector('#db').innerHTML = this.response;
        }

    });
}

// afficher le tableau au chargement de la page
document.addEventListener("DOMContentLoaded", function () {
    db();
});

// au click du button #send inserer les valeurs
btn = document.querySelector('#send');
btn.addEventListener("click", function () {
    Uname = document.querySelector('#Uname').value;
    mail = document.querySelector('#mail').value;
    at = false;
    if (Uname === "" || mail === "") {
        console.log('un champ est vide');
    } else {
        [...mail].forEach(element => {
            if (element === "@") {
                at = true;
            }
        });
        if (at == true) {
            console.log('@ detecté');
            post('./include/add_user.inc.php', "mail=" + mail + "&" + "username=" + Uname + "&admin=0", function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    db();
                    document.querySelector('#Uname').value = "";
                    document.querySelector('#mail').value = "";
                }
            });
        } else console.log('il manque le @');
    }
});

// button copier link
function copy(id) {
    tooltip = document.querySelector("#tooltip" + id);
    link = document.querySelector("#copylink" + id);
    btn = document.querySelector("#i-copy" + id);

    link.select();
    link.setSelectionRange(0, 99999);
    document.execCommand("copy");

    tooltip.innerHTML = "Copier !";

    animation(btn);

    if (document.getSelection().rangeCount > 0) {
        document.getSelection().removeAllRanges();
    }
}

// Button delet account
function del(id) {
    btn = document.querySelector("#i-del" + id);

    animation(btn);
    post('./include/delet_user.inc.php', "uid=" + id + "&" + "&admin=0", function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            db();
        }
    });
}
// tooltip default text
function outFunc(id) {
    tooltip = document.querySelector("#tooltip" + id);
    tooltip.innerHTML = "Cliquez pour copier !";
}

// animation scale copy link
function animation(elem) {
    var t = setInterval(frame, 10);
    let state = 0;
    let scale = 7;

    function frame() {
        if (state == 100) {
            clearInterval(t);
        } else {
            if (state == 50) {
                scale += 1;
                if(scale == 6){
                    state = 100;
                }else elem.style.transform = "scale(1." + scale + ")";                
            }else{
                scale -= 1;
                if(scale < -2){
                    state = 50;
                }else elem.style.transform = "scale(1." + scale + ")";
            }
        }
    }
}
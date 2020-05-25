// fonction de ajax post
function post(url, v, f) {
    let http = new XMLHttpRequest();
    http.addEventListener('load', f);
    http.open("POST", url, true);
    http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    http.send(v);
}

// fonction d'actualisation du tableau
function db(r) {
    post('./include/request.inc.php', "admin=" + r, function () {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelector('#db').innerHTML = this.response;
        }
    });
}

// au click du button #send inserer les valeurs
function sendform(r) {
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
            post('./include/add_user.inc.php', "mail=" + mail + "&" + "username=" + Uname + "&admin=" + r, function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    db(r);
                    document.querySelector('#Uname').value = "";
                    document.querySelector('#mail').value = "";
                }
            });
        } else console.log('il manque le @');
    }
}

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

// tooltip default text
function outFunc(id) {
    tooltip = document.querySelector("#tooltip" + id);
    tooltip.innerHTML = "Cliquez pour copier !";
}

// animation scale copy link

function animation(elem) {
    elem.animate([{
            transform: 'scale(1.5)',
        },
        {
            transform: 'scale(1)',
        },
        {
            transform: 'scale(1.5)',
        },
    ], {
        duration: 500,
        easing: 'ease',
        fill: 'both'
    });
}

//fonction de suppretion après click de confirmation
function modalConfirm(r) {
    post('./include/delet_user.inc.php', "uid=" + Uid + "&admin=" + r, function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            db(admin);
        }
    });
}

// modal on click del button
var Uid = 0;

function del(id) {
    Uid = id;
    btn = document.querySelector("#i-del" + id);
    animation(btn);
    modal();
}

// Modal

var btnConfirm = document.querySelector('.btn-confirm');
var btnClose = document.querySelector('.btn-close');
var confirmModal = document.querySelector('.confirm-modal');
var modalcont = document.querySelector('.modal-content');
var modalbg = document.querySelector('#modal-bg');
var btnok = document.querySelector('.btn-confirm');
if (modalcont != null) {
    var modalChildren = modalcont.children;
}

function modalAnimation() {
    modalcont.animate([{
            transform: 'translate(-50%, -50%) scale(0.5)',
            opacity: 1
        },
        {
            transform: 'scale(1) translate(-50%, -50%)',
            opacity: 1
        },
    ], {
        duration: 400,
        easing: 'cubic-bezier(0.175, 0.885, 0.320, 1.275)',
        iterations: 1,
        fill: 'forwards'
    });
    modalbg.animate([{
            opacity: 0
        },
        {
            opacity: 1
        },
    ], {
        duration: 1000,
        easing: 'cubic-bezier(0.175, 0.885, 0.320, 1.275)',
        iterations: 1,
        fill: 'forwards'
    });

    for (let i = 0; i < modalChildren.length; i++) {
        let item = modalChildren[i];


        item.animate([{
                transform: 'translateY(30px)',
                opacity: 0
            },
            {
                transform: 'translateY(0px)',
                opacity: 1
            },
        ], {
            duration: 200,
            easing: 'ease',
            delay: 100 + i * 40,
            iterations: 1,
            fill: 'both'
        });
    }
}

function toggleClasses() {
    confirmModal.classList.toggle("active");
    modalbg.classList.toggle("active");
}

function modal() {
    toggleClasses();
    modalAnimation();
}

if (btnConfirm != null) {
    btnClose.addEventListener('click', toggleClasses);
}

window.addEventListener('click', function (e) {
    if (e.target == confirmModal) {
        toggleClasses();
    }
});

let textarea = document.querySelector("#contact-textarea");
if(textarea != null){
textarea.addEventListener('keyup', function () {
    textarea.style.height = "20px";
    textarea.style.height = (15 + textarea.scrollHeight) + "px";
})
}
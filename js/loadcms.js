function post(url, v, f) {
    let http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    http.send(v);
    http.addEventListener('load', f);
}

post("../include/cmsload.inc.php", "page=" + page, function (){
    console.log(JSON.parse(this.responseText))
    data = JSON.parse(this.responseText);
    for (let i = 0; i < data.length; i++) {      
        document.getElementById(data[i]["id"]).innerHTML= data[i]["content"];
    }
})

// var data = {};
// http.send(data);


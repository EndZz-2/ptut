var data = {};
var xmlhttp = new XMLHttpRequest();
urlrep = 'include/infos.inc.php'
xmlhttp.open("POST", urlrep, true);
xmlhttp.onload = function () {
    data = JSON.parse(this.responseText);
    console.log(data);
    for (let i = 0; i < data.length; i++) {
        document.getElementById(data[i]["contentId"]).innerText = data[i]["content"];
    }

}
xmlhttp.send(data);

(function () {
    class Editor {
        constructor(evt, content, id) {
            this.event = evt;
            this.content = content;
            this.contentId = content.id;
            this.edit = false;
            this.id = id;
        }
    }

    window.addEventListener("onTextEdited", (e) => {
        let http = new XMLHttpRequest(),
            url = 'include/insertion.php',
            params = 'text=' + e.detail.text + '&id=' + e.detail.id;

        http.open('POST', url, true);
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        http.send(params);
    });

    let content = document.getElementsByClassName('content'),

        event = document.getElementsByClassName('event');


    for (let i = 0; i < content.length; i++) {
        let data = new Editor(event[i], content[i], i);
        data.event.addEventListener("dblclick", (e) => {
            if (data.edit) return;

            let text = data.content.innerText;

            data.event.removeChild(data.content);

            let text_area = document.createElement("textarea");
            text_area.value = text;
            data.event.appendChild(text_area);

            data.edit = true;

            text_area.focus();
            text_area.select()

            data.event.addEventListener("blur", (e) => {
                if (!data.edit) return;

                text = text_area.value;
                data.event.removeChild(text_area);

                data.content = document.createElement("p");
                data.content.classList.add("content");
                data.content.innerText = text;
                data.event.appendChild(data.content);

                data.edit = false;

                window.dispatchEvent(new CustomEvent("onTextEdited", {
                    'detail': {
                        id: data.contentId,
                        text: text
                    }
                }));

            }, true);

        }, true);
    }
})();
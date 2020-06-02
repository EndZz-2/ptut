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
            url = '../include/cms-insertion.inc.php',
            params = 'text=' + e.detail.text + '&id=' + e.detail.id;

        http.open('POST', url, true);
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        http.send(params);
    });

    let content = document.getElementsByClassName('cms-content'),
        event = document.getElementsByClassName('event');

    for (let i = 0; i < content.length; i++) {
        let data = new Editor(event[i], content[i], i);
        data.event.addEventListener("dblclick", (e) => {
            if (data.edit) return;

            let text = data.content.innerHTML;

            data.event.removeChild(data.content);

            let text_area = document.createElement("textarea");
            text_area.value = text;
            data.event.appendChild(text_area);

            data.edit = true;

            text_area.focus();
            text_area.select()

            text_area.style.height = "20px";
            text_area.style.height = (15 + text_area.scrollHeight) + "px";

            
            data.event.addEventListener("blur", () => {
                if (!data.edit) return;

                text = text_area.value;
                data.event.removeChild(text_area);

                // data.content = document.createElement("span");
                data.content.classList.add("cms-content");
                data.content.innerHTML = text;
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


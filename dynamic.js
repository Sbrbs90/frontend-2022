document.addEventListener("DOMContentLoaded", js);

function js() {
    let nuovo_elem = document.createElement("p");
    let mio_div = document.getElementById("target");

    nuovo_elem.innerText = "eccomi!";

    let mia_classe = document.createAttribute("class");
    mia_classe.value = "bg-evidente";
    nuovo_elem.setAttribute(mia_classe.name, mia_classe.value);
    mio_div.appendChild(nuovo_elem);
}

function cliccami() {
    let btn = document.getElementById("trigger");
    btn.innerText = "mi hai cliccato";

    let color = document.getElementsByClassName("importante");
    for (i = 0; i < color.length; i++) {
        color[i].style.backgroundColor = "blue";
        color[i].style.color = "white";
    }

    let primo = document.createElement("p");
    let primo_div = document.getElementById("primo-div");
    primo.innerText = "primo div";
    primo_div.appendChild(primo);

    let secondo = document.createElement("p");
    let secondo_div = document.getElementById("secondo-div");
    secondo.innerText = "secondo div";
    secondo_div.appendChild(secondo);
}

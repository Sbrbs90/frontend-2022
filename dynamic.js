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

function cliccami() {       //puoi risolverla anche aggiungendo e rimuovendo la classe .blu
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

//esercizio2

function centro() {
    let colore = document.getElementsByClassName("content");
    for (i = 0; i < colore.length; i++) {
        colore[i].classList.add("centrale");
        colore[i].classList.remove("destra");
        colore[i].classList.remove("sinistra");

    }
}

function destra() {
    let colore = document.getElementsByClassName("content");
    for (i = 0; i < colore.length; i++) {
        colore[i].classList.add("destra");
        colore[i].classList.remove("centrale");
        colore[i].classList.remove("sinistra");
    }
}

function sinistra() {
    let colore = document.getElementsByClassName("content");
    for (i = 0; i < colore.length; i++) {
        colore[i].classList.add("sinistra");
        colore[i].classList.remove("destra");
        colore[i].classList.remove("centrale");
    }
}

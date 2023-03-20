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
    
    let nuovo_parag = document.createElement("p");
    let primo_div = document.getElementsByClassName("importante");
    for (i = 0; i < primo_div.length; i++) {
        nuovo_parag.innerText = "primo div!";
        primo_div[i].appendChild(nuovo_parag);
        primo_div[i].style.backgroundColor = "blue";
        primo_div[i].style.color = "white";
    }

    let secondo = document.createElement("p");
    let secondo_div = document.getElementById("secondo-div");
    secondo.innerText = "secondo div";
    secondo_div.appendChild(secondo);
    secondo_div.style.backgroundColor = "blue";
    secondo_div.style.color = "coral";

}

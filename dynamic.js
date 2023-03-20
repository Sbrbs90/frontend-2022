document-addEventListener("DOMContentLoaded", js);

function js(){
let nuovo_elem = document.createElement("p");
let mio_div = document.getElementById("target");

nuovo_elem.innerText = "eccomi!";

let mia_classe = document.createAttribute("class");
mia_classe.value = "bg-evidente";
nuovo_elem.setAttribute(mia_classe.name, mia_classe.value);
mio_div.appendChild(nuovo_elem);
}

function cliccami(){
    let btn = document.getElementById("btn");
    btn.innerText = "mi hai cliccato";
}
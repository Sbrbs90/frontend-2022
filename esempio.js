
let btnRosso = document.getElementById("btnRosso");


btnRosso.addEventListener("click", addRed);
btnRosso = document.getElementById("btnVerde");
btnRosso.addEventListener("click", addGreen);


function addRed() {
    let miei_div = document.getElementsByClassName("div");

    for (i = 0; i < miei_div.length; i++) {
        miei_div[i].classList.add("red");
        miei_div[i].classList.remove("green"); 
    }
}

function addGreen() {
    let miei_div = document.getElementsByClassName("div");

    for (i = 0; i < miei_div.length; i++) {
        miei_div[i].classList.add("green");
        miei_div[i].classList.remove("red"); 
    }
}
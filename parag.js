//esercizio1
let parag = document.getElementById("mio-paragrafo");
parag.textContent = "Hello, JavaScript!";


//esercizio2
function aggiungi_classe(){
    let nuova_classe = document.getElementById("mio-div");
    nuova_classe.classList.add("red");
}
aggiungi_classe();

//esercizio3
function rimuovi_classe() {
    let myDiv = document.getElementById("mio-div");
    myDiv.classList.remove("box");
  }
  rimuovi_classe();
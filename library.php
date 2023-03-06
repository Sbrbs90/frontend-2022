<!--Questa è una libreria di funzioni che all'occorrenza richiami senza dover scrivere ogni volta le funzioni-->

<?php

function stampa_div($classe, $contenuto, $id = "")
{   //funzione per stampare un <div>. Necessiti del nome della classe e il suo contenuto
    echo "<div class='" . $classe . "'";
    if ($id != "") {
        echo " id = '" . $id . "'"; //se non c'è id non lo stampi
    }
    echo ">";
    echo $contenuto;
    echo "</div>";
}



function valore_assoluto($numero)
{
    //se il valore è negativo, lo moltiplico per -1.
    //altrimenti lo restituisco senza modificarlo

    if ($numero < 0) {
        $risultato = $numero * -1;
    } else {
        $risultato = $numero;
    }

    return $risultato;
}

//ESERCIZIO: scrivere una funzione che accetti due argomenti (un numero e una stringa) e stampa la stringa tante volte quanto indicato dal numero, andando a capo dopo ogni stampa
function stampa_stringa($numero, $stringa)
{
    echo "<p>"; //ESERCIZIO2:modificare la funzione precedente per racchiudere l'output all'interno di un <p>
    for ($i = 0; $i < $numero; $i++) {
        echo $stringa . "<br>";
    }
    echo "</p>";
}

//--------------------------------------------------------------------------------//

 //esercizio 1
 function somma($a, $b){
    $c = $a + $b;
     echo $c . "<br>";
 };

 //esercizio 2
 function massimo($num1, $num2){
     if($num1 > $num2){
         echo $num1 . "<br>";
     }else{
         echo $num2 . "<br>";
     }
 }

 //esercizio 3
 function stampa_immagine($nome, $classe, $id){
     echo "<img src= " . $nome . " " . "class= " . $classe . " " . "id = " . $id . ">";
 }

 //-------------------------------------------------------------------//
  function crea_div($testo, $numero_div, $classe){
        for($i = 0; $i < $numero_div; $i++){
            echo "<div class= '" . $classe ."'"; 
            echo ">"; 
            echo $testo;
            echo "</div>";
        }  
    }

    function nuovo_div($testo, $numero_div, $classe, $classe2){
        for($i = 0; $i < $numero_div; $i++){
            if($i % 2 != 0){
                echo "<div class= '" . $classe2 ."'"; 
                echo ">"; 
                echo $testo;
                echo "</div>";
            }else{
                
                echo ">";  echo "<div class= '" . $classe ."'";
                echo $testo;
                echo "</div>";
            }
        }  
    }



?>
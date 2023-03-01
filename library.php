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

?>
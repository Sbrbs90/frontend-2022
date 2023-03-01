//libreria di funzioni che all'occorrenza richiami

<?php
function valore_assoluto($numero){
    //se il valore è negativo, lo moltiplico per -1.
    //altrimenti lo restituisco senza modificarlo

    if($numero < 0){
        $risultato = $numero * -1;
    }else{
        $risultato = $numero;
    }

    return $risultato;
}

?>
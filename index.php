<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $valore= -5;
        echo "il valore assoluto di" . $valore;
        $valore = valore_assoluto($valore);
        echo " é " . $valore;
    ?>
</body>
</html>

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
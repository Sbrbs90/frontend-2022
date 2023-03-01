<?php

    include("library.php"); //per includere la libreria di funzioni

?>


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
        echo " é " . $valore. "<br>";

        //assegno valore alla veriabile
        $nuovo_valore = 7;
        $valore = valore_assoluto($nuovo_valore);
        echo " é " . $valore ;
    ?>
</body>
</html>


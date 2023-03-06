<?php

    include("library.php"); //per includere la libreria di funzioni

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio</title>
</head>

<body>
    <?php

    stampa_div("container", "esempio php", "head");

    
    for ($i = 0; $i <= 20; $i += 2) {
        stampa_div("", $i); //non abbiamo dato una classe al <div> quindi mettiamo solo la variabile del contenuto
    }


    stampa_stringa(5 , "ciao"); // solo le stringhe vanno tra "", numeri bool no.

    somma(5, 10);

    massimo(100, 150);

    stampa_immagine("test.jpg", "round", "img01");

    crea_div("ciao mondo", 20, "evidente");

    nuovo_div("ciao mondo", 20, "evidente", "alternata");

    ?>
</body>

</html>
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
    ?>
</body>

</html>
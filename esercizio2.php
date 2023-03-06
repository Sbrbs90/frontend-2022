<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $classe = ["giallo", "verde", "blu"];
        $contenuto = ["cont1", "cont2", "cont3"];

        function stampa_doppio_array($classe, $contenuto){
        

            for ($i = 0; $i < count($classe); $i ++){
                echo "<div class= '" . $classe[$i] ."'" .">";
                echo $contenuto[$i];
                echo "</div>";       
            }
        }

        stampa_doppio_array($classe, $contenuto);
    ?>
</body>
</html>
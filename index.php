<?php

$paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, accusantium!";

$badword = "Lorem";

$nuovoParagrafo = str_replace($badword, "***", $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Badwords</title>
    </head>
    <body>
        <h2>Paragrafo originale</h2>
        <p><?php echo $paragrafo ?></p>
        <br>
        <h2>Paragrafo con lunghezza specificata</h2>
        <p><?php echo $paragrafo . "  Length (" . strlen($paragrafo). ")" ?> </p>
        <br>
        <h2>Badword da individuare e sostituire con tre asterischi</h2>
        <p><?php echo $badword ?></p>
        <br>
        <h2>Risultato Finale</h2>
        <p><?php echo $nuovoParagrafo ?></p>
    </body>
</html>
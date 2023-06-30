<?php
    $name = $_GET['firstName'];
    $surname = $_GET['lastName'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Server</title>
    </head>
    <body>

        <h1>
            mi dispiace, ma non esiste nessun account con i dati
            <?php echo $name; ?> <?php echo $surname; ?>
        </h1>

    </body>
</html>


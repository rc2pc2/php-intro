
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php Intro</title>
    </head>
    <body>

        <!--  ACTION : destinatario dei miei dati del form -->
        <!--  Il metodo usato per passare i dati : destinatario dei miei dati del form -->

        <form action="./server.php" method="GET">
            <input type="text" name="firstName">
            <input type="text" name="lastName">

            <button type="submit">
                Invia il form
            </button>
        </form>
    </body>
</html>
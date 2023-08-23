
<!--PHP-->
<?php

?>

<!--HTML -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Badwords</title>
    </head>

    <body>
        <form action="censura.php" method="get">
        
            <label for="paragraph">Inserisci un paragrafo:</label><br>
            <textarea name="paragraph" rows="4" cols="50" required> </textarea><br><br>
            
            <label for="wordToCensor">Parola da censurare:</label>
            <input type="text" name="wordToCensor" required><br><br>
            <input type="submit" value="Censura">

        </form>
    </body>
</html>
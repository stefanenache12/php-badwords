
<!--PHP-->
<?php
    $paragraph = $_GET["paragraph"];
    $wordToCensor = $_GET["wordToCensor"];
    $search = $wordToCensor;
    $replace = "***";
    $newParagraph = str_replace($search, $replace, $paragraph);
?>

<!--HTML -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Badwords</title>
    </head>

    <body>
        <div class="container">
            <div>
                <h2>Paragrafo</h2>
                <h3>
                    <?php echo $paragraph; ?>
                </h3>
                <span>
                Lunghezza <?php echo strlen($paragraph); ?>
                </span>
            </div>

            <div>
                <h2>Paragrafo Censurato</h2>
                <h3>
                    <?php echo $newParagraph; ?>
                </h3>
                <span>
                Lunghezza <?php echo strlen($newParagraph); ?>
                </span>
            </div>
        </div>
    </body>
</html>
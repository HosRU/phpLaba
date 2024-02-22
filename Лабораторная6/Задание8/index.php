   <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Задание 8</title>
    </head>
    <body>
        <?php
            $test = "345";
            settype($test, "integer");
            echo gettype($test);
        ?>
    </body>
    </html>
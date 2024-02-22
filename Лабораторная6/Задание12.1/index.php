   <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Задание 15</title>
    </head>
    <body>
        <?php
          $array = [];
          for($count = 0; $count <= 100; $count++){
            array_push($array, $count);
          }

          print_r($array);
        ?>
    </body>
    </html>
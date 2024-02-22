   <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Задание 11</title>
    </head>
    <body>
        <?php
          $year_user = 2028;
          if($year_user % 4 == 0 || $year_user % 400 == 0 ){
            echo "Данный год является високосным годом";
          } else {
            echo "Данный год не является високосным годом";
          }
        ?>
    </body>
    </html>
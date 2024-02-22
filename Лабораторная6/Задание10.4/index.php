   <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Задание 10</title>
    </head>
    <body>
        <?php
          $number_user = 56;
          if($number_user % 3 == 0){
            echo "Число является кратным 3";
          } else if($number_user % 5 == 0){
            echo "Число является кратным 5";
          } else if($number_user % 7 == 0){
            echo "Число является кратным 7";
          }
        ?>
    </body>
    </html>
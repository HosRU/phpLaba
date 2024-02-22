   <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Задание 13 Л7</title>
    </head>
    <body>
      <div class="block-text">
        <?php
          $arr = [45, "тест", 100];
          unset($arr[1]);
          array_push($arr, "тест2");
          echo join(", ",$arr);
        ?>
      </div>
    </body>
    </html>
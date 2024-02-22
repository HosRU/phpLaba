   <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Задание 15 Л7</title>
    </head>
    <body>
      <div class="block-text">
        <?php
          $arr = array(45, 76, 12, 12, 45, 12);
          echo join(" ",array_unique($arr));
          // 3 элемента 45 76 12
        ?>
      </div>
    </body>
    </html>
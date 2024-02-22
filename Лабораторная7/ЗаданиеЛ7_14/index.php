   <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Задание 14 Л7</title>
    </head>
    <body>
      <div class="block-text">
        <?php
          $arr = array("first"=>45, "second"=>76, "third"=>12);
          echo join(", ",array_reverse($arr)); 
        ?>
      </div>
    </body>
    </html>
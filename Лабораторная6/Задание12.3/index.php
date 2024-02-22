   <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Задание 17</title>
    </head>
    <body>
      <div class="block-text">
        <?php
            $array = ["Строка1", "Строка2", "Строка3", "Строка4", "Строка5", "Строка6", "Строка7", "Строка8", "Строка9", "Строка10"];

            $num = 0;
            while($num !== count($array)){
              echo "<p>$array[$num]</p>";
              $num++;
            }
          ?>
      </div>
        
    </body>
    </html>
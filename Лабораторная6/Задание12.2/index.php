   <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Задание 16</title>
    </head>
    <body>
        <?php
          $array = [];
          for($count = 0; $count <= 100; $count++){
            array_push($array, $count);
          }

          $num = 0;
          while($num !== count($array)){
            echo $array[$num];
            $num++;
            echo "</br>";
          }

          // foreach ($array as $value){
          //   echo $value;
          //   echo "</br>";
          // }
        ?>
    </body>
    </html>
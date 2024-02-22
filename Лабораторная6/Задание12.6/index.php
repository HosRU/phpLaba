   <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Задание 19</title>
    </head>
    <body>
      <div class="block-text">
        <?php
          for($count = 0; $count <= 100; $count++){
            if($count % 2 == 0){
              echo "<p style='color: red; font-size: 26px'>$count</p>";
            } else {
              echo $count;
            }
          }
        ?>
      </div>
        
    </body>
    </html>
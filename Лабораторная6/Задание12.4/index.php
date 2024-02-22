   <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Задание 18</title>
    </head>
    <body>
      <div class="block-text">
        <?php
            $array = [
              ["title" => "Ягодка", "description" => "Хороший товар", "price" => 299],
              ["title" => "Клубничка", "description" => "Отличный товар", "price" => 499],
              ["title" => "Помидорка", "description" => "Хороший товар", "price" => 399],
              ["title" => "Ананасик", "description" => "Отличный товар", "price" => 699],
            ];

            foreach($array as $value){
              echo "<h2>$value[title]</h2>";
              echo "<p>$value[description]</p>";
              echo "<a href='#'>$value[price]</a>";
              echo "</br>";
            }
          ?>
      </div>
        
    </body>
    </html>
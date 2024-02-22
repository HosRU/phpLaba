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
            $array = [];
            $array_numbers = [];

            for($count = 0; $count <= 50; $count++){
              array_push($array, rand(0, 100));
            }

            foreach($array as $value){
              if($value < 72){
                array_push($array_numbers, $value);
              }
            }

            print_r($array_numbers);

          ?>
      </div>
        
    </body>
    </html>
<?php 
    $array_products = [
        ["title" => "Лясопед", "price" => 699, "descruption" => "Топчег за свои деньги!"],
        ["title" => "Скейтик", "price" => 1699, "descruption" => "Совсем за свои деньги!"],
        ["title" => "Подушка", "price" => 2699, "descruption" => "Почти топчег за свои деньги!"],
        ["title" => "Бензопила", "price" => 3699, "descruption" => "Топ за свои деньги!"],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карточки</title>
</head>
    <body>
        <?php 
            for($count = 0, $count_p = 0; $count < count($array_products); $count++){
                include 'goods.php';
            }
        ?>
    </body>
</html>



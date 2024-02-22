<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <div class="card">
            <h2><?php echo $array_products[$count]['title']?></h2>
            <span><?php echo $array_products[$count]['price']?></span>
            <p><?php echo $array_products[$count]['descruption']?></p>
        </div>
    </body>
</html>
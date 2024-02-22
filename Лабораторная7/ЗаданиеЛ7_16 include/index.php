   <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Задание 16 Л7 include</title>
    </head>
    <body>
      <header>
        <?php 
          include 'menu.inc.php';
        ?>
      </header>

      <main>
        <?php 
          include 'shop.php';
        ?>
      </main>
    </body>
    </html>
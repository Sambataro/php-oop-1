<?php
include __DIR__ . "/database.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>oop one</title>
</head>
<body>

    <div class="books">
    <?php foreach($arrayBooks as $book) {?>
        <div class="book">
            <h3><?php echo 'titolo: ' . $book->name  ?></h3>
            <h5><?php echo 'autore: ' . $book->author  ?> </h5>
            <h5><?php echo $book->getDiscount() ?></h5>
            <h6><?php echo 'anno di pubblicazione: ' . $book->yearPublication ?></h6>
        </div>
    <?php } ?>
    </div>
</body>
</html>
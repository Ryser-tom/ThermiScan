<?php
if (!isset($_SESSION['Pdo'])) {
    $_SESSION['Pdo'] = new requete("127.0.0.1", "thermiscan", "cfpt", "Super");
}
?>
<!DOCTYPE html>
<html lang="FR">

    <head>
        <title>
            <?php echo $title ?>
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
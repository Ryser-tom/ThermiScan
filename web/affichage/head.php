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
    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>


    <!-- Load c3.css -->
    <link href="c3/c3.css" rel="stylesheet">

    <!-- Load d3.js and c3.js -->
    <script src="https://d3js.org/d3.v5.min.js"></script>
    <script src="c3/c3.min.js"></script>
</head>

<body>
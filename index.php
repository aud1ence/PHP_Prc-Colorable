<?php
require __DIR__ . "/vendor/autoload.php";

use Src\Square;
use Src\Rectangle;

$square = new Square("Square", 10);
//echo $square->howToColor();
//echo "<br>";

$rectangle = new Rectangle("Rectangle", 20, 30);
//echo $rectangle->howToColor();
//echo "<br>";

$arr[0] = $square->getInfo();
$arr[1] = $rectangle->getInfo();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colorable</title>
    <style>
        table, th, td {
            border-collapse: collapse;
            border: 1px solid deepskyblue;
            width: 700px;
            height: 200px;
            text-align: center;
            margin-left: 300px;
        }
    </style>
</head>
<body>
<table>
    <caption><h2>Colorable</h2></caption>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Area</th>
        <th>Colorable</th>
    </tr>
    <?php foreach ($arr as $index => $value): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <?php foreach ($value as $key): ?>

            <td><?php echo $key; ?></td>
            <?php endforeach; ?>
        </tr>

    <?php endforeach; ?>
</table>
</body>
</html>

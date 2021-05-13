<?php
require __DIR__ . "/vendor/autoload.php";
use Src\Square;
use Src\Rectangle;

$squares = [];
array_push($squares, $square = new Square("Square", 10));
array_push($squares, $square1 = new Square("Square1", 50));
array_push($squares, $square2 = new Square("Square2", 60));
array_push($squares, $square3 = new Square("Square3", 70));
array_push($squares, $square4 = new Square("Square4", 80));
array_push($squares, $square5 = new Square("Square5", 90));
array_push($squares, $rectangle = new Rectangle("Rectangle", 20, 30));
array_push($squares, $rectangle1 = new Rectangle("Rectangle", 20, 30));
array_push($squares, $rectangle2 = new Rectangle("Rectangle", 20, 30));
array_push($squares, $rectangle3 = new Rectangle("Rectangle", 20, 30));
array_push($squares, $rectangle4 = new Rectangle("Rectangle", 20, 30));
array_push($squares, $rectangle5 = new Rectangle("Rectangle", 20, 30));
array_push($squares, $rectangle6 = new Rectangle("Rectangle", 20, 30));
array_push($squares, $rectangle7 = new Rectangle("Rectangle", 20, 30));
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
    <?php foreach ($squares as $key => $value): ?>
        <tr>
            <td><?php echo $key + 1; ?></td>
            <td><?php echo $value->getName() ?></td>
            <td><?php if ($value instanceof Square) {
                    echo $value->howToColor();
                }
                ?></td>
            <td><?php echo $value->calculateArea() ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>

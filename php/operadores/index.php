<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP8</title>
</head>
<body>
    <?php
    $num1 = 10;
    $num2 = 3;

    //Adição
    echo $num1 + $num2 . "<br>";
    //subtrção
    echo $num1 - $num2 . "<br>";
    //multiplicação
    echo $num1 * $num2 . "<br>";
    //divisão
    echo $num1 / $num2 . "<br>";
    //resto da divisão
    echo $num1 % $num2 . "<br>";
    //potenciação
    echo pow($num1, $num2) . "<br>";
    //Radiciação e arrendondamento
    echo round(sqrt($num1),2) . "   " . round(sqrt($num2),2) . "<br>";

    ?>
</body>
</html>
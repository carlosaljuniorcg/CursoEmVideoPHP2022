<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores Aritméticos</title>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores recebidos de $n1 e $n2</h2>";
        $s = $n1 % $n2;
        $m = ($n1 + $n2)/2;
        echo "A soma entre $n1 e $n2 é igual a $s.";
        echo "<br/> A soma vale ". ($n1 + $n2);
        echo "<br/> A subtração vale ". ($n1 - $n2);
        echo "<br/> A multiplicação vale ". ($n1 * $n2);
        echo "<br/> A divisão vale ". ($n1 / $n2);
        echo "<br/> O modulo vale ". ($n1 % $n2);
        echo "<br/> A media é $m";
    ?>
</div>    
</body>
</html>
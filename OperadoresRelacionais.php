<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores relacionais</title>
    <style>
        h2 {
        font: 15pt Arial; /*Usado para definir tamanho e fonte*/
        color: blue; /*Usado para definir a cor da fonte */
        font-weight: bold; /*Usado para deixar a fonte em negrito */
        }       
    </style>
</head>
<body>
<div>
    <?php
    //Operados relacionais
    //Maior > Menor < Maiorigual >= Menor igual <= Diferente <> ou != Igual == identico ===
    //Operador unário expressão ? verdadeiro : falso
    $a = $_GET["a"];
    $b = $_GET["b"];
    $maior = $a > $b ? $a : $b;
    $r1 = $a > $b ? $a + $b : $a - $b;
    $r2 = $a > $b ? $a * $b : $a / $b;
    echo "<h2>Os valores passados foram $a e $b<h2/>";
    echo "<br/>O valor é $maior";
    echo "<br/>O valor é $r1";
    echo "<br/>O valor é $r2";
           
    ?>
</div>    
</body>
</html>
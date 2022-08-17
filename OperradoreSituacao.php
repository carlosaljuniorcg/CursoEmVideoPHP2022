<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores aritméticos</title>
    <style>
        h2 {
            font: 15pt Arial; /*Usado para definir tamanho e fonte*/
            color: blue; /*Usado para definir a cor da fonte */
            font-weight: bold; /*Usado para deixar a fonte em negrito */
        }     
        h3 {
            font: 18pt Arial; /*Usado para definir tamanho e fonte*/
            color: red; /*Usado para definir a cor da fonte */
            font-weight: bold; /*Usado para deixar a fonte em negrito */
        }  
    </style>
</head>
<body>
<div>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2)/2;
        echo "<h2>A média entre $nota1 e $nota2 é $m.</h2>";
        $sit = ($m < 6)?"Reprovado":"Aprovado, parabéns!";
        echo "<br/><h3>O aluno está $sit.<h3/>";
        echo "<br/>O aluno está ". (($m < 6)?"Reprovado.":"Aprovado, parabéns!.");
        
    ?>
</div>    
</body>
</html>
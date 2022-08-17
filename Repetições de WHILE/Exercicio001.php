<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Estruturas de repetição WHILE</title>
    
</head>
<body>
<div>
    <?php
        $c = 1; //Contando de forma crescente
        while ($c <= 10) {
            echo $c . "<br/>";
            $c += 1;//Contando de um em um.
        }
        $c = 10;//Contando de forma decrescente
        while ($c >= 1) {
            echo $c . "<br/>";
            $c -= 1; //$c --;//De um em um
        }
    ?>
</div>    
</body>
</html>
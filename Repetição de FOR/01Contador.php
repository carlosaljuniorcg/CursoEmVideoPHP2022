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
        //Contando de 1 em 1
        for ($c =1; $c <= 10; $c++) {
            echo "$c ";
        }
        //Contando de 1 em 1
        echo "<br/>";
        for ($c = 10; $c >= 1; $c--) {
            echo "$c ";
        }
        //Contando de 5 em 5
        echo "<br/>";
        for ($c = 0; $c <= 100; $c+= 5) {
            echo "$c ";
        }
    ?>
    
</div>    
</body>
</html>
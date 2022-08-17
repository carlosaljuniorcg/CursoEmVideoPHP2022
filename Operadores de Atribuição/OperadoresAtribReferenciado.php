<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores de atribuição Referenciados</title>
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
        //Fazando valores referenciados usando &
         $a = 3;
         $b = &$a;//Usando & para criar uma referência de a com b.
         $b += 5;
         echo "O valor de a é $a";
         echo "<br/>O valor de b é $b";      

    ?>
</div>
</body>
</html>
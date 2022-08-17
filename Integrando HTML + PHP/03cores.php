<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $txt = isset($_GET["t"])?$_GET["t"]:"Texto Genérico";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000"
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Operadores aritméticos</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>; 
        }
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
        echo "<span class='texto'>$txt</span>";
    ?>
    <a href="Formul;ário002.html">Voltar</a>
</div>    
</body>
</html>
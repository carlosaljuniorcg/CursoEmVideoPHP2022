<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Operadores aritméticos</title>
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
        $estado = isset($_GET["est"])?$_GET["est"]:0;
        switch($estado){
            case 1:
                $reg = "REGIÃO NORTE.";
                break;
            case 2:
                $reg = "REGIÃO NORDESTE.";
                break;
            case 3:
                $reg = "REGIÃO CENTRO-OESTE.";
                break;
            case 4:
                $reg = "REGIÃO SUDESTE.";
                break;
            case 5:
                $reg = "REGIÃO SUL.";
                break;
            default:
                $reg = "REGIÃO INVÁLIDA";
        }
        echo "Você está na $reg"
        
    ?>
    <br/><a href="javascript:history.go(-1)">Voltar</a>
</div>    
</body>
</html>
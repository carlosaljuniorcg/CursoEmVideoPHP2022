<!DOCTYPE html>
<html lang="pt-br">
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
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e terá $i anos.";  
        if ($i < 16) {
            $tipoVoto = "não vota.";
        } elseif (($i >= 16 && $i < 18) || ($i >=65)) {
            $tipoVoto = "voto opcional.";
        } else {
            $tipoVoto = "voto obrigatório.";
        }
        
        echo "<br/>Para essa idade, $tipoVoto";
    ?>
    <a href="Exercicio002.html">Voltar</a>
</div>    
</body>
</html>
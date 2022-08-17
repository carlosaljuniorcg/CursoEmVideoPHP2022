<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Vetores e Matrizes 2022</title>
    
</head>
<body>
<div>
    <?php
        //Criar chaves personalizadas
        $v = array(1=>"4", 3=>"6", 2=>"5", 4=>"0");
        $v[] ="1";//COmando para alogar
        unset($v[2]);//Comando para desalocar
        print_r($v);
    ?>
    
</div>    
</body>
</html>
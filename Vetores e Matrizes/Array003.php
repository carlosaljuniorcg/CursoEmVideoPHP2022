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
        //Criar chaves associativas
        $cad = array("nome"=>"Carlos", "idade"=>41, "peso"=>78.5);//No PHP os array não são homogeneas.
        $cad["Fode"] =true;
        foreach($cad as $p=>$g) {
            echo "O campo $p possui o conteúdo $g <br/>";
        }
        //print_r($cad);

    ?>
    
</div>    
</body>
</html>
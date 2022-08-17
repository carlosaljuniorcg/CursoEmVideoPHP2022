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
        $n=isset($_GET["num"])?$_GET["num"]:1;
        $t=0;
        echo "Analisando os múltipos de $n ... </br><br/>";
        echo "Valores múltiplos:";
        for($c=1; $c <= $n; $c++){
          if($n%$c == 0){
            echo "$c ";  /*Determina quais são os valores múltiplos de $n*/
            $t++;
          }
        }
        echo "<br/>Total de múltiplos: $t<br/>";
        if ($t > 2){
          echo "RESULTADO: $n <br/> <h2>NÃO É PRIMO. Tente novamente!<br/></h2>";
        }
        if($t == 2) {
          echo "RESULTADO:$n <h2>É PRIMO!!!</h2>";
        }
    ?>
    <br/><a href="javascript:history.go(-1)">Voltar</a>
    
</div>    
</body>
</html>
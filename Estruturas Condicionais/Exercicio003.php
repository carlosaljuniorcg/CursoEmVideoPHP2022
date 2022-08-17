<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Operadores aritméticos</title>
    
</head>
<body>
<div>
    <?php
        $nt1 = isset($_GET["n1"])?$_GET["n1"]:1;
        $nt2 = isset($_GET["n2"])?$_GET["n2"]:1;
        $m = ($nt1 + $nt2)/2;
        echo "A média de $nt1 e $nt2 é igual a $m";
        if ($m <= 5) {
            $sit = "REPROVADO!";
        } elseif ($m > 5 && $m <=7) {
            $sit = "em RECUPERAÇÃO!";
        } else {
            $sit = "APROVADO! Parabéns.";
        }
        echo "<BR/>O aluno está $sit."
        
    ?>
    <a href="Exercicio003.html">Voltar</a>
</div>    
</body>
</html>
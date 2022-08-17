<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Tabuada - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $n = isset($_GET["numero"])?$_GET["numero"]:1;
    $i = 1;
    $r = $n; // A variavel $r recebe o proprio valor informado "$n", para que depois possa fazer a expressõa logo abaixo.
        do {
            echo "<br/>$i x $n = $r";
            $i++;
            $r = $i * $n;  // Colocar a expressão neste local, fez com que o valor fosse multiplcado.
        }
        while ($i<=10);
    ?>
    <p><a href="03Tabuada.html" class="botao">Voltar</a></p>
</div>
</body>
</html>
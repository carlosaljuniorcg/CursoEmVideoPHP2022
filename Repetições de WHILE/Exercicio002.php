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

</body>
</html><div>
    <form method="get">
        <?php
        $c = 1;
        While ($c <= 5) {
            echo "Valor $c = <input type='number' name='v$c' min='0' max='100' value='0'/><br/>";
            $c++;
        }
        $i = 1; //1º while pega os dados da url
        while($i<=5){
            $v = "num".$i;
            $url = "v".$i;
            $$v = isset($_GET[$url])?$_GET[$url]:0;
            $i++;
        }
        /*echo "$num1 $num2 $num3 $num4 $num5"; //assim fica inline*/

        $i=1; //este bloco mostra os dados pegos pela url
        while($i<=5){
        $v = "num".$i;
        echo "Valor $i: ". $$v ."<br/>";
        $i++;
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
</div>
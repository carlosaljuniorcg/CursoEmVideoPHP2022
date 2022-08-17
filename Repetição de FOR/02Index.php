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
    <form method="get" action="02Tabuada.php">
        <select name="num">
            <?php
                for ($c = 1; $c <= 10; $c++) {
                    echo "<option>$c</option>";
                }
            ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>
    <?php
        
    ?>
</div>    
</body>
</html>
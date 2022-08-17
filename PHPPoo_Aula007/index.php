<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lutadores</title>
    </head>
    <body>
        <pre>
        <?php
        require_once './Lutador.php';
        require_once './Luta.php';
           $l = array(); 
           $l[0] = new Lutador("Carlos", "Brasil", 41, 1.70, 79, 21, 0, 0);
           $l[1] = new Lutador("Brunno", "Brasil", 37, 1.71, 80.5, 12, 5, 10);
           $l[2] = new Lutador("Anderson", "Rússia", 32, 1.74, 76.3, 22, 0, 2);
           $l[3] = new Lutador("Pedro", "Americano", 26, 1.56, 54, 20, 0, 5);
           $l[4] = new Lutador("Sandro", "Espanhol", 34, 1.60, 66, 14, 0, 11);
           $l[5] = new Lutador("Bores", "Alemanha", 33, 1.68, 70, 12, 4, 5);
           
           $uec01 = new Luta();
           $uec01->marcarLuta($l[0], $l[1]);
           $uec01->lutar();
           $l[0]->status();
           $l[1]->status();
                      
        ?>
        </pre>
    </body>
</html>

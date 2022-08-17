<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once './Caneta.php';
            
            $c1 = new Caneta("BIC", "Azul", 0.5);
            $c2 = new Caneta("KKK", "Laranja", 0.3);
            //$c1->setModelo("BIC");//Fazendo chamada através do método Getter
            //$c1->setPonta(0.5);//Fazendo chamada através do método Setter
            print_r($c1);
            print_r($c2);
            //print "Eu tenho uma caneta de {$c1->getModelo()} de ponta {$c1->getPonta()}."
        ?>
        </pre>
    </body>
</html>

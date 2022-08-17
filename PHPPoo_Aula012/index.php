<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Polimorfismo com Sobrecarga</title>
    </head>
    <body>
        <pre>
        <?php
            require_once './Animal.php';
            require_once './Cachorro.php';
            require_once './Lobo.php';
            require_once './Mamifero.php';
            
            $m = new Mamifero();
            $k = new Cachorro();
            $l = new Lobo();
            
            $m->emitirSom();
            $k->emitirSom();
            $l->emitirSom();
            $k->reagirFrase("Tudo bem?");
            $k->reagirDono(false);
            $k->reagirHora(9);
            $k->reagirIdadePeso(6, 10);
        ?>
        </pre>
    </body>
</html>

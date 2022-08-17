<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Poliformismo de Sobreposição</title>
    </head>
        <pre>
        <?php
        //Poliformismo SOBREPOSIÇÃO
            require_once './Animal.php';
            require_once './Ave.php';
            require_once './Mamifero.php';
            require_once './Peixe.php';
            require_once './Reptil.php';
            require_once './Cachorro.php';
            require_once './Canguru.php';
            
            $m = new Mamifero();
            $a = new Ave();
            $p = new Peixe();
            $r = new Reptil();
            $ca = new Cachorro();
            $c = new Canguru();
            
            $m->setPeso = 85.4;
            $m->setIdade = 2;
            $m->setMembros = 4;
            $m->locomover();
            $m->alimentar();
            $m->emitirSom();
            
            $ca->setPeso = 13;
            $ca->setIdade = 4;
            $ca->setMembros = 4;
            $ca->locomover();
            $ca->alimentar();
            $ca->emitirSom();
            $ca->enterrarOsso();
            $ca->abanarRabo();
            
            
            print_r($m);
            print_r($ca);
            
        ?>
        </pre>
    </body>
</html>

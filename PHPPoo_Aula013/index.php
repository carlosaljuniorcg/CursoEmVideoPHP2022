<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once './Video.php';
            require_once './Pessoa.php';
            require_once './Gafanhoto.php';
            require_once './Vizualizacao.php';
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML5");
            
            print_r($v);
            
            $g[0] = new Gafanhoto("Carlos", 41, "M", "carlosaljuniorcg");
            $g[1] = new Gafanhoto("Risia", 45, "F", "risiakristinne");
            print_r($g[0]);
            print_r($g[1]);
            
            $vis[0] = new Vizualizacao($g[0], $v[1]);//Carlos assiste PHP
            
            print_r($vis);
        ?>
        </pre>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once './Pessoa.php';
            require_once './Livro.php';
            $p[0] = new Pessoa("Carlos", 41, "M");
            $p[1] = new Pessoa("Risia", 45, "F");
            
            $l[0] = new Livro("Meu PHP", "José", 350, $p[0]);
            $l[1] = new Livro("PHP Básico", "Desconhecido", 600, $p[1]);
            $l[2] = new Livro("PHP Avançado", "Eu", 1200, $p[1]);
            
            $l[0]->abrir();
            $l[0]->folhear(80);
            $l[0]->avancarPag();
            $l[0]->detalhes();
            
            $l[1]->abrir();
            $l[1]->folhear(150);
            $l[1]->avancarPag();
            $l[1]->detalhes();
            //print_r($l[1]); 
            ?>
        </pre>
    </body>
</html>

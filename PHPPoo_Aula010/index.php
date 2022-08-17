<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once './Pessoa.php';
        require_once './Aluno.php';
        require_once './Bolsista.php';
        require_once './Professor.php';
        require_once './Técnico.php';
        require_once './Visitante.php';
        
        //$p1 = new Pessoa();
        $p2 = new Visitante();
        $p2->setNome("Carlos");
        $p2->setIdade(41);
        $p2->setSexo("M");
        
        print_r($p2);
        ?>
        </pre>
    </body>
</html>

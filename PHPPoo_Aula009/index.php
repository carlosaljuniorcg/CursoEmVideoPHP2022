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
        require_once './Aluno.php';
        require_once './Professor.php';
        require_once './funcionario.php';
        
        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new funcionario();
        
        $p1->setNome("Carlos");
        $p2->setNome("Pedro");
        $p3->setNome("João");
        $p4->setNome("Rísia");
        
        $p2->setCurso("PHP");
        $p3->setSalario(2500.75);
        $p4->setSetor("RH");
        
        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
        
        
        ?>
        </pre>
    </body>
</html>

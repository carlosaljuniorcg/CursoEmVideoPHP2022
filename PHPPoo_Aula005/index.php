<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Conta Banco</title>
    </head>
    <body>
        <pre>
        <?php
            require_once './ContaBanco.php';
            $p1 = new ContaBanco();//Carlos
            $p2 = new ContaBanco();//Rísia
            $p1->abrirConta("CC");
            $p1->setDono("Carlos");
            $p1->setNumConta(111);
            $p2->abrirConta("CP");
            $p2->setDono("Risia");
            $p2->setNumConta(112); 
            
            $p1->depositar(300);
            $p2->depositar(500);
            
            $p2->sacar(100); 
            
            $p1->pagarMensal();
            $p2->pagarMensal();
            
            $p1->sacar(338);
            $p2->sacar(530);
            
            $p1->fecharConta();
            $p2->fecharConta();
            
            print_r($p1);
            print_r($p2);
        ?>
        </pre>
    </body>
</html>

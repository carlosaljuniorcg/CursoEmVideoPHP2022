<?php
    //str_word_count
   $frase = "Eu vou estudar PHP";
   $cont = str_word_count($frase, 0);//Contar as palavras
   $cont = str_word_count($frase, 1);//Criar um vetor
   $cont = str_word_count($frase, 2);//Criar mantendo o posicionamento das palavras.
   print($cont);

?>
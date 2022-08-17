<?php
    //Funçào trim elimina os espaços antes e depois do nome
   $nome="   Carlos Antônio Lima Júnior   ";
   echo(strlen($nome));
   $novo = trim($nome); //Elimina os espaços antes e depois das frases
   echo(strlen($novo));
   $novo1 = ltrim($nome);//Elimina apenas o espaços antes das frases
   echo(strlen($novo1));
   $novo2 = rtrim($nome);//Elimina apenas o espaços depois das frases
   echo(strlen($nome));

?>
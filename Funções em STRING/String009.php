<?php

    //strtolower
    //Deixa as letras todas minúsculas
    $nome = "Carlos Antônio";
    $nome2 = strtolower($nome);
    print("<h2>Seu nome é $nome2</h2>");

    //strtoupper
    //Deixa as letras todas maiusculas
    $nome = "Carlos Antônio";
    $nome2 = strtoupper($nome);
    print("<p><h2>Seu nome é $nome2</h2></p>");

    //ucfirst
    //Deixa apenas a primeira letra da palavras, frase ou paragrafo MAIUSCULA.
    $nome = "Carlos antônio";
    $nome2 = ucfirst($nome);
    print("<p><h2>Seu nome é $nome2</h2></p>");

    $nome = "carlOs antôNio";
    $nome2 = ucfirst(strtolower($nome));
    print("<p><h2>Seu nome é $nome2</h2></p>");

    //ucwords
    //Deixa as primeiras letras da frase em MAIUSCULAS.
    $nome = "carlos antônio";
    $nome2 = ucwords($nome);
    print("<p><h2>Seu nome é $nome2</h2></p>");

    //strrev
    //Essa função inverte o sentido das letras.
    $nome = "Risia Khristinne";
    $nome2 = strrev($nome);
    print("<p><h2>Seu nome é $nome2</h2></p>");

    //strpos
    //Saber a posição inicial da palavra na frase. A palvras tem que ser Idêntica.
    $frase = "Estou aprendendo PHP";
    $pos = strpos($frase, "PHP");
    echo "<p><h1>$frase<h1/><h2>A string foi encontrada na posição $pos<h2/></p>";

    //stripos
    //Saber a posição inicial da palavra na frase. A palavras náo precisa se idêntica.
    $frase = "Estou aprendendo PHP";
    $pos = stripos($frase, "php");//i vem de "ignorar".
    echo "<p><h1>$frase<h1/><h2>A string foi encontrada na posição $pos<h2/></p>"

?>
 
    

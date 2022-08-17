<?php

    //substr_count
    //Fala quantas vezes a palavras está contida na frase, paragrafo ou texto de forma idêntica.
    $frase = "Estou aprendendo PHP no curso em vídeo de PHP";
    $cont = substr_count($frase, "php");
    print("<p>PHP encontrado $cont vezes</p>");

    //substr
    //Faz um fatiamento de sua string.
    $site = "Carlos Antônio";
    $sub = substr($site, 0, 3);
    echo "<p>$sub </p>";

    //str_pad
    //
    $nome = "Carlos";
    //$novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);//Complementar a direita
    //$novo = str_pad($nome, 30, " ", STR_PAD_BOTH);
    $novo = str_pad($nome, 30, " ", STR_PAD_LEFT);
    print("<p>O senhor $novo é gostoso!</p>");

    //str_repeat
    //Repete o sinal, letra, palavra na frase.
    $txt = str_repeat("lindo", 5);
    print("<h2>Carlos é $txt</h2><br/>");
    print(str_repeat("-", 67));

    //str_replace
    //Basicamente substitui um palavra pela outra. A palavra tem que ser idêntica.
    $frase = "Gosto de estudar Matemática";
    $novafrase = str_replace("Matemática", "PHP", $frase);
    echo "<p><h2>$novafrase</h2></p>";
    //str_ireplace
    //Não precisa que as palavras sejam idênticas.
    $frase = "Gosto de estudar Matemática";
    $novafrase = str_ireplace("matematica", "PHP", $frase);
    echo "<p><h2>$novafrase</h2></p>";

?>
 
    

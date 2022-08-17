<?php

    //explode
    //Ele pega cada palavra e joga em um indice.
    $site="Curso em Video";
    $vetor = explode(" ", $site);
    print_r($vetor);
    
    //str_split
    //Ele pela letra e joga em um indice;
    $nome ="Carlos";
    $vetor = str_split($nome);
    
    //implode ou join.
    //Forma frase usando os vetores disponiveis.
    $vetor[0] = "Curso";
    $vetor[1] = "em";
    $vetor[2] = "Vídeo";
    $texto = implode("#", $vetor);
    print($texto);
?>
 
    

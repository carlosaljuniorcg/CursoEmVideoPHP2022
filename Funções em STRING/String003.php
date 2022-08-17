<?php
    //Funçào wordwrap
    //Como o proprio nome diz, ele faz a quebra de linhas e palavras.
   $txt="Este é um exemplo de string gigante que...";
   $res = wordwrap($txt, 20, "<br/>\n");
   //$res = wordwrap($txt, "<br>\n", false);
   echo($res);


?>
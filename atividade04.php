<?php
 $maximo = 5;
 $continua = true;
 $i=0;
 while ($continua){
    $valor = readline("Digite um numero: ");
    $i++;
    if($i == $maximo){
        $continua= false;

    }
 }
 echo "Fim";
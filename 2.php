<?php

print "Coloque sua nota:\n";
$nota = fgets (STDIN);

 do{

    print "\nNota inválida";
    print "\nDigite uma nova nota;\n";
    $nota = fgets (STDIN);
 }while ($nota > 10 or $nota < 0);

 print "\nNota valida,Você digitou {$nota}\n";

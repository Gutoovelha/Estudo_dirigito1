<?php

print  "Tente acertar o número:";
$chute = (int) fgets(STDIN);

if($chute== 42){
    print "Você acertou\n";
}else{
    print "Você errou\n";
}

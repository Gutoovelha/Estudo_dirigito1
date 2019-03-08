<?php

$a = 10;
$b = 6;
$c = 5;



if ($a==$b or $a==$c or $b==$c) {
    print "esse triangulo é isósceles";
}

elseif ($a==$b and $b==$c) {
    print "esse triangulo é equilátero";
}

elseif ($a<>$b and $b<>$c) {
    print "esse triangulo é escaleno";
}

else {
    print "não é um triangulo";
} 
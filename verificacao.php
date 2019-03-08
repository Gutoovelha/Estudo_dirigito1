<?php

print "Digite o nome do seu catioro";
$nome= fgets (STDIN);
print "Digite o peso do seu catioro";
$peso= fgets (STDIN);

if ($peso<=2) {
    print "esse catioro late fino:au au au";
}

elseif ($peso<=10) {
    print "esse catioro tem um belo latido";
}

elseif ($peso>10) {
    print "esse cachorro late grosso: woof woof";
}


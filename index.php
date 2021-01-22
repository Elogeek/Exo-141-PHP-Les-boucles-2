<?php
for($i =0; $i < 10; $i++) {
    echo 'la boucle vaut '.$i.'<br>';
}

$number = 0;
$numberTwo = 100;
$result = $number * $numberTwo;
echo $result.'<br>';

for($number = 0; $number < 20; $number++) {
    echo 'je vaut actually '.$number.'<br>';
}

$a = 100;
$b = 2;
$add = $a * $b;
echo $add.'<br>';

for($a = 100; $a>80; $a--) {
    echo 'coucou je suis à '.$a.'<br>' ;
}

$un = 1;
do {
    echo 'contient la valeur '.$un.'<br>';
    $un++;
} while($un <= 5);

$toto = 1;
for($toto = 1; $toto < 15; $toto ++) {
    echo 'on y arrive presque '.'<br>';
}

$tutu = 20;
for($tutu = 20; $tutu > 0; $tutu--) {
    echo "c'est presque bon";
}

for($x = 1; $x < 100; $x+=15) {
    echo "On tient le bon bout".'<br>';
}

for($x = 200; $x > 0; $x-=12) {
    echo "Enfin".'<br>';
}

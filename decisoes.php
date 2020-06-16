<?php

$idade = 18;


echo "Voce so pode entrar se tiver mais de 18 anos" . PHP_EOL;

if( $idade >= 18 ) {
    echo "Voce tem $idade anos". PHP_EOL;
    echo "Pode entrar!";
} else {
    echo "Voce tem $idade anos". PHP_EOL;
    echo "Nao pode entrar!";
}

while ($contador <= 15) {
    echo "#$contador". PHP_EOL;
    $contador = $contador + 1;
}
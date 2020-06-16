<?php

$contasCorrentes = [
    1234567890 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],

    2314533890 => [
        'titular'=> 'Maria',
        'saldo' => 10000
    ],
    3217654890 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

/** for tradicional
for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i] ['titular'] . PHP_EOL;
} */


foreach ($contasCorrentes as $conta) {
    echo $conta['titular']. PHP_EOL;
}

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf. PHP_EOL;
}
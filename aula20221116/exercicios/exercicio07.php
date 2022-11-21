<?php

function calculaIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    switch ($imc) {
        case $imc < 20:
            $mensagem = 'Abaixo do peso';
            break;
        case $imc > 20 && $imc < 25:
            $mensagem = 'Peso normal';
            break;
        case $imc > 25 && $imc < 30:
            $mensagem = 'Sobre peso';
            break;
        case $imc > 30 && $imc < 40:
            $mensagem = 'Obeso';
            break;
        case $imc > 40:
            $mensagem = 'Obeso mórbido';
            break;
    }
    return $mensagem;
}

echo '<br>'.calculaIMC(81,1.7);
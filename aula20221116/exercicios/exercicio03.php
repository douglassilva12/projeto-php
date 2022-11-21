<?php

function soma($n1,$n2){
    return $n1+$n2;
}
function subtracao($n1,$n2){
    return $n1-$n2;
}
function divisao($n1,$n2){
    return $n1/$n2;
}
function multiplicacao($n1,$n2){
    return $n1*$n2;
}

echo 'soma: '.soma(10,5);
echo '<br>subtração: '.subtracao(10,5);
echo '<br>divisão: '.divisao(10,5);
echo '<br>multiplicação: '.multiplicacao(10,5);
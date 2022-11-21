<?php

function parImpar($numero){
    if($numero%2==0){
        echo 'par';
    }else{
        echo 'impar';
    }
}

echo 'Número impar: 3<br>';
parImpar(3);
echo '<br>';
echo 'Número par: 4<br>';
parImpar(4);
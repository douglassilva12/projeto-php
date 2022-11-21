<?php

function comparacao($n1, $n2)
{
    $mensagem = '';
    
    if ($n1 > $n2) {
        $mensagem = 'O primeiro número (' . $n1 . ') é maior que o segundo (' . $n2 . ')';
    }
    if ($n1 < $n2) {
        $mensagem = 'O primeiro número (' . $n1 . ') é menor que o segundo (' . $n2 . ')';
    }
    if ($n1 == $n2) {
        $mensagem = 'O primeiro número (' . $n1 . ') é igual que o segundo (' . $n2 . ')';
    }
    return $mensagem;
}

echo '<br>MENOR: ' . comparacao(4, 5);
echo '<br>IGUAL: ' . comparacao(4, 4);
echo '<br>MAIOR: ' . comparacao(6, 5);

<?php

function verificaNumeroDivisivel($n1, $n2 = 2)
{
    //forma a
    $divisivel = ($n1 % $n2 == 0) ? true : false;

    //forma b
    if ($divisivel = ($n1 % $n2 == 0)) {
        $divisivel = true;
    } else {
        $divisivel = false;
    }
    return $divisivel;
}

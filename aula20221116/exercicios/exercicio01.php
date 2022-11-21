<?php

define("MAIOR_IDADE", 18);
define("PERC_ICMS", 25);
define("TEXTO_BOAS_VINDAS", "Seja ben vindo ao nosso site");

$frase = TEXTO_BOAS_VINDAS . ". Eu tenho" . MAIOR_IDADE . "anos de idade. O percentual de ICMS é " . PERC_ICMS . "%.";

echo $frase;

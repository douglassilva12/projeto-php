<?php

echo 'Letra A<br>';
echo '<pre>'.print_r($_SERVER,true). '</pre>';

echo 'Letra B<br>';
echo 'IP do pc: ' .$_SERVER["REMOTE_ADDR"];
echo '<br><br>';

echo 'Letra C<br>';
echo 'Nome do arquivo atual: ' .$_SERVER["SERVER_NAME"];

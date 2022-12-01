<?php

$aDados = array(1, 2, 3);

echo '<pre>' . print_r($aDados, true) . '</pre>';

foreach ($aDados as $key => $value) {
    echo '<br> Chave: ' . $key . ' valor: ' . $value;
}

echo '<br><h1> Array associativo</h1>';
$aDados2 = array("codigo" => 1, "nome" => "Joao", "telefone" => "47999857426");

$sql_insert = "";
$dadosInsert = "";
$primeiraVez = true;

foreach ($aDados2 as $key => $value) {
    echo '<br> Chave: ' . $key . ' valor: ' . $value;
    if ($primeiraVez) {
        $primeiraVez = false;
        $dadosInsert = $dadosInsert . $value;
    } else {
        $dadosInsert = $dadosInsert . ',' . $value;
    }
}

$sql_insert = "insert into tbpessoa(codigo,nome,telefone) values($dadosInsert)";

echo '<h1> sql de insert</h1>' . $sql_insert;

echo '<h1>Exemplo de função explode em PHP:</h1>';

$str='one|two|three|four';

echo 'String:' .$str.'<br>';

$aDadosNovoArray=explode('|',$str,2);
$aDadosNovoArray=explode('|',$str);

echo'<pre>' .print_r($aDadosNovoArray,true).'</pre>';

//jwt token
$token="";
$aDadosToken=explode('.',$token);
echo '<pre>' .print_r($aDadosToken,true).'</pre>';
<?php

require_once "../classes/Bebida.php";
require_once "../classes/Lanche.php";
require_once "../classes/Porcao.php";

$categoria = $_POST["categoria"];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];

if ($categoria == 2) {

    $volume = $_POST["volume"];
    $recipiente = $_POST["recipiente"];

    $produto = new Bebida($nome, $descricao, $preco, $volume, $recipiente);

} elseif ($categoria == 1) {

    $produto = new Lanche($nome, $descricao, $preco);

} else {

    $produto = new Porcao($nome, $descricao, $preco);

}

//$produto->salvar();
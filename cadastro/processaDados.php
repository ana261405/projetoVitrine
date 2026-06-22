<?php

require_once "../produtos/Bebida.php";
require_once "../produtos/Lanche.php";
require_once "../produtos/Porcao.php";

$categoria = $_POST["categoria"];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
//$imagem DEFINIÇÃO DA IMAGEM  

if ($categoria == 2) {

    $volume = $_POST["volume"];
    $recipiente = $_POST["recipiente"];

    $produto = new Bebida($nome, $descricao, $preco, $imagem, $categoria, $volume, $recipiente);

} elseif ($categoria == 1) {

    $produto = new Lanche($nome, $descricao, $preco, $imagem, $categoria);

} else {

    $produto = new Porcao($nome, $descricao, $preco, $imagem, $categoria);

}
$produto->imprimir();
//$produto->salvar();
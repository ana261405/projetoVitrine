<?php

//aqui ficam todas as funções construtoras dos produtos que são bebidas
require_once "Bebida.php";
// função construct 
//($nome, $preco, $descricao, $imagem, $volume, $recipiente)
$beb = new Bebida("Coca Cola", 6.00 , "bebida gaseificada", "imgs/cocacola350ml.png", 350, "Lata");
$beb->imprimir(); 


    
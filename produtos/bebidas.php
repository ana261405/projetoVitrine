<?php

//aqui ficam todas as funções construtoras dos produtos que são bebidas


require_once "Bebida.php";
// função construct 
//($nome, $preco, $descricao, $volume, $recipiente, $imagem)
$beb = new Bebida("Coca Cola", 6.00 , "bebida gaseificada", 350, "Lata", "imgs/cocacola350ml.png");
$beb->imprimir();


    
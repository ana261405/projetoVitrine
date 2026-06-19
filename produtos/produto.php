<?php 
class Produto{
    protected  $preco, $descricao, $id, $nome;


    public function __construct($nome, $preco, $descricao){
        $this->id = rand();
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;  
    }

    
}

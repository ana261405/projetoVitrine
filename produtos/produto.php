<?php 
class Produto{
    protected  $preco, $descricao, $id, $nome, $categoriaId;


    public function __construct($nome, $preco, $descricao, $categoriaId){
        $this->id = rand();
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
        $this->categoriaId = $categoriaId;  
    }

    
}

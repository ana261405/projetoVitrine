<?php 
class Produto{
    protected  $preco, $descricao, $id, $nome, $imagem, $categoriaId;


    public function __construct($nome, $preco, $descricao, $imagem, $categoriaId){
        $this->id = rand();
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao; 
        $this->imagem = $imagem; 
        $this->categoriaId = $categoriaId; 
    }

    public function imprimir(){
        echo "<div class='produto'>" . 
            //adicionar a cateogira do produto
            "<h3> $this->nome </h3> <br> " . 
            "$this->descricao <br>" .
            "Preço: R$ $this->preco <br>".
           
        "</div>";
    }
}

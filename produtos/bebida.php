<?php
/* neste arquivo fica apenas a definição da classe e os métodos dessa classe */

require_once 'Produto.php';
// inclusão do arquivo, require é que precisa do arquivo para rodar
//include é que roda sem o arquivo, _once= uma única vez

class Bebida extends Produto{
    private $volume, $recipiente, $imagem; 

    public function __construct($nome, $preco, $descricao, 
                    $volume, $recipiente, $imagem){
        Parent::__construct($nome, $preco, $descricao);
        $this->volume = $volume;
        $this->recipiente = $recipiente;
        $this->imagem = $imagem; 
    }

    public function imprimir(){
        echo "<div class='produto'>" . 
            
            "<h3> $this->nome </h3> <br> " . 
            "$this->descricao <br>" .
            "Preço: R$ $this->preco <br>".
            "Volume: $this->volume mls <br>".
           
        "</div>";
    }


}

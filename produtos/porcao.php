<?php
/* neste arquivo fica apenas a definição da classe e os métodos dessa classe */

require_once 'Produto.php';
// inclusão do arquivo, require é que precisa do arquivo para rodar
//include é que roda sem o arquivo, _once= uma única vez

class Porcao extends Produto{

    public function __construct($nome, $preco, $descricao, $imagem){
        Parent::__construct($nome, $preco, $descricao, $imagem, 3); 
         
    }


}

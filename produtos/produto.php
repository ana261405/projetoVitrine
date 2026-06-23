<?php 
require_once("../conexaoBanco.php"); 

class Produto{
    protected  $preco, $descricao, $nome, $imagem, $categoriaId;


    public function __construct($nome, $preco, $descricao, $imagem, $categoriaId){
        
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao; 
        $this->imagem = $imagem; 
        $this->categoriaId = $categoriaId; 
    }

    public function imprimir(){

        $categoria = "";

        if($this->categoriaId == 1){
            $categoria = "<h3>Lanche</h3><br>";
        }else if($this->categoriaId == 3){
            $categoria = "<h3>Porção</h3><br>";
        }

        echo "<div class='produto'>
                $categoria
                <h3>$this->nome</h3><br>
                $this->descricao<br>
                Preço: R$ $this->preco<br>
                <img src='../$this->imagem'> <br> 
            </div>";
    }   
    

    public function salvar(){
        $banco = new ConexaoBanco();

        $nome = $this->nome;
        $preco = $this->preco;
        $descricao = $this->descricao; 
        $imagem = $this->imagem; 
        $categoriaId = $this->categoriaId;

        $mensagem = ''; 
        

        $sql = "INSERT INTO produtos ( nome, descricao, preco, imagem, categoria)
                VALUES ('$nome', '$descricao', '$preco', '$imagem', '$categoriaId')";

        if($banco->query($sql)){
            $mensagem= "Cadastro realizado!";
            //colocar um redirecionamento aqui
        }else{
            echo "Erro ao cadastrar." . mysqli_error($banco->con);
        }

    }

}

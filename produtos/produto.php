<?php 
require_once(__DIR__ . "/../bancodedados/conexaoBanco.php");

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

        echo "<div class='produto'>
                <h3>$this->nome</h3><br>
                $this->descricao<br>
                Preço: R$ $this->preco<br>
                <img src='./$this->imagem'> <br> 
            </div>";
    }   
    

    public function salvar(){
        $banco = new ConexaoBanco();

        $nome = $this->nome;
        $preco = $this->preco;
        $descricao = $this->descricao; 
        $imagem = $this->imagem; 
        $categoriaId = $this->categoriaId;
        

        $sql = "INSERT INTO produtos ( nome, descricao, preco, imagem, categoria)
                VALUES ('$nome', '$descricao', '$preco', '$imagem', '$categoriaId')";

        if($banco->query($sql)){

            header("Location: ../cadastro/cadastrar.php?mensagem=sucesso");
        }else{
            
             if (mysqli_errno($banco->con) == 1062) {
                header("Location: ../cadastro/cadastrar.php?erro=duplicado");
                exit;
            } else {
                header("Location: ../cadastro/cadastrar.php?mensagem=erro");
                echo "Erro ao cadastrar: " . mysqli_error($banco->con);
            }

        }

    }

}

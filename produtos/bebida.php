<?php
/* neste arquivo fica apenas a definição da classe e os métodos dessa classe */

require_once 'Produto.php';
// inclusão do arquivo, require é que precisa do arquivo para rodar
//include é que roda sem o arquivo, _once= uma única vez

class Bebida extends Produto{
    private $volume, $recipiente; 

    public function __construct($nome, $preco, $descricao, $imagem, $categoriaId, $volume, $recipiente){
        Parent::__construct($nome, $preco, $descricao,  $imagem, 2);
        //eu herdo o construtor do pai porém já coloco a categoria 2 sem a necessidade de incluir esse id depois 
        $this->volume = $volume;
        $this->recipiente = $recipiente;
    }

    public function imprimir(){
        echo "<div class='produto'>" . 
            "<h3>Bebida</h3> <br> " .
            "<h3> $this->nome </h3> <br> " . 
            "$this->descricao <br>" .
            "Preço: R$ $this->preco <br>".
            "Volume: $this->volume mls <br>".
            "Recipiente : $this->recipiente <br>".
           
        "</div>";
    }
    public function salvar(){
        $banco = new ConexaoBanco();

        $nome = $this->nome;
        $preco = $this->preco;
        $descricao = $this->descricao; 
        $imagem = $this->imagem; 
        $categoriaId = $this->categoriaId;
        $volume = $this->volume; 
        $recipiente = $this->recipiente; 

        $mensagem = ''; 
        
        $sql = "INSERT INTO produtos ( nome, descricao, preco, imagem, categoria)
                VALUES ('$nome', '$descricao', '$preco', '$imagem', '$categoriaId')";

       if($banco->query($sql)){
            // pega o último id criado e faz a inserção da tabela de bebidas
            $idProduto = mysqli_insert_id($banco->con);

            //insere os dados restantes da bebida
            $sqlBebida = "INSERT INTO bebida (idProduto, volume, recipiente)
                        VALUES ('$idProduto', '$volume', '$recipiente')";

            if($banco->query($sqlBebida)){
               echo "<script> alert('Cadastro realizado com sucesso!') </script>"; 
               
            }else{
                echo "Erro ao cadastrar bebida: " . mysqli_error($banco->con);
            }
        }else{
            echo "Erro ao cadastrar produto: " . mysqli_error($banco->con);
        }
    }        

}

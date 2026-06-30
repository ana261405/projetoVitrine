<?php
require_once("conexaoBanco.php");
require_once("./produtos/bebida.php"); 
require_once("./produtos/lanche.php"); 
require_once("./produtos/porcao.php"); 


//buscar categoria
function buscarTodos(){
    $banco= new ConexaoBanco(); // variavel local
    $sql = "SELECT * FROM produtos";
    $resposta =  $banco->query($sql);
    //caso ocorra um erro na query 
    if(!$resposta){
        die("Houve um erro: " .mysqli_error($banco->con));
    }else{
        //percorre cada linha de resultados. Cada row é um item do banco de dados, ou seja, um produto
        while ( $row = mysqli_fetch_assoc($resposta)){

            $id = $row['id'];
            $nome = $row['nome'];
            $descricao = $row['descricao'];
            $preco = $row['preco'];
            $imagem = $row['imagem'];
            $categoria = $row['categoria'];

            //caso seja um lanche

            if($row['categoria'] == 1){
                $produto = new Lanche($nome, $preco, $descricao, $imagem, $categoria);
                $produto->imprimir(); 

            }else if($row['categoria'] == 2){
                //caso seja uma bebida
                $sqlBebida= "SELECT * FROM bebida WHERE idProduto = $id";
                $respostaBebida =  $banco->query($sqlBebida);
                $rowBebida = mysqli_fetch_assoc($respostaBebida);

                if(!$respostaBebida){
                    die("Houve um erro: " .mysqli_error($banco->con));
                }else{
                    
                    $volume = $rowBebida['volume'];
                    $recipiente= $rowBebida['recipiente'];
                    $produto = new Bebida($nome, $preco, $descricao, $imagem, $categoria, $volume, $recipiente); 
                    $produto->imprimir();
                }
                
            }else if($row['categoria'] == 3){
                //caso seja uma porção
                 $produto = new Porcao($nome, $preco, $descricao, $imagem, $categoria);
                 $produto->imprimir();
            }
        }
    }
    
}
function buscarCategoria(){

}
function buscarPalavra(){


}


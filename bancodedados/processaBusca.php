<?php
require_once("conexaoBanco.php");
require_once("./produtos/bebida.php"); 
require_once("./produtos/lanche.php"); 
require_once("./produtos/porcao.php"); 

function buscarLanches($banco){

    $sql = "SELECT * FROM produtos WHERE categoria=1";
    $resposta =  $banco->query($sql);
    //caso ocorra um erro na query 
    if(!$resposta){
        die("Houve um erro: " .mysqli_error($banco->con));
    }else{
        //percorre cada linha de resultados. 
        // Cada row é um item do banco de dados, ou seja, um produto
        // nesse caso são todos da categoria 1 ==> lanches
        while ( $row = mysqli_fetch_assoc($resposta)){

            $id = $row['id'];
            $nome = $row['nome'];
            $descricao = $row['descricao'];
            $preco = $row['preco'];
            $imagem = $row['imagem'];
            $categoria = $row['categoria'];
            
    
            $produto = new Lanche($nome, $preco, $descricao, $imagem, $categoria);
            $produto->imprimir(); 
        }
    }
}

function buscarPorcoes($banco){

    $sql = "SELECT * FROM produtos WHERE categoria=3";
    $resposta =  $banco->query($sql);
    //caso ocorra um erro na query 
    if(!$resposta){
        die("Houve um erro: " .mysqli_error($banco->con));
    }else{
        //percorre cada linha de resultados. 
        // Cada row é um item do banco de dados, ou seja, um produto
        // nesse caso são todos da categoria 3 ==> porções
        while ( $row = mysqli_fetch_assoc($resposta)){

            $id = $row['id'];
            $nome = $row['nome'];
            $descricao = $row['descricao'];
            $preco = $row['preco'];
            $imagem = $row['imagem'];
            $categoria = $row['categoria'];
            
    
            $produto = new Porcao($nome, $preco, $descricao, $imagem, $categoria);
            $produto->imprimir(); 
        }
    }
}

function buscarBebidas($banco){

    $sql = "SELECT * FROM produtos WHERE categoria=2";
    $resposta =  $banco->query($sql);
    //caso ocorra um erro na query 
    if(!$resposta){
        die("Houve um erro: " .mysqli_error($banco->con));
    }else{
        //percorre cada linha de resultados. 
        // Cada row é um item do banco de dados, ou seja, um produto
        // nesse caso são todos da categoria 3 ==> porções
        while ( $row = mysqli_fetch_assoc($resposta)){

            $id = $row['id'];
            $nome = $row['nome'];
            $descricao = $row['descricao'];
            $preco = $row['preco'];
            $imagem = $row['imagem'];
            $categoria = $row['categoria'];

            //faz a pesquisa na tabela auxiliar de bebidas
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
        }
    }
}


//buscar categoria
function buscarTodosCategoria(){
    $banco= new ConexaoBanco(); // variavel local
    echo "<h2> Lanches </h2>"; 
    buscarLanches($banco);
    echo "<h2> Porções </h2>"; 
    buscarPorcoes($banco); 
    echo "<h2> Bebidas </h2>";  
    buscarBebidas($banco); 
}

function buscarCategoria(){

}
function buscarPalavra(){


}


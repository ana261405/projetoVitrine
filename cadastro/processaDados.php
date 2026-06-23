<?php

require_once "../produtos/Bebida.php";
require_once "../produtos/Lanche.php";
require_once "../produtos/Porcao.php";

//verifica se o formulário está ok
if(isset($_POST["nome"])){
    
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $categoria = $_POST["categoria"];

    //não houve erro       
    if(!$_FILES['imagem']['error']){
                        //código de erro do upload
        //esse print só serve para debug
        //print_r($_FILES);
        $nomeArquivo = basename($_FILES['imagem']['name']);
        $destino = "../imgs/" .$nomeArquivo; 
        

        //verifica se o diretorio 'imgs' existe; caso não, cria
        if ( !file_exists('imgs') || !is_dir('imgs')){
            mkdir('imgs');
        }
        
        //move o arquivo enviado
        move_uploaded_file($_FILES['imagem']['tmp_name'], $destino);
        
        //salva o caminho para ser armazenado no banco de dados
        $imagemBanco = "imgs/" .$nomeArquivo;
        

    }
    if ($categoria == 2) {

        $volume = $_POST["volume"];
        $recipiente = $_POST["recipiente"];

        $produto = new Bebida($nome, $preco, $descricao, $imagemBanco, $categoria, $volume, $recipiente);

    } elseif ($categoria == 1) {

        $produto = new Lanche($nome, $preco, $descricao, $imagemBanco, $categoria);

    } else {

        $produto = new Porcao($nome, $preco, $descricao, $imagemBanco, $categoria);

    }

    $produto->salvar();
}
   


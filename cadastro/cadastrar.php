<?php $bodyClass = "fundo-cadastro"; 
include "../html/cabecalho.php"; ?>

<h2 class= "bemvindo-cad">Bem vindo a página de cadastro</h2>
<!-- caso não esteja logado tem que ter uma condição aqui *!!!* -->

<?php
if (isset($_GET['erro']) && $_GET['erro'] == 'duplicado') {
    echo "<p id='mensagemErro' style='color:red'>Já existe um produto com esse nome. 
                                                Tente adicionar outro produto.</p>";
}
if (isset($_GET['mensagem']) && $_GET['mensagem'] == 'sucesso') {
    echo "<p id='mensagemSucesso' style='color:green'>Cadastro realizado com sucesso!</p>";
}else if(isset($_GET['mensagem']) && $_GET['mensagem'] == 'erro'){
    echo "<p id='mensagemErro' style='color:red'>Erro ao cadastrar. Entre em contato com a administração.</p>";
}

?>

<!-- ao submeter esse form os campos vão seer validados, também poderia ser utilizado required, não me atentei-->  
<form action="../bancodedados/processaCadastro.php" method="post"  class="cadastrar" id="cadastro" onsubmit="return validarForm()" enctype="multipart/form-data">
<!-- essa label esta vinculada ao select com o id categoria -->
<label for="categoria">Categoria:</label>
<select id="categoria" name="categoria" onchange="validarCategoria()">
    <option value= "">Selecione</option>
    <option value= "1">Lanches</option> <!-- categoria 1 --> 
    <option value= "2">Bebidas</option> <!-- categoria 2 --> 
    <option value= "3">Porções</option> <!-- categoria 3 --> 
</select>
<!-- importante: a propriedade id é usada no js e a propriedade name é usada no php -->
<br> 
<div class= "cad-form">
<label>Nome:</label>
<input id="nome" name="nome" type="text" placeholder="Nome do produto"></input><br>
<label>Descrição:</label>
<textarea id="descricao" name ="descricao" placeholder="Descrição do produto"></textarea><br>
<!-- o preço pode ser inserido com casas decimais e pode ser no minimo 0 -->
<label>Preço:</label>
<input id="preco" name="preco" type="number" step="0.01" min="0" placeholder="Preço do produto"></input><br>
<label>Imagem:</label>
<input id="imagem" name="imagem" type="file" accept="image/*"></input><br>
<!-- aceita apenas imagens -->
</div> 

<!-- caso seja uma bebiba tem que adicionar mais dois campos -->
<div id= "campoBebida">
    <label>Volume:</label>
    <input id="volume" name="volume" type="number" step="0.01" min="0" placeholder="Volume da bebida em ml"></input><br>
    <label>Recipiente:</label>
    <input id="recipiente" name="recipiente" type="text" placeholder="Recipiente da bebida"></input><br>
</div> 

<button type="submit" form="cadastro">Cadastrar</button>

</form>


<script src="../js/cadastro.js"> </script> 
<?php include "../html/rodape.php"; ?>
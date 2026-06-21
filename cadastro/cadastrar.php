<?php include "../html/cabecalho.php"; ?>

<h2>Bem vindo a página de cadastro</h2>
<!-- caso não esteja logado tem que ter uma condição aqui *!!!* -->

<!-- ao submeter esse form os campos vão seer validados -->
<form id="cadastro" onsubmit="validarForm()">

<!-- essa label esta vinculada ao select com o id categoria -->
<label for="categoria">Categoria:</label>
<select id="categoria" name="categoria" onchange="validarCategoria()">
    <option value= "1">Lanches</option> <!-- categoria 1 --> 
    <option value= "2">Bebidas</option> <!-- categoria 2 --> 
    <option value= "3">Porções</option> <!-- categoria 3 --> 
</select>

<br> 
<label>Nome:</label>
<input id="nome" type="text" placeholder="Nome do produto"></input><br>
<label>Descrição:</label>
<input id="descricao" type="text" placeholder="Descrição do produto"></input><br>
<!-- o preço pode ser inserido com casas decimais e pode ser no minimo 0 -->
<label>Preço:</label>
<input id="preco" type="number" step="0.01" min="0" placeholder="Preço do produto"></input><br>
<label>Imagem:</label>
<input id="imagem" type="file" accept="image/*"></input><br>
<!-- aceita apenas imagens -->


<!-- caso seja uma bebiba tem que adicionar mais dois campos
($nome, $preco, $descricao, $volume, $recipiente, $imagem) -->
<div id= "campoBebida">
    <label>Volume:</label>
    <input id="volume" type="number" step="0.01" min="0" placeholder="Volume da bebida"></input><br>
    <label>Recipiente:</label>
    <input id="recipiente" type="text" placeholder="Recipiente da bebida"></input><br>
</div> 

<button type="submit" form="cadastro">Cadastrar</button>

</form>

<script src="../js/cadastro.js"> </script> 
<?php include "../html/rodape.php"; ?>
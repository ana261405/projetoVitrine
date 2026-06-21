<?php include "../html/cabecalho.php"; ?>

<h2>Bem vindo a página de cadastro</h2>

<!-- caso não esteja logado tem que ter uma condição aqui -->

<!-- essa label esta vinculada ao select com o id categoria -->
<label for="categoria">Categoria:</label>

<select id="categoria" name="categoria">
    <option value= "1">Lanches</option> <!-- categoria 1 --> 
    <option value= "2">Bebidas</option> <!-- categoria 2 --> 
    <option value= "3">Porções</option> <!-- categoria 3 --> 
</select>

<form>
    <label>Nome</label>
    <input></input><br>
    <label>Descrição</label>
    <input></input><br>
    <label>Preço</label>
    <input></input><br>
</form> 

<!-- caso seja uma bebiba tem que adicionar mais dois campos
($nome, $preco, $descricao, $volume, $recipiente, $imagem) -->
<form id= "campoBebida">
    <label>Volume</label>
    <input></input><br>
    <label>Recipiente</label>
    <input></input><br>
    <label>Imagem</label>
    <input></input><br>
</form> 

<button type="submit">Cadastrar</button>

<script src="../js/cadastro.js"> </script> 
<?php include "../html/rodape.php"; ?>
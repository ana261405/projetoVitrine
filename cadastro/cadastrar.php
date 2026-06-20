<?php include "/html/cabecalho.php"; ?>

<h2>Bem vindo a página de cadastro</h2>

<!-- caso não esteja logado tem que ter uma condição aqui -->

<label>Categoria:</label>

<select>
    <option> Selecione uma categoria</option>
    <option>Bebidas</option>
    <option>Lanches</option>
    <option>Porções</option>
</select>

<form>
    <label>Nome</label>
    <input></input><br>
    <label>Descrição</label>
    <input></input><br>
    <label>Preço</label>
    <input></input><br>
    <button type="submit">Cadastrar</button>
   
</form> 

<?php include "/html/rodape.php"; ?>
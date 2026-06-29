<?php include "html/cabecalho.php"; ?>


<h2>Bem vindo Página de Pesquisa</h2>

<form method="get" id="pesquisaPalavra"> 
    <input type="text" id="textoPalavra" name="textoPalavra" placeholder="Digite uma palavra-chave"></input>
    <button type="submit">Pesquisar</button>
</form>

<p>Faça uma pesquisa por categoria: </p> 
<form method="get" id="formPesquisaCategoria" name="pesquisaCategoria"> 
    <label for="categoria">Categorias:</label>
    <select id="categoria" name="categoria">
        <option value= "">Selecione</option>
        <option value= "1">Lanches</option> <!-- categoria 1 --> 
        <option value= "2">Bebidas</option> <!-- categoria 2 --> 
        <option value= "3">Porções</option> <!-- categoria 3 --> 
    </select>
    <button type="submit">Pesquisar</button>
</form> 

<?php include "html/rodape.php"; ?>
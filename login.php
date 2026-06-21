<?php include "html/cabecalho.php"; ?>

<h2>Bem vindo a página de login</h2>

<form>
    <label>Nome</label>
    <input></input><br>
    <label>Email</label>
    <input></input><br>
    <label>Senha</label>
    <input></input><br>
    <button type="submit">Login</button>
   
</form> 

<hr> 

<!-- caso não esteja logado tem que ter uma condição aqui -->
<nav> 
    <p> <a href="cadastro/cadastrar.php">Cadastrar</a> </p> 
    <p> <a href=" ">Editar</a> </p> 
    <p> <a href=" ">Excluir</a> </p> 
    <p> <a href="index.php">Visualizar Todos</a> </p> 
</nav>



<?php include "html/rodape.php"; ?>
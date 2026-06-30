<?php include "html/cabecalho.php"; ?>

<h2>Bem vindo a página de login</h2>

<form class="login">
    <label>Nome</label>
    <input></input><br>
    <label>Email</label>
    <input></input><br>
    <label>Senha</label>
    <input></input><br>
    <button type="submit">Login</button>
   
</form> 

 

<!-- caso não esteja logado tem que ter uma condição aqui -->
<nav class="opcoes"> 
    <button> <a href="cadastro/cadastrar.php">Cadastrar</a> </button>    
    <button> <a href=" ">Editar</a> </button>    
    <button> <a href=" ">Excluir</a> </button>   
    <button> <a href="index.php">Visualizar Todos</a> </button>  
</nav>



<?php include "html/rodape.php"; ?>
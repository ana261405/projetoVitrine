<?php 
$bodyClass ="fundo-index"; 
include "html/cabecalho.php"; 
include "bancodedados/processaBusca.php"
?>

<h2>Itens da vitrine</h2>

<?php
buscarTodos();
?>



<?php include "html/rodape.php"; ?>
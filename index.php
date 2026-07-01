<?php 
$bodyClass ="fundo-index"; 
include "html/cabecalho.php"; 
include "bancodedados/processaBusca.php"
?>

<h2>Itens da vitrine</h2>

<?php
buscarTodosCategoria();
?>



<?php include "html/rodape.php"; ?>
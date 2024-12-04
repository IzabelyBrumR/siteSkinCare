<?php
// Inicializa ou recupera a sessão
session_start();

// Limpa o array do carrinho
$_SESSION['carrinho'] = array();

// Redireciona de volta para a página principal ou para onde desejar

header('location:../carrinho.php');

exit();
?>

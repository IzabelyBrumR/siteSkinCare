<?php
session_start();
if(isset($_REQUEST['itensId'])){
    $itemId = $_REQUEST['itensId'];

    // Verificar se o item já está no carrinho
    if(isset($_SESSION['carrinho'][$itemId])) {
        unset($_SESSION['carrinho'][$itemId]);
    }
    header('location:../carrinho.php?idItemCarrinho='.$itemId);
}
?>
<?php
session_start();
if(isset($_REQUEST['itensId'])){
    $itemId = $_REQUEST['itensId'];

    // Verificar se o item já está no carrinho
    if(isset($_SESSION['adm'][$itemId])) {
        unset($_SESSION['adm'][$itemId]);
    }
    header('location:../adminPage.php?idItemCarrinho='.$itemId);
}
?>
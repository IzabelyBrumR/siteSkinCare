<?php
session_start();

if(isset($_REQUEST['itensId'])){
    $itemId = $_REQUEST['itensId'];

    // Verificar se o item já está no carrinho
    if(isset($_SESSION['carrinho'][$itemId])) {
        $_SESSION['carrinho'][$itemId]++; // Se estiver, incrementar a quantidade
    } else {
        $_SESSION['carrinho'][$itemId] = 1; // Se não estiver, adicionar ao carrinho com quantidade 1
    }

    echo '<script>';
    echo 'alert("Produto adicionado ao carrinho")';
    echo '</script>'; 
  
    header('location:../confirmar.php?idItemCarrinho='.$itemId);
}
?>
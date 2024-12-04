<?php
if ($_POST) { 
    require_once '../model/itensModel.php';
    $produtos = new itensModel();
    $produtos->nome = $_POST['nome'];
    $produtos->descricao = $_POST['descricao'];
    $produtos->quantidade = $_POST['quantidade'];
    $produtos->caminho = $_POST['caminho'];
    $produtos->preco_custo = $_POST['preco_custo'];
    $produtos->preco_venda = $_POST['preco_venda'];
    $produtos->data_cadastro = $_POST['data_cadastro'];
    $result = $produtos->cadastroProd();
    if($result){
        header('location:../adminPage.php');
    }else{
        header('location:../adminPage.php');
    }
}

?>
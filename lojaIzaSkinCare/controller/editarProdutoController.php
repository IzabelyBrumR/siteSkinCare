<?php
if ($_POST) { 
    require_once '../model/itensModel.php';
    $produtos = new itensModel();
    $produtos->setNome($_POST['nome']);
    $produtos->setDescricao($_POST['descricao']);
    $produtos->setQuantidade($_POST['quantidade']);
    $produtos->setCaminho($_POST['caminho']);
    $produtos->setPrecoCusto($_POST['preco_custo']);
    $produtos->setPrecoVenda($_POST['preco_venda']);
    $produtos->setDataCadastro($_POST['data_cadastro']);
    $result = $produtos->edit($_POST['id']);

    if($result == 1){
        header('location:../adminPage.php?cod=success');
    }else{
        header('location:../editPage.php?cod=error');
    }
}

?>
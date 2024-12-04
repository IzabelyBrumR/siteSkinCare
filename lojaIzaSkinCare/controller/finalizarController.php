<?php
session_start();
$carrinho = $_SESSION['carrinho'];

$usr = $_SESSION['login'];
require_once '../model/usrModel.php';
$usuario = new usrModel();
$idUsuario = $usuario->idByEmail($usr);

require_once '../model/pedidoModel.php';
require_once '../model/ConexaoMySql.php';
$pedido = new pedidoModel();
$idPedido = $pedido->createPedido($_GET['total'],$idUsuario);

$result = $pedido->insertItens($carrinho,$idPedido);
if($result == 1){
    unset($_SESSION['carrinho']);
    header('location:../carrinho.php?code=success');
}else{
    header('location:../carrinho.php?code=error');
}
?>
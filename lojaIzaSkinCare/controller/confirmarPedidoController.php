<?php

require_once '../model/pedidoModel.php';
require_once '../model/ConexaoMysql.php';
$id = $_REQUEST['id'];
$pedido = new pedidoModel();

$result = $pedido->confirmarPedido($id);

if($result == 1){
    header('location:../adminPage.php?code=success');
}else{
    header('location:../adminPage.php?code=error');
}
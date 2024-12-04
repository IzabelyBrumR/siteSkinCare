<?php

$id = $_REQUEST['id'];
require_once '../model/itensModel.php';
$item = new itensModel();
$result = $item->delete($id);

if($result == 1){
    header('location: ../adminPage.php?cod=success');
}else{
    header('location: ../adminPage.php?cod=error');
}
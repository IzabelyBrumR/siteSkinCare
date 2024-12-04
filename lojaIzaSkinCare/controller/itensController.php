<?php
require_once './model/itensModel.php';

function loadAll() {
    require_once './model/itensModel.php';
    $produto = new itensModel();
    $listaProdutos = $produto->loadAll();
    return $listaProdutos;
}

function loadById($id) {
    require_once './model/itensModel.php';
    $produto = new itensModel();
    $listaProdutos = $produto->loadById($id);
    return $listaProdutos;
}

function searchItens($search){
    require_once './model/itensModel.php';
    $produto = new itensModel();
    $listaProdutos = $produto->search($search);
    return $listaProdutos;
}

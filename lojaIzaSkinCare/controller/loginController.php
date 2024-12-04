<?php

if ($_POST) {
    if ($_POST['email']!='' && $_POST['senha'] != '') {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        requiresUserController();
        $verify = login($email,$senha); 
        if($verify == 1){
            session_start();
            $_SESSION['login'] = $email;
            header('location:../index.php');
        }
        else{
            header('location:../loginPage.php?cod=error-user');
        }
    }else{
        header('location:../loginPage.php?cod=error-validation');
    }
} else {
    header('location:../index.php');
}

function requiresUserController(){
    require_once '../model/carrinhoModel.php';
    require_once '../model/usrModel.php';
    require_once '../model/itensModel.php';
    require_once '../model/ConexaoMysql.php';
}

function login($email,$senha){
    $user = new usrModel();
    return $user->login($email,$senha);
}

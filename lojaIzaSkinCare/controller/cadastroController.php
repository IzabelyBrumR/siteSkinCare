<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    require_once '../model/usrModel.php';
    $usr = new usrModel();
    $usr->cadastro($nome,$email,$senha,2);
}  
    header('location:../loginPage.php?sucess');
?>
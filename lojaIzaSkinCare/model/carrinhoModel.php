<?php
require_once 'ConexaoMysql.php';


class carrinhoModel{
 protected $id;
 protected $itens_carrinho;

 public function getId() {
    return $this->id;
}
public function getItens_carrinho() {
    return $this->itens_carrinho;
}

public function setId($id): void {
    $this->id = $id;
}
public function setItens_carrinho($itens_carrinho): void {
    $this->itens_carrinho = $itens_carrinho;
}
    public function __construct() {
}
 
public function deletar(){
require_once 'conexaoMysql.php';
// Iniciar a sessão
session_start();

// Remover a variável de sessão que armazena os itens do carrinho (por exemplo, $_SESSION['carrinho'])
unset($_SESSION['carrinho']);

// Redirecionar de volta para a página do carrinho ou qualquer outra página desejada após limpar os itens
header("Location: carrinho.php"); // Substitua "carrinho.php" pelo URL da página do carrinho ou outra página desejada
exit();}

}
?>

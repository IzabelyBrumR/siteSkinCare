<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Carrinho</title>
    <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        a{
            text-decoration: none;
            color:black;
        }
        col-sm-8{
            text-align: center;
        }
    </style>
</head>
    <?php
        require_once 'shared/header.php';
    ?>
    <body>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-8">
                <br>
                <?php

                if($_REQUEST['idItemCarrinho']){

                $itemId = $_GET['idItemCarrinho']; 

                $produto = loadById($itemId);

                foreach ($produto as $produto) {
                    echo '<div class="item">';
                    echo '<img src="';
                    echo $produto['caminho'];
                    echo '" width="20%">';
                    echo '<h3>';
                    echo 'O item ';
                    echo $produto['nome'];
                    echo ' foi adicionado ao carrinho';
                    echo '<br>';
                    echo '</div>';
                }}
                ?>
                <button  class="btn btn-default"><a href="index.php">Continuar comprando</a></button>
                <button  class="btn btn-default"><a href="carrinho.php">Finalizar pedido</a></button>
            </div>
        </div>
      </div>
    </body>
    <?php 
    function loadById($itemId) {
        require_once 'model/ConexaoMySql.php';
        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        //Criar consulta
        $sql = 'SELECT * FROM itens where id =' . $itemId;
        //Executar método de consulta
        $resultList = $db->Consultar($sql);

        $db->Desconectar();

        return $resultList;
    }
    ?>
</html>

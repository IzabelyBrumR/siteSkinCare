<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Yjewels</title>

        <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
            
            .table-bg{
                background-color: #bdf0e979;
                border-radius: 15px 15px 0px 0px;
            }
        </style>
    </head>
    <body>
        <?php
            require_once './shared/header.php';
            require_once './model/itensModel.php';
            require_once './controller/itensController.php';
            require_once './controller/cadastroProdutoController.php';
            require_once './model/pedidoModel.php';
            $pedidosModel = new pedidoModel();
            $pedidos = $pedidosModel->getAllNotAproved();
        ?>
        <div class= "m-5">
        <a href="cadastrarProduto.php"><button class="btn btn-success"><span class="material-symbols-outlined">add</span></button></a>
        <a href="pedidosAprovar.php"><button class="btn btn-success">Aprovar Pedidos</button></a>
        <br>
        <br>
        <div class="table-bg">
        
        <table class="table">
            
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Caminho</th>
                <th scope="col">Preço de Custo</th>
                <th scope="col">Preço de Venda</th>
                <th scope="col">Data de cadastro</th>
                <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                    $listarProdutos = loadAll();
                    foreach($listarProdutos as $produto){
                            echo "<tr>";
                            echo "<td>".$produto['id']."</td>";
                            echo "<td>".$produto['nome']."</td>";
                            echo "<td>".$produto['descricao']."</td>";
                            echo "<td>".$produto['quantidade']."</td>";
                            echo "<td>".$produto['caminho']."</td>";
                            echo "<td>".$produto['preco_custo']."</td>";
                            echo "<td>".$produto['preco_venda']."</td>";
                            echo "<td>".$produto['data_cadastro']."</td>";
                            echo "<td>
                                <a class='btn' href='editPage.php?id=$produto[id]'>
                                    <span class='material-symbols-outlined'>
                                        edit
                                    </span>
                                </a>
                                <a class='btn' href='controller/deleteController.php?id=$produto[id]'>
                                    <span class='material-symbols-outlined'>
                                        delete
                                    </span>
                                </a>
                            </td>";
                            echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
        </div>
        </div>
    </body>
</html>

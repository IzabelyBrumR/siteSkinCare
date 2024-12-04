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
            table{
                text-align: center;
            }
        </style>
    </head>
        <?php
            require_once './shared/header.php';
            require_once './model/itensModel.php';
            require_once './controller/itensController.php';
            require_once './controller/cadastroProdutoController.php';
            
        ?>
        <br>
        <div class="container">
        <div class="table-bg">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Data da compra</th>
                <th scope="col">Data aprovação</th>
                <th scope="col">Total</th>
                <th scope="col">Status do Pedido</th>
                </tr>
            </thead>
            <?php
            require_once './model/pedidoModel.php';
            require_once './model/usrModel.php';
            $user = new usrModel();
            $usuario_id = $user->idByEmail($_SESSION['login']);
            $pedidosModel = new pedidoModel();
            $pedidos = $pedidosModel->getAllAprovedById($usuario_id);
            if(isset($pedidos)){
                foreach($pedidos as $pedido){
                    echo "<tr>";
                        echo "<td>".$pedido['id']."</td>";
                        echo "<td>".$pedido['data_compra']."</td>";
                        echo "<td>".$pedido['data_aprovacao']."</td>";
                        echo "<td>".$pedido['valor_total']."</td>";
                        echo '<td>'.$pedido['status_pedido'].'</td>';
                    echo '</div>';
                }
            }
        ?>
        </table>
        </div>
        </div>
    </body>
</html>

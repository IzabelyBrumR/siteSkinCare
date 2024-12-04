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
        table{
            
            align-items: center;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
        require_once './shared/header.php';
        

        ?>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <table class="table">
            <thead>
            <tr>
                <th>PRODUTO<th>
                <th>QUANTIDADE<th>
                <th>VALOR<th>
                <th>VALOR TOTAL<th>
                    <th>EXCLUIR</th>
            </tr>
            </thead>
            <tbody>
                <br>
                <br>
            <?php
            echo '<h3>Carrinho</h3>';
            $totalCarrinho = 0;
            if (!empty($_SESSION['carrinho'])) {
                foreach ($_SESSION['carrinho'] as $itemId => $quantidade) {
                    $produto = loadById($itemId);
                    if ($produto) {
                        echo '<tr>';
                        echo '<td>';
                        echo '<img src="' . $produto['caminho'] . '" width="30%">';
                        echo '<h5 style="padding-left:4%">' . $produto['nome'] . '</h5>';
                        echo '</td>';
                        echo '<td>';
                        echo '';
                        echo '</td>';
                        echo '<td>';
                        echo $quantidade;
                        echo '</td>';
                        echo '<td style="padding-left: 8%">';
                        echo 'R$' . $produto['preco_venda'];
                        echo '</td>';
                        $subtotal = $produto['preco_venda'] * $quantidade;
                        echo '<td style="padding-left: 19%">';
                        echo 'R$' . $subtotal;
                        echo '</td>';
                        echo '<td style="padding-left:21%">';
                        echo '<a href="./controller/excluirItemController.php?itensId='.$produto['id'].'"><button>Excluir</button></a>';
                        echo '</td>';
                        echo '</tr>';
                        $totalCarrinho += $subtotal;
                    }
                  
                }
            }
            ?>
            </tbody>
        </table>
        <div>Total do Carrinho: R$<?php echo $totalCarrinho; ?></div>
        <div class="row">
        <form method="post" action="controller/limparController.php">
            <button class="btn btn-danger" type="submit" name="limpar_carrinho" value="Limpar Carrinho">Limpar Carrinho</button>
        </form>
        
        <?php echo'<form method="post" action="controller/finalizarController.php?total='.$totalCarrinho.'">'; ?>
            <?php
                if(isset($_SESSION['login'])){
                    echo '<button class="btn btn-success" type="submit" name="limpar_carrinho">Enviar Pedido</button>';
                }else{
                    echo '<button class="btn btn-success" type="submit" name="limpar_carrinho" disabled>Enviar Pedido</button>';
                }
            ?>
        </form>
        </div>
    </div>
</div>

    <?php
    function loadById($itemId) {
        require_once'model/ConexaoMySql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM itens where id =' . $itemId;
        $result = $db->Consultar($sql);
        $db->Desconectar();
        return $result->fetch_assoc(); // Retorna um array associativo
    }
    ?>
</body>
</html>
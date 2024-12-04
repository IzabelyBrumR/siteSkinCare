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
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');

            body {
                font-family: 'Inter', sans-serif;
                margin: 0;
                padding: 0;
                color: black;

                background-repeat: no-repeat;
                background-size: cover;
            }

            .blocoLogin {
                display:flex;
                align-items: center;
                align-content: center;
                justify-content: center;
            }

            .formLogin {
                display: flex;
                flex-direction: column;
                background-color: rgba(92, 172, 241, 0.651);
                ;
                border-radius: 7px;
                padding:50px;
            }

            .formLogin p {
                color: black;
                margin-bottom: 25px;
            }

            .formLogin input {
                padding: 15px;
                border: 1px solid #fff;
                margin-bottom: 20px;
                margin-top: 5px;
                border-radius: 4px;
                outline: none;
            }

            .formLogin input:focus {
                border: 1px solid black;
            }

            .formLogin a {
                display: inline-block;
                margin-bottom: 20px;
                color: black;
            }

            .btn {
                background-color: white;
                color: black;
                border: none;
                transition: all linear 160ms;
                margin: 0;

            }

            .btn:hover {
                transform: scale(1.05);
                background-color: rgba(92, 172, 241, 0.651);
            }
        </style>
    </head>
    <body>
        <?php
            require_once './shared/header.php';
        ?>
        <br>
        <div class="row">
        <a href="adminPage.php">Voltar</a>
            <div class="col-md-4"></div>
            <div class="col-md-4"> 
                <div class="blocoLogin">
                    <?php
                        $id = $_REQUEST['id'];
                        require_once'controller/itensController.php';
                        $produto = loadById($id);
                    ?>
                    <form method="post" class="formLogin" action="./controller/editarProdutoController.php">
                        <?php
                        foreach($produto as $p){
                            echo'
                            <h2 style="color:black">Editar Produto</h2>
                            <p>ALtere os campos abaixo com os dados do produto.</p>
                            <input type="hidden" name="id" value="'.$p['id'].'">
    
                            <label for="nome">Nome:</label>
                            <input type="text" id="nome"  name="nome" value="'.$p['nome'].'"required="" placeholder="Insira seu nome" required="">
                            
                            <label for="descricao">Descrição:</label>
                            <input type="descricao" value="'.$p['descricao'].'"placeholder="Insira a descrição do produto" required="" name="descricao">
    
                            <label for="quantidade">Quantidade:</label>
                            <input type="quantidade" value="'.$p['quantidade'].'"placeholder="Insira a quantidade" required="" name="quantidade">
    
                            <label for="caminho">Caminho:</label>
                            <input type="caminho" value="'.$p['caminho'].'"placeholder="Insira o caminho" required="" name="caminho">
    
                            <label for="preco_custo">Preço de custo:</label>
                            <input type="preco_custo" value="'.$p['preco_custo'].'"placeholder="Insira o preço de custo" required="" name="preco_custo">
    
                            <label for="preco_venda">Preço de venda:</label>
                            <input type="preco_venda" value="'.$p['preco_venda'].'"placeholder="Insira o preço de venda" required="" name="preco_venda">
    
                            <label for="data_cadastro">Data do cadastro:</label>
                            <input type="text" value="'.$p['data_cadastro'].'"placeholder="Insira a data do cadastro" required="" name="data_cadastro">
                            ';
                        }
                        ?>
                        <input type="submit" value="Salvar informações" class="btn btn" name="Cadastrar" style="background-color: #fff">
                    </form>
                </div>
            </div>

            <div class="col-md-4"></div>
        </div>
    </body>
</html>

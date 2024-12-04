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
        <br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="blocoLogin">
                    <form method="post" class="formLogin" action="./controller/cadastroController.php">
                        <h2 style="color:black">Cadastro</h2>
                        <p>Preencha os campos abaixo com seus dados.</p>
                        <input type="hidden" name="id" value="<?php echo @(isset($usrObject) ? $usrObject->getId() : '') ?>">

                        <label for="nome">Nome:</label>
                        <input type="text" id="nome"  name="nome" required="" placeholder="Insira seu nome" required=""><!-- comment -->
                        
                        <label for="email">Email:</label>
                        <input type="email" placeholder="Insira seu email" required="" name="email">

                        <label for="password">Senha:</label>
                        <input type="password" placeholder="Insira sua senha" required="" name="senha">

                        <input type="submit" value="Salvar informações" class="btn btn" name="Cadastrar" style="background-color: #fff">
                    </form>
                </div>
            </div>

            <div class="col-md-4"></div>
        </div>
    </body>
</html>

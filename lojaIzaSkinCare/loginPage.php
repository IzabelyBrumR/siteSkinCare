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

                background-color: #fffdf3;
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
        
        <br><br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="blocoLogin">
                    <form method="post" class="formLogin" action="./controller/loginController.php">
                        <h2 style="color:black">Login</h2>
                        <p>Digite os dados de login nos campos abaixo.</p>

                        <label for="email">Email:</label>
                        <?php
                            if (isset($_COOKIE['email'])) {
                                echo('<input type="email" class="form-control" id="email" 
                                placeholder="Insira seu email" name="email"
                                value="'.$_COOKIE['email'].'" required="">');
                            } else {
                                echo('<input type="email" class="form-control" id="email" 
                                placeholder="Insira seu email" name="email" required="">');
                            }
                        ?>
                        <label for="password">Senha:</label>
                        <input type="password" placeholder="Insira sua senha" required="" name="senha">
                        
                        <div>
                        <?php
                            if (isset($_COOKIE['email'])) {
                                echo ('<input type="checkbox" class="form-check-input" id="lembrar" 
                                name="lembrar" checked value="1">');
                            } else {
                                echo ('<input type="checkbox" class="form-check-input" id="lembrar" 
                                name="lembrar" value="1">');
                            }
                        ?>
                            <label for="lembrar" class="form-check-label" style="color:black">Lembre de mim</label>
                        </div>

                        <a href="cadastroPage.php">Cadastrar-se</a>

                        <input type="submit" value="Entrar" class="btn btn" name="login" style="background-color: #fff">
                        <div class="d-grid">
                        <?php
                        @$cod = $_REQUEST['cod'];
                        if (isset($cod)) {
                            echo($cod);
                            if ($cod == '171') {
                                echo ('<br><div class="alert alert-danger">');
                                echo ('Verifique usuário ou senha.');
                                echo ('</div>');
                            } else if ($cod == '172') {
                                echo ('<br><div class="alert alert-warning">');
                                echo ('Sua sessão expirou. Realize o login novamente.');
                                echo ('</div>');
                            }
                        }
                        ?>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-4"></div>
        </div>
    </body>
</html>

<?php
    session_start();
?>

<header class="p-3 text-black" style="background-color: #bdf0e979;">
    <style>
        .logo {
            position: relative;
            z-index: 2;
            height: 25px;
        }
        .logo img {
            width: 80px;
            position: absolute;
            top:-22px;
            left: -100px;
        }
    </style>
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <div class="logo"><a href="index.php"><img src="img/logo.png" alt=""/></a></div>
                <li><a href="produtosPage.php#hidratante" class="nav-link px-2 text-black">Hidratante</a></li>
                <li><a href="produtosPage.php#serum" class="nav-link px-2 text-black">Sérum</a></li>
                <li><a href="produtosPage.php#protetorSolar" class="nav-link px-2 text-black">Protetor Solar</a></li>
                <li><a href="produtosPage.php#sabonete" class="nav-link px-2 text-black">Sabonete</a></li>
                <li><a href="carrinho.php" class="nav-link px-2 text-black">Carrinho</a></li>
                <li><a href="pedidosPage.php" class="nav-link px-2 text-black">Pedidos</a></li>
                <?php
                    require_once './controller/adminController.php';
                    @$email = $_SESSION['login'];
                    if(isset($email)){
                        if(isAdmin($email)){
                            echo'<li><a href="adminPage.php" class="nav-link px-2 text-black">Administrador</a></li>';
                        }
                    }
                ?>

            </ul>

            <form method="GET" action="produtosPage.php" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input name="search" type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                <?php
                    if(!isset($_SESSION['login'])){
                        echo'<a href="loginPage.php" class="btn btn-outline-dark me-2">Login</a>';
                    }else{
                        echo'<a href="controller/logoutController.php" class="btn btn-outline-dark me-2">Logout</a>';
                    }
                ?>
            </div>
        </div>
    </div>
</header>
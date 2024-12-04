<!DOCTYPE html>
<html>
    <head>
        <title>Diza Cosmédicos</title>
        <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <style>
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
            section.especialidades{
                padding: 40px 4%;
            }
            h2{
                text-align: center;
                font-size: 35px;
                color: black;
            }
            h1{
                text-align: center;
                font-size: 50px;
                color: black;
            }
            .col-sm-3{
                padding:40px;
            }
            .img{
                border-radius: 5px;
            }
            .box{
                padding: 80px 120px;
            }
        </style>
    </head>
    <body>
        <?php
        require_once './shared/header.php';
        

        ?>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="" src="./img/slogan.jpeg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></img>
                </div>
                <div class="carousel-item active">
                    <img class="bd-placeholder-img" width="100%" height="" src="./img/slogan2.jpeg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></img>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="" src="./img/slogan3.jpeg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></img>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">السابق</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">التالي</span>
            </button>
        </div>
        <br>
        <div class="row">      
            <div class="box text-center">
                <h1>Sobre</h1>
                <br>
                <p>
                Na Diza Cosmédicos, cada detalhe é pensado para valorizar sua beleza e oferecer uma experiência completa de cuidados com a pele, cabelo e maquiagem. Nosso site reúne uma ampla seleção de produtos de alta qualidade, perfeitos para atender às suas necessidades e realçar sua essência.

Aqui você encontra maquiagens elegantes, produtos especializados para a saúde da pele, tratamentos capilares eficazes e fragrâncias que deixam sua marca. Tudo isso com a garantia de marcas renomadas e uma curadoria feita com carinho.

Navegar pelo nosso site é simples e prazeroso. Além de uma experiência prática e intuitiva, você terá acesso a promoções exclusivas, atendimento personalizado e entrega rápida para todo o Brasil.

Seja para renovar sua rotina de beleza, presentear alguém especial ou explorar novos produtos, a Diza Cosmédicos é o seu destino online para cosméticos que fazem a diferença.
                </p>
            </div>
            <br>
            <h1>Cosmédicos</h1>
            <div class="col-sm-3">
                <div class="container">
                    <a href="produtosPage.php#hidratante" style="text-decoration:none"><img  src="img/hidratante/hidratante.webp" width="100%" alt=""/><h2>Hidratante</h2></a>
                </div>     
            </div>
            <div class="col-sm-3">
                <div class="container">
                    <a href="produtosPage.php#serum" style="text-decoration:none"><img  src="img/principia/principia.jpeg" width="100%" alt=""/><h2>Sérum</h2></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="container">
                    <a href="produtosPage.php#protetorSolar" style="text-decoration:none"><img  src="img/protetorSolar/protetorsolar.jpeg" width="100%" alt=""/><h2>Protetor Solar</h2></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="container">
                    <a href="produtosPage.php#sabonete" style="text-decoration:none"><img  src="img/sabonete/sabonete4.webp" width="100%" alt=""/><h2>Sabonete</h2></a>
                </div>
            </div>
            
    </body>
</html>

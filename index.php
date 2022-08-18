<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Tamaholipa</title>
</head>
<body>

        <?php
            session_start();
            if(isset($_SESSION['usuario'])){
            include 'includes/info-login-in.php';
            }
            if(!(isset($_SESSION['usuario']))){
            include 'includes/info-login.php';
            }
        ?>
    <div class="wrapper">
        <div class="nav-fondo">
            <?php
                include 'includes/header.php'
            ?>
        </div>     
        <?php
            session_start();
            if(isset($_SESSION['usuario'])){
            $usuario_actual = $_SESSION['usuario'];
        
            if(strval($usuario_actual) == 'admin'){
                include 'includes/nav-admin.php';
            }else{
                include 'includes/nav-inicio.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
            include 'includes/nav-inicio.php';
            }
        ?> 
        
        
        <main>
            <section class="featured">
                <div class="container">
                <h1 class="section-title">Bienvenidos</h1>
                <div style="text-align:center;"> 
                <iframe width="600" height="400" src="https://www.youtube.com/embed/k82ro9Qe0DE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen  ></iframe>
                </div>
                    <h2 class="section-title">Tamaulipas</h2>
                
                    
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner"> 
                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="tamaholipa/iglesia-chorrito-ubicada-hidalgo-tamaulipas.jpg" height="600" width="1200" class="d-block w-60" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="tamaholipa/cabaña.jpg" height="600" width="1200" class="d-block w-60" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="tamaholipa/elmirador.jpg" height="600" width="1200" class="d-block w-60" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="tamaholipa/O4XYlMhVxCewZz55vqHa.jpg"height="600" width="1200" class="d-block w-60" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="tamaholipa/tula-tamaulipas-iglesia-San-Antonio-de-Padua-PJ.jpg" height="600" width="1200" class="d-block w-60" alt="...">
                            </div>
                        </div>
                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
<div class="container">
                  


            <section class="our-products">
                <div class="container">
                    <h2 class="section-title">Tus próximos destinos</h2>
                    <article class="product spacing producto1 product__image1">
                        <h3 class="product__title">Historia</h3>
                        <p class="product__description">Se encuentra localizado al centro oeste del estado y aproximadamente a 119 kilómetros al este de la ciudad de Ciudad Victoria. Fue fundado con el nombre de Villa de Santillana, pero en 1828 adoptó su actual nombre en honor de Mariano Abasolo.</p>
                       
                        <a href="hist.php" class="btn">Más información</a>
                    </article>
                    <article class="product spacing producto2 product__image2">
                        <h3 class="product__title">Cultura</h3>
                        <p class="product__description">Los primeros asentamientos humanos en Tamaulipas datan de doce milenios antes de la era cristiana</p>
                        <a href="cultura.php" class="btn">Más información</a>
                    </article>
                    <article class="product spacing producto3 product__image3">
                        <h3 class="product__title">Geografia</h3>
                        <p class="product__description">Se divide en diferentes municipios que conforman al estado libre y soberano.</p>
                        <a href="geografia.php" class="btn">Más información</a>
                    </article>
                </div>
            </section>
        </main>
        <?php
            include 'includes/footer.php'
        ?>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>
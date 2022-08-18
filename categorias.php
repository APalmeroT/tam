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
                    <h2 class="section-title">TAMAULIPAS</h2>
            
<div class="container">
                    <h2 class="section-title">Nuestros Origenes ...</h2>
                    <div class="split">
                        <a href="cazacat.php " class="featured__item">
                            <img src="tamaholipa/cazacat.png" alt="" class="featured__img">
                            <p class="featured__details"><span class="price">Caza y Pesca</span>Para el aprovechamiento sostenible de la vida silvestre y pesca deportiva.</p>
                        </a>
                        <a href="pueblocateg.php" class="featured__item">
                            <img src="tamaholipa/pueblocateg.png" alt="" class="featured__img">
                            <p class="featured__details"><span class="price">Pueblos Magicos</span>Para proteger y guardar su riqueza cultural</p>
                        </a>
                        <a href="ciudades.php" class="featured__item">
                            <img src="tamaholipa/ciudcat.png" alt="" class="featured__img">
                            <p class="featured__details"><span class="price">Ciudades</span>Ricas en cultura y lugares turisticos</p>
                        </a>
                        <a href="naturaleza.php" class="featured__item">
                            <img src="tamaholipa/natcat.png" alt="" class="featured__img">
                            <p class="featured__details"><span class="price">Naturaleza</span>Sustentamos la vida diaria</p>
                        </a>
                        <a href="solyplaya.php" class="featured__item">
                            <img src="tamaholipa/playcat.png" alt="" class="featured__img">
                            <p class="featured__details"><span class="price">Sol y Playa</span>Fuentes de belleza e ideales para un descanso</p>
                        </a>
                    </div>
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
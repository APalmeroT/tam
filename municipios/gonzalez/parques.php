<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="logo.png" />
    <title>Tamaholipa - Gonzalez</title>
</head>
<body>

        <?php
            session_start();
            if(isset($_SESSION['usuario'])){
            $usuario_actual = $_SESSION['usuario'];
        
            if(strval($usuario_actual) == 'admin'){
                include '../../includes/nav-admin.php';
            }else{
                include '../../includes/info-login-in.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
            include '../../includes/info-login.php';
            }
        ?>

    <div class="wrapper">
        <div class="nav-fondo">
            <?php
                include '../../includes/header-in.php'
            ?>
        </div>
        
        <?php
            session_start();
            if(isset($_SESSION['usuario'])){
            $usuario_actual = $_SESSION['usuario'];
        
            if(strval($usuario_actual) == 'admin'){
                include '../../includes/nav-admin.php';
            }else{
                include '../../includes/nav-municipios.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
                include '../../includes/nav-municipios.php';
            }
        ?>

        <div class="info-atracciones">
            <section>
                <div class="container ventas titulo-recomendados">
                    <a onclick="history.back()"><div class="bk-btn"><div class="bk-btn-triangle"></div><div class="bk-btn-bar"></div></div></a>
                    <div class="info-atracciones">
                        <h1 class="titulo-municipio section-title1">Gonzalez</h1>
                        <h2 class="tipo-atraccion">Parques</h2>
                        <h3 class="titulo-atraccion">Campo de girasoles de González </h3>
                        <p class="descripcion-atraccion">Este sitio te enamorará si eres fan de la fotografía y naturaleza,
                             el campo de girasoles se encuentra 
                            en González, Tamaulipas y aquí te explicamos cómo llegar.
                            Para llegar lo único que tienes que hacer es seguir la carretera Tampico-Mante y justo en la entrada al ejido 
                            Graciano Sánchez, a poco más de tres kilómetros de la
                             cabeza municipal que es González, te encontrarás con este maravilloso lugar.

Año con año estas 300 hectáreas de plantío de girasoles causan sensación para locales y turistas de diversas partes de la República Mexicana y Estados Unidos, quienes acuden para tomarse su respectiva foto. </p>
                        <img src="https://www.elsoldetampico.com.mx/local/regional/uf7d9e-asi-luce-el-campo-de-girasoles-en-gonzalez-tamaulipas-credito-jose-luis-tapia/ALTERNATES/LANDSCAPE_1140/As%C3%AD%20luce%20el%20campo%20de%20girasoles%20en%20Gonz%C3%A1lez,%20Tamaulipas%20%7C%20Cr%C3%A9dito:%20Jos%C3%A9%20Luis%20Tapia">

                    </div>
                </div>
            </section>
        </div>

        <?php
            include '../../includes/footer.php'
        ?>
    </div>
</body>
</html>
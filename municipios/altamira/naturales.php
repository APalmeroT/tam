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
    <link rel="shortcut icon" href="../../logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Tamaholipa - Altamira</title>
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

        <div>
            <section>
                <div class="container ventas titulo-recomendados" id="scrollear">
                    <a onclick="history.back()"><div class="bk-btn"><div class="bk-btn-triangle"></div><div class="bk-btn-bar"></div></div></a>
                    <div class="info-atracciones">
                        <h1 class="titulo-municipio section-title1">Altamira</h1>
                        <h2 class="tipo-atraccion">Atracciones Naturales</h2>
                        <h2 class="titulo-atraccion">Playa tesoro</h2>
                        <p class="descripcion-atraccion"style="text-align: justify;">Ubicación: En el litoral del Golfo de México, partiendo de la escollera norte del canal de navegación de entrada al puerto industrial.</p>
                       <center>
                        <img src="https://t4.ftcdn.net/jpg/03/68/70/25/360_F_368702548_euoEZ1rKFr6tqP5A4W7uomGWfQV7lNzF.jpg">
                    </center>
                        <h2 class="titulo-atraccion">Río Tamesí</h2>
                        <p class="descripcion-atraccion"style="text-align: justify;">Ubicación: Límite de los estados de Tamaulipas y Veracruz, inclusive con el municipio de Tampico. Lugar turístico ecológico para la práctica de deportes acuáticos, lugar para acampar, conduce al ejido "Cués de Palmas Altas", donde se ubican pirámides arqueológicas.</p>    
                        <center>
                        <img src="https://www.mexicoenfotos.com/MX14489344288608.jpg">
                    </center>

                        <h2 class="titulo-atraccion">Playa dunas doradas</h2>
                        <p class="descripcion-atraccion"style="text-align: justify;"> Ubicación: En el litoral del Golfo de México con acceso por la Cuarta Avenida de la colonia Miramar, partiendo de la autopista Tampico Altamira, planta de gas, cercana al entronque del libramiento Poniente</p>
                        <center>
                        <img src="https://escapadas.mexicodesconocido.com.mx/wp-content/uploads/2021/03/Dunas-doradas-Tampico-Tamaulipas-700x394.jpg">
                        </center>

                    </div>
                </div>
            </section>
        </div>

        <script>
            var element = document.getElementById("scrollear");
            element.scrollIntoView();
        </script>

        <?php
            include '../../includes/footer.php'
        ?>
    </div>
</body>
</html>
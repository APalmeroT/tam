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
    <title>Tamaholipa - Cd. Madero</title>
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
                        <h1 class="titulo-municipio section-title1">Cd. Madero</h1>
                        <h2 class="tipo-atraccion">Parques</h2>
                        <h2 class="titulo-atraccion">Parque Bicentenario</h2>
                        <p class="descripcion-atraccion">Se ubica en Ciudad Madero muy cerca de la playa y complejo turístico y ecológico está formado por siete hectáreas. El parque tiene espacios abiertos circundados de una ciclopista de 3 km que enlaza todas las áreas del parque. Cuenta con “Splash”, paseo acuático, recorridos ecológicos, así como un área recreativa con juegos mecánicos.</p>
                        <center>
                        <img src="https://lafuncion.mx/wp-content/uploads/2019/09/Parque-Bicentenario-04-1280x720.jpg">
        </center>

                        <h2 class="titulo-atraccion">Plaza Libertad</h2>
                        <p class="descripcion-atraccion">Gran plaza con jardines en el centro de Tampico rodeada de edificios de estilo francés con balcones de hierro.</p>
                        <center>
                        <img src="https://www.mexicoenfotos.com/MX15411101749041.jpg">
        </center>
                        <h2 class="titulo-atraccion">Quiosco de estilo art nouveau.</h2>
                        <p class="descripcion-atraccion">Quiosco de la plaza Isauro Alfaro, un compromiso asumido y cumplido por el Gobierno del alcalde Adrián Oseguera Kernion</p>
                        <center>
                        <img src="https://www.hoytamaulipas.net/lafoto/122880/Invitan-a-disfrutar-de-una-tarde-cultural-en-Ciudad-Madero.jpg">
        </center>
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
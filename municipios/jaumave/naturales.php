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
    <title>Tamaholipa - Jaumave</title>
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
                <div class="container ventas titulo-recomendados">
                    <a onclick="history.back()"><div class="bk-btn"><div class="bk-btn-triangle"></div><div class="bk-btn-bar"></div></div></a>
                    <div class="info-atracciones">
                        <h1 class="titulo-municipio section-title1">Jaumave</h1>
                        
                        <h2 class="tipo-atraccion">Atracciones Naturales de Jaumave</h2>
                        
                        <h2 class="titulo-atraccion">Los nogales</h2>
                        <p class="descripcion-atraccion">Los Nogales es un paraíso terrenal enmarcado por montañas de donde brota el agua creando pequeñas cascadas, pozas de color azul turquesa y adornado por frondosos árboles de nueces (Nogales) de los cuales deriva su nombre.</p>
                        <center>
                        <img src="http://www.balneariosmexico.com/IMG/arton2269.jpg">
                        <center>
                       
                        <h2 class="titulo-atraccion">Balneario el ojito</h2>
                        <p class="descripcion-atraccion">Este atractivo turístico se encuentra en una región semidesértica, privilegiada por un abundante manantial u ojito de agua del cual deriva su nombre.</p>
                       <center>
                        <img src="https://www.elsoldetampico.com.mx/incoming/5z3uje-el-ojito-date-un-chapuzon-en-un-balneario-cerca-de-tampico/ALTERNATES/LANDSCAPE_1140/El%20Ojito,%20date%20un%20chapuzo%CC%81n%20en%20un%20balneario%20cerca%20de%20Tampico">
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
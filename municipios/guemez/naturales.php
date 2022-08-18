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
    <title>Tamaholipa - Guemez</title>
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
                        <h1 class="titulo-municipio section-title1">Güemez</h1>
                        <h2 class="tipo-atraccion">Atracciones Naturales</h2>
                        <h2 class="titulo-atraccion">Las pilas</h2>
                        <p class="descripcion-atraccion" >Parador turístico Las Pilas se encuentra ubicado en el ejido El 
                            Roble, Municipio de Güemez, carretera interejidal km. 30, aproximadamente a 30 minutos de la
                             capital. Ambiente familiar, cuenta con palapas, asadores, juegos infantiles, campo deportivo,
                              lienzo charro y amplio estacionamiento. </p>
                        <img src="https://miro.medium.com/max/2688/1*SbTVOLHKlvuSSengFxPIkQ.jpeg">
                        <h2 class="titulo-atraccion">El vertedor</h2>
                        <p class="descripcion-atraccion" >Es uno de los lugares más visitados por turistas de la región, ya que su canal de 
                            aproximadamente 300 metros de paredes enlozadas brinda un atractivo gratuito para niños, adultos y familias en general.

Se ubica en el poblado de Guadalupe Victoria, municipio de Güemez km. 38, sobre la carretera Victoria-Monterrey, a 30 min. de la capital del estado. </p>
                        <img src="https://www.elsoldetampico.com.mx/incoming/hgkf9h-el-vertedor-un-lugar-de-tamaulipas-que-vale-la-pena-conocer-en-temporada-de-calor/ALTERNATES/LANDSCAPE_1140/El%20Vertedor,%20un%20lugar%20de%20Tamaulipas%20que%20vale%20la%20pena%20conocer%20en%20temporada%20de%20calor">

                      
                      
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
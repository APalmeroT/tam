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
    <link rel="shortcut icon" href="logo.png" />
    <title>Tamaholipa - Geografia</title>
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
                        <h1 class="titulo-municipio section-title1">Geografía</h1>
                        <h2 class="tipo-atraccion">Estado de Tamaulipas</h2>
                        <p class="descripcion-atraccion" style="text-align: justify;" >Tamaulipas ( escuchar), oficialmente Estado Libre y Soberano de Tamaulipas, es uno de los treinta y un estados que, junto con la Ciudad de México, forman los Estados Unidos Mexicanos. ​ ​ Su capital es Ciudad Victoria y su ciudad más poblada es Reynosa. ​ Fue fundado el 7 de febrero de 1824.  </p>
                          
                            <p class="descripcion-atraccion"  style="text-align: justify;">Coordenadas geográficas extremas:
                            Al Norte 27º 40’, al Sur 22º 12’ de latitud Norte
                            Al Este 97º 08’ y al Oeste 100º 08’de longitud Oeste.

                            Superficie:
                            Tamaulipas tiene una extensión de 80.249 kilómetros cuadrados (Km2).

                            Porcentaje territorial:
                            El estado de Tamaulipas representa 4.09 % de la superficie del país.

                            Litorales:
                            El estado de Tamaulipas cuenta con 433 km de litorales, que representa el 3.9% del total nacional.

                            Colindancias:
                            Colinda al norte con Estados Unidos de America; al oeste con el estado de Nuevo Leon; al sur con los estados de San Luis Potosí y Veracruz; y al este con el Golfo de México.
                        
                        </p>
                        <p style="text-aling: justify">A continuación se muestra el mapa completo del estado de Tamaulipas:</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704857.5502938577!2d-100.88934957867986!3d24.931219896222604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x867953aedb1e2459%3A0x33859f5a35e81925!2sTamaulipas%2C%20M%C3%A9xico!5e0!3m2!1ses-419!2slt!4v1659987785257!5m2!1ses-419!2slt" width="730" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style=""></iframe>
                            <div class="map-responsive">

                        

</div>
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
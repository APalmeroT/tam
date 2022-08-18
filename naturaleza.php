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
    <title>Tamaholipa - Cultura</title>
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

                        <h1 class="titulo-municipio section-title1">Naturaleza</h1>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Biosfera El Cielo</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" > Con cuatro ecosistemas que aún se mantienen en estado primigenio, la abundancia 
                        de distintas especies de fauna y flora, muchas de ellas endémicas, hacen que El Cielo sea un paraíso sin paralelo, razón por la cual diversos científicos, como zoólogos, ornitólogos, botánicos, etcétera, con frecuencia realizan estudios en esta singular zona.
                        Ubicada en la región sureste de Tamaulipas, y dentro de la Sierra Madre Oriental, esta reserva comprende 144,530 hectáreas que forman parte de los municipios de Gómez Farías, Llera, Jaumave y Ocampo. Gracias a un decreto estatal emitido en 1985 que la declaró Reserva de la Biosfera, y un año más tarde fortalecida como Reserva de la Humanidad por las Naciones Unidas, más de 255 especies de aves residentes y 175 de migratorias, reptiles, anfibios, 
                        murciélagos y muchos otros animales salvajes habitan en un ambiente protegido.</p>
                          
                        <img src="img/cielo.jpeg" height="600" width="1030" alt="" class="">

                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Jaumave</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" >El municipio de Jaumave se halla en las recónditas zonas montañosas del estado, 
                        dentro de la Sierra Madre Oriental. Cuenta con una orografía muy singular, dando vida a ríos y manantiales, por ello se trata de uno de los municipios con mayor diversidad climatológica de Tamaulipas debido a las diferencias de altitud en su territorio.
                        El municipio está a solo 51 kilómetros de la capital del estado y colinda con la Reserva de la Biósfera El Cielo, así como con los municipios de Victoria, Miquihuana, Bustamante y Palmillas, 
                        y al oeste con el estado de Nuevo León, por ello la vegetación de este lugar combina los cactus propios del desierto y densos bosques de pinos, nogales y cedros, creando el sitio perfecto para la mariposa monarca,
                         que llega a este territorio tamaulipeco en cada temporada.</p>

                         <img src="img/jaumave.jpeg" height="600" width="1030" alt="" class="">

                         <h1 class="titulo-municipio section-title1">___________________________</h1>
                         <h2 class="tipo-atraccion">Miquihuana</h2>
                         <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" >Miquihuana es uno de los lugares más bellos de Tamaulipas por naturaleza, en este municipio del altiplano tamaulipeco encontrarás gran cantidad de fauna y muchos 
                        bellos paisajes. Es un lugar ideal para practicar senderismo y campismo.El clima predominante es templado y extremoso con lluvias en verano, presenta temperaturas mínimas de 4°C y máximas de 41°C.El municipio cuenta con un lugar de atracción natural: "La Peña Nevada", 
                        que es el lugar más alto del estado de Tamaulipas, en donde nieva de noviembre a enero; además, en los ejidos "Marcela", "Aserradero" y "Valle Hermoso" existen parajes de bosques altos cuya principal atracción es la cacería de osos, venado cola blanca y tigre.</p>

                        <img src="img/miquihuana.jfif" height="600" width="1030" alt="" class="">

                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Palmillas</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" >Al visitar Palmillas, no hay que perderse de hacer un recorrido por el centro, en la cual se puede encontrar la primer iglesia del estado. Las fachadas coloniales que se pueden observar aquí,
                         son una puerta al pasado que nos permite observar como la religión dejó un gran impacto en esta población, así como mitos y leyendas religiosas que quedaron como huella de la historia.
                        Los turistas amantes del deporte extremo, pueden visitar el Cañón del Salto, donde se encontrarán pozas de agua cristalina, zonas montañosas, llanos y toboganes naturales de 30 metros, en los cuales se puede practicar el cañonismo 
                        y rappel en el cual se puede hacer un recorrido total con duración de 4 horas.</p>

                        <img src="img/palmillas.jfif" height="600" width="1030" alt="" class="">
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Llera</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" >Llera es uno de los destinos más recomendados para los interesados en el eco-turismo. Es ideal para disfrutar con la familia y vivir experiencias y aventuras únicas.
                        De Oeste a Este podemos encontrar el río Guayalejo, el cual se alimenta de los arollos Santa Clara, Las Adjuntas y Lucio Blanco. “La peñita” es el bañearo con mas atracción turística, sus transparentes y calmadas aguas lo convierten en una atracción ideal 
                        para visitantes interesados en los deportes extremos, al poder disfrutar de deportes acuáticos como kayak mientras se admira el hermoso paisaje. O si lo prefiere, es posible hacer un recorrido por el rió Guayalejo por el nuevo Xochimilco Tamaulipeco.</p>
                          
                        <img src="img/llera.jfif" height="600" width="1030" alt="" class="">
                        
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
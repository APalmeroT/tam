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

                        <h1 class="titulo-municipio section-title1">Caza y pesca</h1>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Presa Vicente Guerrero</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" >La presa Vicente Guerrero fue construida en 1970 para controlar la corriente
                         de los r??os Corona, Purificaci??n y Pil??n. Es una de las m??s grandes de M??xico y se distingue porque sus aguas sumergieron la antigua Villa Padilla, lugar donde el militar Agust??n
                        de Iturbide fue fusilado en el a??o 1824. Es famosa entre pescadores nacionales y extranjeros por su gran poblaci??n de lobinas negras.</p>
                        
                        <img src="img/presavicentee.jfif" height="600" width="1030"  alt="" class="">

                        
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Presa Marte R. Gomez</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" >Construida desde 1946, La Presa Marte R. G??mez (o tambi??n conocida como Presa La Az??car) tiene una capacidad 
                        de contener 824 hect??metros c??bicos de agua, utilizados principalmente para el riego agr??cola del distrito de riego del Bajo San Juan.
                        Est?? ubicada a 65 km al oeste de la Ciudad de Reynosa y a 16 km al suroeste de Camargo.</p>
                              
                        <img src="img/presamarte.jpeg" height="600" width="1030" alt="" class="">
                        <h1 class="titulo-municipio section-title1">___________________________</h1>

                        <h2 class="tipo-atraccion">Presa Emilio Portes Gil</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" >La presa "Emilio Portes Gil" es un embalse artificial construido entre 1979 y 1983 por el Gobierno Federal, sobre el cauce
                         del R??o Guayalejo, con el prop??sito de captaci??n de agua para evitar las inundaciones de las partes bajas de la ciudad de Tampico, y para el abasto de agua de riego. Posteriormente se introdujeron cr??as de diversas especies.</p>
                          
                         <img src="img/presaemilio.jpeg" height="600" width="1030" alt="" class="">
                         <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Presa Ramiro Caballero</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" >El vaso de esta presa se encuentra entre Mante y Gonz??lez, ocupando una superficie de 9800 hect??reas al NAMO. Su principal fuente de abastecimiento de agua es el r??o 
                        Guayalejo. Esta presa puede almacenar 670 millones de metros cubicos que son principalmente utilizados para el riego de uso agr??cola en los cultivos de sorgo, ma??z, arroz, c??rtamo, pastos y hortalizas.</p>
                            
                        <img src="img/presaramiro.jpeg" height="600" width="1030" alt="" class="">  
                         
                         
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
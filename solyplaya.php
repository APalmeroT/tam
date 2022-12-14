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

                        <h1 class="titulo-municipio section-title1">Sol y Playa</h1>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Playa La pesca</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" >  La Playa esta enmarcada con el impresionante paisaje de la Laguna madre a un costado y el r??o Soto la Marina en el otro.
                        Es una playa de suave arena en donde desembocan varios r??os.
                        Cuenta con hoteles, palapas, renta de lanchas, tienda de accesorios de pesca y restaurantes que ofrecen deliciosos platillos a base de pescado fresco y mariscos.
                        Uno de los grandes eventos que a??o con a??o se realizan en esta playa son el Festival de Semana Mayor con espect??culos art??sticos, concursos y torneos deportivos.
                        Se localiza en la parte central de la costa tamaulipeca, por la carretera n??m. 70 en Soto la Marina.</p>

                        <img src="img/pesca.jfif" height="600" width="1030" alt="" class="">

                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Playa Miramar</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" >  Playa Miramar es considerada como el atractivo tur??stico m??s importante del estado de Tamaulipas. Ubicado en el municipio de Ciudad Madero; zona metropolitana de Tampico, y es considerada una de las playas m??s bellas de todo el Golfo de M??xico.
                        Conozc??mosla hoy. La ribera de playa Miramar abarca una longitud aproximada de 10 km, cubierta con extensas ??reas de fina arena, adem??s que esta playa se caracteriza por su declive para adentrarse en sus aguas de manera gradual y sin peligro alguno de sumergirse de manera abrupta.
                        Si recorres a pie playa Miramar, te dar??s cuenta que se ofrecen todos los servicios tur??sticos que busca el turista: hoteles y bares con palapas, algunos incluso con camastros tambi??n; canchas de volley ball o futbol playero, zonas con amplios estacionamientos, servicios sanitarios, 
                        renta de bicicletas e incluso zonas para acampar. Playa Miramar suele ser tambi??n un punto de reuni??n de aficionados a la pr??ctica de deportes acu??ticos. Kayak, buceo, windsurf y kitesurf son algunas de las opciones que podr??s practicar aqu??. El mar en la zona suele ser tranquilo y apacible, 
                        su oleaje es suave, con un azul hipn??tico y cautivador.</p>

                        <img src="img/miramar.jfif" height="600" width="1030" alt="" class="">

                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Playa Tesoro</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" > Es una de las playas m??s famosas de Altamira en el Litoral del Golfo de M??xico. Cuenta con arena suave, aguas cristalinas y una pendiente pronunciada.
                        Es un buen lugar para practicar la pesca deportiva y para caminar y disfrutar la playa y el bello entorno natural.
                        Sin embargo, al visitarla es aconsejable llevar lo indispensable como una sombrilla, comida y bebidas, ya que no cuenta con ning??n tipo de infraestructura.</p>
                        
                        <img src="img/tesoro.jpeg" height="600" width="1030" alt="" class="">

                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Playa Carbonera</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" > En la playa se encuentran varios palapas y restaurantes que ofrecen uno de los productos t??picos el camar??n que se consume fresco o en sopas.
                        Adem??s, tambi??n se puede contratar botes ya sea para pasear en la costa o para practicar la pesca deportiva.
                        Se ubica en el municipio de San Fernando, localizado al Noreste de Tamaulipas, a s??lo dos horas de la frontera con Estados Unidos.</p>

                        <img src="img/carbonera.jpeg" height="600" width="1030" alt="" class="">

                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                         <h2 class="tipo-atraccion">Barra del tordo</h2>
                         <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" > La PLAYA BARRA DEL TORDO se encuentra en la carretera ALDAMA ??? BARRA DEL TORDO a 42 km de la cabecera municipal, 40 minutos en autom??vil es uno de los
                         lugares tur??sticos del municipio el cual recibe turistas de diferentes partes del pa??s as?? como tambi??n extranjeros, lugar donde se esta en contacto con la naturaleza desde el momento en que se llega, podr?? encontrar diferentes platillos 
                         para desgustar con la familia al igual practicar el deporte de pesca.</p>

                        <img src="img/tordo.jfif" height="600" width="1030" alt="" class="">
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
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

        <div>
            <section>
                <div class="container ventas titulo-recomendados">
                    <a onclick="history.back()"><div class="bk-btn"><div class="bk-btn-triangle"></div><div class="bk-btn-bar"></div></div></a>
                    <div class="info-atracciones">
                        <h1 class="titulo-municipio section-title1">Cd. Madero </h1>
                        <h2 class="tipo-atraccion" >Atracciones Naturales</h2>
                        <h2 class="titulo-atraccion"    >Playa Miramar </h2>
                        <p class="descripcion-atraccion" style="text-aling: justify">Esta costa de arenas doradas y aguas turquesas regala lugares inmejorables para pasar días de playa espectaculares. Aquí tienes todos los servicios necesarios, además del acceso a los equipos indispensables para la práctica de los deportes acuáticos de tu preferencia: vela, snorkel, buceo, kayak o windsurf.</p>
                        <center>
                        <img src="https://www.tamaulipas.gob.mx/turismo/wp-content/uploads/sites/50/2020/06/4-3.jpg">
                        </center>

                        <h2 class="titulo-atraccion">Río Pánuco</h2>
                        <p class="descripcion-atraccion" style="text-aling: justify">Si te gustan los paseos de horizontes marinos, una caminata por el malecón de Miramar. Desde allí se puede disfrutar de las seductoras vistas del mar del Golfo, por un lado, y de las aguas del río Pánuco.</p>
                        <center>
                        <img src="https://www.diariodexalapa.com.mx/local/o69m54-rio-papaloapan/ALTERNATES/LANDSCAPE_768/R%C3%ADo%20Papaloapan">
                        </center>

                        <h2 class="titulo-atraccion">Laguna del Carpintero</h2>
                        <p class="descripcion-atraccion" style="text-aling: justify">Es sorprendente pensar que este cuerpo de agua se encuentra en el corazón de la ciudad: cocodrilos, garzas y flamencos habitan entre los manglares y aguas transparentes. Una experiencia gratificante tomar una lancha para recorrer el área y emocionarse con su exótica fauna y paisajes.</p>
                        <img src="https://cdn.milenio.com/uploads/media/2021/09/30/laguna-del-carpintero-de-tampico-2.jpg">

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
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
    <title>Tamaholipa - Abasolo</title>
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
                        <h1 class="titulo-municipio section-title1">Guerrero</h1>
                        <h2 class="tipo-atraccion">Parques</h2>
                         <h2 class="titulo-atraccion">Monumentos Arquitect??nicos</h2>
                         <p class="descripcion-atraccion">En el municipio existe un museo considerado como centro arqueol??gico, ubicado en el viejo Guerrero, integrado por ruinas, caser??os e iglesias. A mediados de este siglo, las aguas de la presa Falc??n cubrieron una parte importante de la ciudad, la cual contaba con numerosas casas de piedra de un solo piso, adornadas con g??rgolas, cornisas, arcos y m??s elementos arquitect??nicos que resaltan estas bellas construcciones. En su mayor??a las casas hist??ricas de la poblaci??n fueron hechas de piedra, siguiendo la tradici??n colonial, y el balc??n se forj?? en varias piezas de hierro independientes, cuyo ensamble fue una clara muestra de la minuciosa herrer??a de esta ??poca.</p>
                         <center>
                         <img src="https://blog.rockthetraveller.com/wp-content/uploads/2018/02/Pueblos-escondidos-en-M%C3%A9xico-Guerrero-Viejo-slider-1200x490.jpg">
                         <center>

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
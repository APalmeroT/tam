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
    <title>Tamaholipa - Casas</title>
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
                <div class="container ventas titulo-recomendados" id="scrollear">
                    <a onclick="history.back()"><div class="bk-btn"><div class="bk-btn-triangle"></div><div class="bk-btn-bar"></div></div></a>
                    <div class="info-atracciones">
                        <h1 class="titulo-municipio section-title1">Casas</h1>
                        <h2 class="tipo-atraccion">Atracciones Patrimoniales o Hist??ricas</h2>
                        <h2 class="titulo-atraccion">Presidencia municipal Villa de Casas</h2>
                        <p class="descripcion-atraccion" style = "text-aling: center">La cabecera municipal, Villa de Casas, se localiza en las coordenadas 23??42?? latitud norte y 98??44??longitud oeste,</p>
                        <center>
                        <img src="https://i2.wp.com/prensalibertad.com/wp-content/uploads/2016/10/49135.jpg?resize=640%2C357&ssl=1">
                       </center>

                        <h2 class="titulo-atraccion">Iglesia pur??sima concepci??n</h2>
                        <p class="descripcion-atraccion"style = "text-aling: center">La iglesia de la Pur??sima es un templo religioso de culto cat??lico y est?? bajo la advocaci??n de Pur??sima Concepci??n en el municipio de Villa de casas tamaulipas. </p>
                      
                      <center>
                        <img src="https://mexicodesconocidoviajes.mx/wp-content/uploads/2019/01/iglesia-pur%C3%ADsima-concepci%C3%B3n-mier-ok.jpg">
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
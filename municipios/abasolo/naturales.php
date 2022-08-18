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

        <div>
            <section>
                <div class="container ventas titulo-recomendados" id="scrollear">
                    <a onclick="history.back()"><div class="bk-btn"><div class="bk-btn-triangle"></div><div class="bk-btn-bar"></div></div></a>
                    <div class="info-atracciones">
                        <h1 class="titulo-municipio section-title1">Abasolo</h1>
                        <h2 class="tipo-atraccion">Atracciones Naturales</h2>
                        <h2 class="titulo-atraccion">La Cascada del Porvenir</h2>
                        <p class="descripcion-atraccion"style="text-align: justify;" >Apartado de la ciudad, a 25 minutos de la ciudad de Abasolo y 
                         como parte del Rio Soto la marina, la cascada del porvenir cuenta con amplios cuerpos de agua tranquila y transparente, rodeado
                          de árboles  que brindan sombra en un día soleado , además de tener kioscos para instalarse cómodamente, perfecto para pasar un dia en familia.</p>
                          <center>
                          <img src="http://www.abasolo.gob.mx/wp-content/uploads/sites/63/2017/05/cascada1-850x500.jpg" >
                          </center>
                          
                          <h3 class=""></h3> 
                        <h2 class="titulo-atraccion">Las Delicias</h2>
                        <p class="descripcion-atraccion"style="text-align: justify;" >Perfecto para acampar, cocinar una rica carne asada al aire libre y tomar un baño en aguas cristalinas, Las Delicias es un sitio que puede satisfacer tus deseos, se encuentra a aproximadamente 42 minutos de la ciudad de Abasolo.</p>

                        <img src="https://www.elsoldetampico.com.mx/incoming/ool84j-las-delicias-y-la-cascada-dos-rinconcitos-de-tamaulipas-para-visitar-en-semana-santa/ALTERNATES/LANDSCAPE_1140/Las%20Delicias%20y%20la%20Cascada,%20dos%20rinconcitos%20de%20Tamaulipas%20para%20visitar%20en%20Semana%20Santa" >
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
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
                <div class="container ventas titulo-recomendados" id="scrollear">
                    <a onclick="history.back()"><div class="bk-btn"><div class="bk-btn-triangle"></div><div class="bk-btn-bar"></div></div></a>
                    <div class="info-atracciones">
                        <h1 class="titulo-municipio section-title1">Abasolo</h1>
                        <h2 class="tipo-atraccion">Atracciones Patrimoniales o Hist??ricas</h2>
                        <h2 class="titulo-atraccion">Casa de la Cultura Abasolo</h2>
                        <p class="descripcion-atraccion"style="text-align: justify;">Situada en el edificio del ayuntamiento, perteneciente al "Instituto Tamaulipeco para la Cultura y las Artes", ubicado en la calle L??zaro C??rdenas esq. Ju??rez, Col. Centro, CP. 87760, Abasolo, Tamaulipas.</p>
                        <center>
                        <img src= "https://upload.wikimedia.org/wikipedia/commons/2/24/Plaza_C%C3%ADvica_en_Abasolo%2C_Tamaulipas.jpg">
                        </center>
                        <h2 class="titulo-atraccion">Parroquia de Nuestra Se??ora del Rosario</h2>

                        <p class="descripcion-atraccion" style="text-align: justify;">Construida a fines del siglo XVIII y principios de XIX, se trata de una edificaci??n que ha estado en la ciudad desde sus inicios y se ha mantenido como uno de los centros religiosos m??s importantes de la regi??n.</p>
                        <img src= "https://www.tamaulipas.gob.mx/wp-content/uploads/2016/09/abasolo04-800x500.jpg">
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
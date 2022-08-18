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
    <link rel="icon" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Preguntas frecuentes</title>
</head>
<body>

        <?php
            session_start();
            if(isset($_SESSION['usuario'])){
            include 'includes/info-login-in.php';
            }
            if(!(isset($_SESSION['usuario']))){
            include 'includes/info-login.php';
            }
        ?>
    <div class="wrapper">
        <div class="nav-fondo">
            <?php
                include 'includes/header.php'
            ?>
        </div>
        
        <?php
            session_start();
            if(isset($_SESSION['usuario'])){
            $usuario_actual = $_SESSION['usuario'];
        
            if(strval($usuario_actual) == 'admin'){
                include 'includes/nav-admin.php';
            }else{
                include 'includes/nav-inicio.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
            include 'includes/nav-inicio.php';
            }
        ?>
        
        
        <main>
            <section class="featured">
                <div class="container">
                    <h2 class="section-title">Preguntas frecuentes</h2>
            
<div class="container">
                    <h1 class="section-title"></h1>
                  
                           <b><p >1.¿Que diferencia existe entre la sección "Categorías" y "Municipios?"</p></b>
                       
                            <p >La diferencia es que la sección de "Categorías" muestra los lugares mas destacados en cuestión
                                de turismo en Tamaulipas, y la sección "Municipios" muestra todos los municipios de Tamaulipas con 
                                una breve descripción</p>

                            <b><p >2.¿Cómo puedo crear mi cuenta?"</p></b>
                       
                            <p >Nuestro sitio cuenta con la opción de poder crear cuenta e iniciar sesión con los 
                                dos botones, que se encuentan en la esquina superior derecha.
                            </p>

                            <b><p >3.¿Como puedo observar el mapa de Tamaulipas desde el sitio?"</p></b>
                       
                            <p >En el apartado de Geografía, se muestra el mapa de Tamaulipas, de poder observarlo mas ampliamente
                                solo basta con dar un click para ver mas información.
                            </p>

                            <b><p >4.¿En la página se muestran otros estados de México?</p></b>
                       
                            <p>No, solo se muestran especificamente los del estado de Tamaulipas.
                            </p>

                            <b><p >5.¿Puedo guardar mi contraseña y cerrar sesión?</p></b>
                       
                            <p>Al crear tu cuenta, puedes guardar tu contraseña y cerrar sesión, tu usuario se guardara.
                            </p>
                            
                            <b><p >Para más información, contactate al siguiente correo: tamaholipasmx@gmail.com</p></b>
                       
                       
                         
                        </a>
                    </div>
                </div>
            </section>

        </main>
        <?php
            include 'includes/footer.php'
        ?>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>
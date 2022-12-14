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
    <title>Tamaholipa - Reynosa</title>
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
                        <h1 class="titulo-municipio section-title1">Reynosa</h1>
                        <h2 class="tipo-atraccion">Atracciones Naturales</h2>
                        <h2 class="titulo-atraccion">Teatro principal</h2>
                        <p class="descripcion-atraccion">Es un espacio ideal para la expresi??n de todas las disciplinas art??sticas como teatro, cinematograf??a, danza, opera y conciertos. Cuenta con la m??s alta tecnolog??a en mec??nica teatral, audio e iluminaci??n. Tiene capacidad para 1,181 espectadores, en butacas con excelente ??ptica, is??ptica, pan??ptica y ac??stica. Y tiene la m??s alta tecnolog??a en mec??nica teatral.<p>

                        <h2 class="titulo-atraccion">Teatro experimental</h2>
                        <p class="descripcion-atraccion">Es un espacio para la presentaci??n y promoci??n de grupos art??sticos que requieren de mayor intimidad en sus espect??culos. Por sus particulares caracter??sticas, es posible modificar con facilidad el tama??o y la posici??n del escenario, as?? como la cantidad y distribuci??n de los 300 asientos.</p>


                        <h2 class="titulo-atraccion">Sala Artemio Guerra</h2>
                        <p class="descripcion-atraccion">Es un amplio espacio destinado a exponer obras pl??sticas de gran tama??o pues cuenta con una extensi??n total de 852 metros cuadrados, con iluminaci??n dise??ada especialmente para el espacio.</p>


                        <h2 class="titulo-atraccion">Sala Acad??mica</h2>
                        <p class="descripcion-atraccion">??rea antecedente de los salones destinados para los talleres. Esta sala se usa tambi??n como galer??a de exposici??n de menor tama??o seg??n los requerimientos de las obras a exponer.</p>


                        <h2 class="titulo-atraccion">Biblioteca Centro de Lectura</h2>
                        <p class="descripcion-atraccion">Espacio dedicado al fomento de la lectura de los ni??os y j??venes, que cuenta con su sala de lectura, ??rea audiovisual y mesas de trabajo.
                            Recomendaciones:
                            Respetar el horario de lunes a viernes de 10:00 am a 6:00 pm,S??bado
                            10:00 am a 5:00 pm y domingo 12:00 a 5:00 pm </p


                        <h2 class="titulo-atraccion">Zoologico de Reynosa</h2>
                        <p class="descripcion-atraccion">Situado justo a la orilla del Rio Bravo y cuenta con una extensi??n amplia de terreno para esparcimiento familiar. Se puede realizar actividades de esparcimiento como un dia de campo, reuniones,entre otras</p>


                        <h2 class="titulo-atraccion">La Ciudad de las familias felices.</h2>
                        <p class="descripcion-atraccion">Parque tem??tico interactivo que ofrece por igual entretenimiento y educaci??n para ni??os y adolescentes.</p>   
                             
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
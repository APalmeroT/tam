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
                        
                        <h1 class="titulo-municipio section-title1">Pueblos M??gicos</h1>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Mi??r</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" > En la parte noreste de Tamaulipas se ubica Mi??r, que, gracias a sus ra??ces hist??ricas, Mier fue declarado Pueblo M??gico en 2007. Fundado en el a??o de 1753. Fue nombrada Ciudad Heroica por haber resistido y salir victoriosa en la Batalla de los Frijoles Pintos, ocurrida en diciembre de 1842, un conflicto armado entre el Ej??rcito Mexicano y la entonces Rep??blica de Texas. Narra la historia que Don Antonio L??pez de Santa Anna dio la orden de fusilar a los 200 prisioneros del ej??rcito texano, sin embargo, tras varias gestiones diplom??ticas entre Inglaterra y Francia, se resolvi?? fusilar a uno de cada diez prisioneros. Para elegir qui??n perder??a la vida, se hizo un sorteo muy peculiar. En un recipiente se colocaron frijoles pintos y negros, se vendaron los ojos de los soldados y s??lo quien sac?? un frijol negro, fue fusilado.
                         En su arquitectura destacan algunos lugares por su trascendencia hist??rica tales como: el Museo de los Frijoles Pintos, la Casa de la Cultura, la capilla de Juan Bautista y la Casa de Justicia Mayor.
                        Aproximadamente a 30 minutos de la ciudad, se encuentra ubicada la presa Falc??n, en donde se pueden realizar actividades recreativas. Cuenta con una variada oferta gastron??mica, pero sus principales platillos son el bistec entreverado con tocino, las milanesas, el cabrito en salsa y el caldillo fiscale??o. </p>
                            
                        <img src="img/mier/parque.jpg" alt="" class="">
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Tula</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion"  style="text-align: justify;">Ubicado en un ??rea de transici??n entre el desierto y el bosque, este Pueblo M??gico de reciente creaci??n es rico en paisajes contrastantes, gastronom??a y artesan??as. Fue cuna de civilizaciones antiguas y movimientos revolucionarios, es creador de la emblem??tica cuera tulteca y hace m??s de cien a??os fue capital de Tamaulipas.
                        Tortilla colorada, papa, chorizo, queso, col, cebolla, jitomate y chile piqu??n, son los ingredientes que se saborean en las tradicionales enchiladas tultecas.
                        La Plaza de Armas sorprende con su abundancia de ??rboles y palmas. Sobresalen las altas y delgadas palmas y el denso follaje de las anacuas. Aqu?? se observa a la gente en su andar tranquilo, el quiosco colonial con ni??os jugando y la emblem??tica iglesia de finales del siglo XVIII en honor a San Antonio de Padua.
                        La iglesia posee un techo de ladrillo, seis candelabros, paredes de piedra caliche y un San Antonio vestido con oro. La leyenda cuenta que la escultura del santo ven??a de paso pero ya no quiso irse, pues se puso muy pesada y no la pudieron levantar.
                        La Plaza de Armas sorprende con su abundancia de ??rboles y palmas. Sobresalen las altas y delgadas palmas y el denso follaje de las anacuas. Aqu?? se observa a la gente en su andar tranquilo, el quiosco colonial con ni??os jugando y la emblem??tica iglesia de finales del siglo XVIII en honor a San Antonio de Padua.La iglesia posee un techo de ladrillo, seis candelabros, paredes de piedra caliche y un San Antonio vestido con oro. La leyenda cuenta que la escultura del santo ven??a de paso pero ya no quiso irse, pues se puso muy pesada y no la pudieron levantar.
                        Recorriendo las calles se pueden apreciar balcones de hierro forjado, paredes de adobe, el callej??n del Pozo Honrado y varios edificios hist??ricos como la Casa de Cultura, el Casino Tulteco, la Presidencia Municipal, la casa de la familia del general Alberto Carrera Torres, y la casa donde naci?? la segunda esposa de Porfirio D??az: Mar??a Fabiana Sebastiana Carmen Romero Rubio y Castell??.
                        Estar en Tula sin conocer el trabajo de sus artesanos es ignorar un atractivo que da identidad y orgullo a la localidad. Sin duda la pieza m??s emblem??tica es la cuera tamaulipeca que, en realidad, es la cuera tulteca. La vestimenta que se usa en la regi??n desde hace m??s de cien a??os fue distintiva de revolucionarios como el general Alberto Carrera Torres, pero tambi??n la han portado personalidades muy variadas desde Pedro Infante hasta Juan Pablo II.

</p>
                        <img src="img/tula.jpeg" alt="" class="">
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
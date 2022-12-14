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

                        <h1 class="titulo-municipio section-title1">Ciudades</h1>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Cd. Victoria</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" > Ciudad Victoria es la capital de Tamaulipas, aqu?? encontrar??s la informaci??n m??s relevante sobre que hacer o que visitar en tu estancia en esta bella ciudad.
                        Victoria cuenta con un zool??gico llamado Zool??gico de Tamatan ubicado en los terrenos que sirvieron como propiedad del presidente Manuel Gonz??lez en 1921, este zool??gico cuenta con m??s de 1,000 especies de Australia, Asia, Am??rica del Norte y ??frica, adem??s de un aviario y un zool??gico infantil.
                        Visita el Museo de Historia de Tamaulipas y aprende sobre la fascinante historia de Tamaulipas en este hermoso edificio que una vez sirvi?? como convento y cuartel general del ej??rcito.
                        Otro museo es el museo Tamux, uno de los principales museos de historia natural de M??xico, cuenta con un planetario y un jard??n bot??nico, adem??s de exhibiciones interactivas sobre asteroides, clonaci??n de dinosaurios y f??siles.
                        Si deseas hacer algo diferente y de aventura te recomendamos realizar el nuevo recorrido Parque Camino Real a Tula o tambi??n subir a La Bandera o inclusive visitar el Parque Los Troncones.</p>
                                                                                    
                        <img src="img/cd. victoria/troncones.jpg"  height="600" width="1030" alt="" class="">

                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Mante</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" >Se encuentra en la parte sur de Tamaulipas, posee un clima semi-seco, tanto con temperaturas de 
                        46??C en verano, as?? como 4??C en invierno. Por su caracter ??rido, la flora que puede ser encontrada en esta
                        regi??n son matorrales subinermes porvifolios y selva baja espinosa que se desarollan lentamente a pesar de ser originarios de este clima. La fauna est?? compuesta por armadillos, conejos, liebres y gato mont??s.
                        Los terrenos son aptos para practicar la agricultura y actividades pecuarias, contando con diferentes tipos de suelo entre ellos el litosol
                        asociado con redzina de textura fina, vertisol p??lico y fluvisol e??tico.
                        Ciudad Mante cuenta con una Casa de la Cultura y tradiciones que se realizan cada mes de febrero, as?? como la feria del az??car donde se realizan eventos con tem??tica de deportes y carnavales o los dos centros recreativos ??????El Nacimiento?????? y ??????La aguja??????.</p>                                                 
                        
                        
                        <img src="img/elmante/presa.png"  height="600" width="1030" alt="" class=""  >
                  
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Reynosa</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" > Destaca en su industria maquiladora, motivo por el cual viajeros de negocios de todo el mundo llegan a visitarla, ya que al poseer un gran Producto Interno Bruto (PIB) es de inmensa atracci??n a inversionistas en el sector industrial, manufacturero y tecnol??gico.
                        Sus atracciones de entretenimiento est??n situadas en toda la ciudad. A??n conserva edificaciones con historia colonial; un quiosco construido desde 1910 por colectas p??blicas; su escencia del folclore donde se puede escuchar a conjuntos norte??os que tocan el acorde??n; y un edificio antiguo que ahora da hogar a El Museo Hist??rico de Reynosa.
                        Sin embargo, tambi??n posee atracciones contempor??neas, tal como el Centro de Arte y Cultura, donde se encuentra un parque ecol??gico donde turistas de car??cter nacional o internacional pueden disfrutar y admirar la flora y fauna local con muchas comodidades. El Centro Cultural tambi??n cuenta con un Teatro Experimental, donde se llevan 
                        a cabo presentaciones personalizadas, y una Galer??a de Exposiciones de artes pl??sticas.</p>
                                                                                    
                        
                        <img src="img/Reynosa/Reynosa 1.jpeg" height="600" width="1030" alt="" class="">

                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Matamoros</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" > Una de sus principales y m??s famosas atracciones es la Playa Bagdad, preferenciada por los turistas y amada por los torneos de pesca de nivel internacional que se realizan en el lugar.
                        Matamoros da lugar a las ya muy populares callejoneadas, las cuales se realizan en la Calle 9, donde los visitantes podr??n celebrar con toda su familia y participar en eventos de cultura popular, con danza, m??sica y gastronom??a. Tambi??n cuenta 
                        con un gran n??mero de museos, entre ellos est??n el Museo del Agrarismo Mexicano y Museo Casamata, los cuales han puesto en exhibici??n fragmentos hist??ricos de Matamoros que permitir??n conocer a gran detalle su pasado; el Museo del Ferrocarril, situado en una estaci??n de pasajeros verdadera que dej?? de funcionar en 1997, con diferentes salas en exibici??n sobre la evoluci??n del medio de transporte; y el Museo Rigo Tovar, en honor a ???el padre de la m??sica grupera tropical???, el cual tambi??n le rinde tributo por ser un ??dolo emblematico de la cultura mexicana.</p>
                                                                                    
                        <img src="img/matamoros/matamoros.jpeg" height="600" width="1030" alt="" class=""> 

                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Nuevo Ladero</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" >Orgullosamente, es considerado la principal aduana de M??xico. Constantemente se moderniza en sus atracciones, cuenta con un centro cultural con capacidad total de 1,500 m2 para sus eventos, donde sus visitantes podr??n disfrutar de talleres, exposiciones, conferencias, teatro, entre otras actividades culturales.
                        Los amantes de la historia podr??n visitar el Museo de Historia Natural donde conocer??n las ra??zes de nuestro pasado. El Acuario es otro destino que vale la pena visitar, posee 19 peceras, 12 de agua salada, 6 de agua dulce, y una de salobre (agua salada en menor porcentaje que la del propio mar) la cual da hogar a 96 especies diferentes, en un total de 585 peces que conviven m??tuamente.
                        Otro lugar digno de mencionar es el zool??gico de la ciudad, que cuenta con 100 especies de animales y 550 ejemplares, donde podr??s disfrutar de alimentar a sus amigables jirafas con unas deliciosas zanahoria</p>
                                                                                    
                        
                        <img src="img/nuevoladero/nuevoladero.jpeg"  height="600" width="1030" alt="" class="">
                        
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Tampico</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" > Al caminar por el coraz??n de la ciudad la arquitectura de los edificios antiguos es algo que sobre sale de lo dem??s, su fachada nos remonta a el Porfiriatio y revoluci??n est??tica de Europa a principios del siglo XX. Para conocer estos edificios y su historia es recomendable realizar una caminata por el Centro Hist??rico, donde se encuentra el punto m??s 
                        representativo, la Plaza de Armas, la cual posee un quiosco donde se realizan espect??culos para toda la familia y que posee una est??tica mezclada por ecl??ctico barroco y necolonial que lo hace ser ??nico.
                        Es importante no perderse de visitar la Pir??mide de las Flores, la cual es una pir??mide creado por la cultura Huasteca, escondida en medio de edificios contempor??neos. Plaza de la Libertad, el viejo Palacio Municipal, el edificio ??guila, el Llaca y el edificio antiguo de La Aduana, donde los turistas pueden deleitar su paladar al comprar un antojo tradicional de el lugar, preparado con pan franc??s y otros ingredentes: las tortas de la barda.
                        La gastronom??a de tampico es muy variada gracias a su historia relacionada con el p??troleo, personajes de diferentes nacionalidades contribuyeron a lo que Tampico posee hoy en d??a. Al visitar tampico es obligatorio pasar por el mercado de mariscos La Puntilla, donde se encuentra materia prima reci??n salida del mar, r??os y lagunas, entre ellas jaiba, osti??n, camar??n, hueva, langostino, jurel, entre otras delicias del mar. En el mercado Ju??rez tambi??n es posible encontrar tortas de la barda y comer tacos de barbacoa de res, que los locales consideran los mejores en todo Tampico.
                        Otro destino que hay que tomar en cuenta es el Malec??n, tambien conocido como Las Escolleras, donde es posible admirar el Monumento a los Marinos Ca??dos, o bien, La Laguna del Carpintero, conectado con el r??o Panuco, as?? como dar un paseo por el Canal de la Cortadura donde peque??os restaurantes y locales donde realizar compras se encuentran en el lugar, haciendolo ideal para turistas que disfruten de la naturaleza con un toque de urbanismo.</p>

                        
                        <img src="img/tampicoo.jpg" height="600" width="1030" alt="" class="">
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
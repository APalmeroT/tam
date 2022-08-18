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
                        <p class="descripcion-atraccion" style="text-align: justify;" > Ciudad Victoria es la capital de Tamaulipas, aquí encontrarás la información más relevante sobre que hacer o que visitar en tu estancia en esta bella ciudad.
                        Victoria cuenta con un zoológico llamado Zoológico de Tamatan ubicado en los terrenos que sirvieron como propiedad del presidente Manuel González en 1921, este zoológico cuenta con más de 1,000 especies de Australia, Asia, América del Norte y África, además de un aviario y un zoológico infantil.
                        Visita el Museo de Historia de Tamaulipas y aprende sobre la fascinante historia de Tamaulipas en este hermoso edificio que una vez sirvió como convento y cuartel general del ejército.
                        Otro museo es el museo Tamux, uno de los principales museos de historia natural de México, cuenta con un planetario y un jardín botánico, además de exhibiciones interactivas sobre asteroides, clonación de dinosaurios y fósiles.
                        Si deseas hacer algo diferente y de aventura te recomendamos realizar el nuevo recorrido Parque Camino Real a Tula o también subir a La Bandera o inclusive visitar el Parque Los Troncones.</p>
                                                                                    
                        <img src="img/cd. victoria/troncones.jpg"  height="600" width="1030" alt="" class="">

                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Mante</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" >Se encuentra en la parte sur de Tamaulipas, posee un clima semi-seco, tanto con temperaturas de 
                        46ºC en verano, así como 4ºC en invierno. Por su caracter árido, la flora que puede ser encontrada en esta
                        región son matorrales subinermes porvifolios y selva baja espinosa que se desarollan lentamente a pesar de ser originarios de este clima. La fauna está compuesta por armadillos, conejos, liebres y gato montés.
                        Los terrenos son aptos para practicar la agricultura y actividades pecuarias, contando con diferentes tipos de suelo entre ellos el litosol
                        asociado con redzina de textura fina, vertisol pélico y fluvisol eútico.
                        Ciudad Mante cuenta con una Casa de la Cultura y tradiciones que se realizan cada mes de febrero, así como la feria del azúcar donde se realizan eventos con temática de deportes y carnavales o los dos centros recreativos “”El Nacimiento”” y “”La aguja””.</p>                                                 
                        
                        
                        <img src="img/elmante/presa.png"  height="600" width="1030" alt="" class=""  >
                  
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Reynosa</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" > Destaca en su industria maquiladora, motivo por el cual viajeros de negocios de todo el mundo llegan a visitarla, ya que al poseer un gran Producto Interno Bruto (PIB) es de inmensa atracción a inversionistas en el sector industrial, manufacturero y tecnológico.
                        Sus atracciones de entretenimiento están situadas en toda la ciudad. Aún conserva edificaciones con historia colonial; un quiosco construido desde 1910 por colectas públicas; su escencia del folclore donde se puede escuchar a conjuntos norteños que tocan el acordeón; y un edificio antiguo que ahora da hogar a El Museo Histórico de Reynosa.
                        Sin embargo, también posee atracciones contemporáneas, tal como el Centro de Arte y Cultura, donde se encuentra un parque ecológico donde turistas de carácter nacional o internacional pueden disfrutar y admirar la flora y fauna local con muchas comodidades. El Centro Cultural también cuenta con un Teatro Experimental, donde se llevan 
                        a cabo presentaciones personalizadas, y una Galería de Exposiciones de artes plásticas.</p>
                                                                                    
                        
                        <img src="img/Reynosa/Reynosa 1.jpeg" height="600" width="1030" alt="" class="">

                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Matamoros</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" > Una de sus principales y más famosas atracciones es la Playa Bagdad, preferenciada por los turistas y amada por los torneos de pesca de nivel internacional que se realizan en el lugar.
                        Matamoros da lugar a las ya muy populares callejoneadas, las cuales se realizan en la Calle 9, donde los visitantes podrán celebrar con toda su familia y participar en eventos de cultura popular, con danza, música y gastronomía. También cuenta 
                        con un gran número de museos, entre ellos están el Museo del Agrarismo Mexicano y Museo Casamata, los cuales han puesto en exhibición fragmentos históricos de Matamoros que permitirán conocer a gran detalle su pasado; el Museo del Ferrocarril, situado en una estación de pasajeros verdadera que dejó de funcionar en 1997, con diferentes salas en exibición sobre la evolución del medio de transporte; y el Museo Rigo Tovar, en honor a “el padre de la música grupera tropical”, el cual también le rinde tributo por ser un ídolo emblematico de la cultura mexicana.</p>
                                                                                    
                        <img src="img/matamoros/matamoros.jpeg" height="600" width="1030" alt="" class=""> 

                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Nuevo Ladero</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" >Orgullosamente, es considerado la principal aduana de México. Constantemente se moderniza en sus atracciones, cuenta con un centro cultural con capacidad total de 1,500 m2 para sus eventos, donde sus visitantes podrán disfrutar de talleres, exposiciones, conferencias, teatro, entre otras actividades culturales.
                        Los amantes de la historia podrán visitar el Museo de Historia Natural donde conocerán las raízes de nuestro pasado. El Acuario es otro destino que vale la pena visitar, posee 19 peceras, 12 de agua salada, 6 de agua dulce, y una de salobre (agua salada en menor porcentaje que la del propio mar) la cual da hogar a 96 especies diferentes, en un total de 585 peces que conviven mútuamente.
                        Otro lugar digno de mencionar es el zoológico de la ciudad, que cuenta con 100 especies de animales y 550 ejemplares, donde podrás disfrutar de alimentar a sus amigables jirafas con unas deliciosas zanahoria</p>
                                                                                    
                        
                        <img src="img/nuevoladero/nuevoladero.jpeg"  height="600" width="1030" alt="" class="">
                        
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <h2 class="tipo-atraccion">Tampico</h2>
                        <h1 class="titulo-municipio section-title1">___________________________</h1>
                        <p class="descripcion-atraccion" style="text-align: justify;" > Al caminar por el corazón de la ciudad la arquitectura de los edificios antiguos es algo que sobre sale de lo demás, su fachada nos remonta a el Porfiriatio y revolución estética de Europa a principios del siglo XX. Para conocer estos edificios y su historia es recomendable realizar una caminata por el Centro Histórico, donde se encuentra el punto más 
                        representativo, la Plaza de Armas, la cual posee un quiosco donde se realizan espectáculos para toda la familia y que posee una estética mezclada por ecléctico barroco y necolonial que lo hace ser único.
                        Es importante no perderse de visitar la Pirámide de las Flores, la cual es una pirámide creado por la cultura Huasteca, escondida en medio de edificios contemporáneos. Plaza de la Libertad, el viejo Palacio Municipal, el edificio Águila, el Llaca y el edificio antiguo de La Aduana, donde los turistas pueden deleitar su paladar al comprar un antojo tradicional de el lugar, preparado con pan francés y otros ingredentes: las tortas de la barda.
                        La gastronomía de tampico es muy variada gracias a su historia relacionada con el pétroleo, personajes de diferentes nacionalidades contribuyeron a lo que Tampico posee hoy en día. Al visitar tampico es obligatorio pasar por el mercado de mariscos La Puntilla, donde se encuentra materia prima recién salida del mar, ríos y lagunas, entre ellas jaiba, ostión, camarón, hueva, langostino, jurel, entre otras delicias del mar. En el mercado Juárez también es posible encontrar tortas de la barda y comer tacos de barbacoa de res, que los locales consideran los mejores en todo Tampico.
                        Otro destino que hay que tomar en cuenta es el Malecón, tambien conocido como Las Escolleras, donde es posible admirar el Monumento a los Marinos Caídos, o bien, La Laguna del Carpintero, conectado con el río Panuco, así como dar un paseo por el Canal de la Cortadura donde pequeños restaurantes y locales donde realizar compras se encuentran en el lugar, haciendolo ideal para turistas que disfruten de la naturaleza con un toque de urbanismo.</p>

                        
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
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
    <title>Tamaholipa-Cultura</title>
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
                    <img src="tamcul.png" height="400" width="1030" alt="" class="">
                      
                        <h2 class="tipo-atraccion">El origen de todo...</h2>
                        <p class="descripcion-atraccion" style="text-align: justify;" >El nombre del Estado se deriva de Tamaholipa palabra de origen Huasteco, donde el prefijo tam significa <b>"lugar donde"</b>. Aunque no existe un acuerdo del significado de holipa, parece ser que la interpretaci??n m??s com??n es <b>"rezar mucho"</b>, lo cual significa "lugar donde se reza mucho". Durante el periodo colonial temprano, 
                            uno de los pueblos originales de Tamaulipas, hoy extinto, era conocido como los <b>"Santos"</b>, en lo que parece una hispanizaci??n del t??rmino holipa.  </p>
                            <p>
                            <p class="descripcion-atraccion" style="text-align: justify;" >Las regiones culturales de Tamaulipas se dividen tradicionalmente en Norte, Centro, Suroeste (Antiguo Cuarto distrito) y costa sur o regi??n huasteca. En Tamaulipas, la cultura mestiza deriv?? en varias manifestaciones culturales. En el Norte se presentan caracter??sticas culturales similares al de las entidades del 
                                                    noreste mexicano: La polka, la redova, el chotis, ritmos europeos que llegaron all?? durante el Siglo XIX y que han tomado cartas de naturalizaci??n en la regi??n. Actualmente la fusi??n de la m??sica norte??a con otros ritmos modernos como la cumbia, la m??sica de banda y el corrido postrevolucionario se han extendido por todo el 
                                                    pa??s, conocida como el movimiento de la m??sica grupera. En el centro del Estado, en la zona serrana de San Carlos, se conserva la tradicional m??sica de la picota, acompa??ada por danzas y ejecutadas al son de la tambora y el clarinete. En la regi??n del antiguo cuarto distrito, zona semides??rtica donde se asentaron las primeras 
                                                    misiones en el estado, se conservan danzas religiosas <b>"de pie y de a caballo" </b> y danzas procesionales que conllevan una compleja organizaci??n comunitaria para su organizaci??n.
                            <p>   
                            <p class="descripcion-atraccion"  style="text-align: justify;"> En la regi??n huasteca se practica el huapango, tocado generalmente por trovadores. Desde el 2000, el Gobernador Tom??s Yarrington, inici?? varios festivales culturales que se han mantenido y que se cuentan entre los principales de M??xico. El Festival Internacional Tamaulipas que es paralelo al Festival Internacional Cervantino de
                                                     Guanajuato, y que se hizo de acuerdo a las tradicionales fiestas de octubre en honor de la creaci??n de la capital del Estado, se desarrolla un amplio programa de actividades con m??s de 650 eventos art??sticos y culturales, presentando artistas de talla local, nacional e internacional, presentando conciertos de ??pera, danza cl??sica,
                                                     teatro, m??sica popular, exposiciones etc. El estado de Tamaulipas cuenta con una importante infraestructura cultural, y es el estado mexicano que cuenta con el mayor n??mero de teatros por habitante. Destacan en la capital, Cd. Victoria, el Centro Cultural Tamaulipas, el Museo de Historia Natural "Tamux" (significa encuentro en Tenek,
                                                      idioma huasteco), el Museo Regional de Historia de Tamaulipas ubicado en el Ex-Asilo Vicentino, la Casa del Arte, el Planetario "Dr.Ramiro Iglesias Leal" y la Rotonda de Tamaulipecos Ilustres. En Tampico: EL Espacio Cultural Metropolitano, que alberga el Museo de la Cultura Huasteca, ubicado en la Laguna del Carpintero, la Casa de la Cultura y el edificio de la Aduana Mar??tima. En Matamoros, el Teatro de la Reforma, recinto cultural centenario, el Museo Hist??rico del Fuerte Casa Mata, el Espacio Cultural Ol??mpico, la Galer??a Albertina, el Museo de Arte Contempor??neo de Tamaulipas, el Conservatorio de M??sica San Juan Siglo XXI y el Museo del Agrarismo Mexicano, en el sitio donde se realizara el primer reparto agrario por el Gral Lucio Blanco durante la Revoluci??n Mexicana, y en Nuevo Laredo el Centro Cultural Nuevo Laredo, que alberga el Museo "Jos?? Reyes Meza" y el Museo de Historia Natural 
                                                    Nuevo Laredo, El Centro Regional de Promoci??n a la Literatura Estaci??n Palabra Grabriel Garc??a M??rquez".  </p>
                            <img src="https://i.pinimg.com/originals/a5/38/b5/a538b5d402f5f6ca8096c90cc34332db.jpg">
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
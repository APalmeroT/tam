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
    <title>Tamaholipa - Historia</title>
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
                    <img src="tamhis.png" height="400" width="1030" alt="" class="">
                        <h2 class="tipo-atraccion">...</h2>
                        <p   class="descripcion-atraccion" style="text-align: justify;">De acuerdo a registros paleontol??gicos y arqueol??gicos, los primeros asentamientos humanos en Tamaulipas datan de doce milenios antes de la era cristiana, y est??n identificados en el llamado "Complejo Diablo", en alusi??n a un ca????n de la Sierra de Tamaulipas. M??s tarde, a nivel del Tr??pico de C??ncer, aparecen las primeras manifestaciones de la civilizaci??n ind??gena, ligadas al descubrimiento y domesticaci??n del ma??z y con ello, al inicio de la vida agr??cola y la agrupaci??n de asentamientos permanentes. Consecuentemente, en este per??odo comenz?? a fincarse en esta regi??n una de las manifestaciones de la cultura Mesoamericana.

                                                            Tres fueron las ??reas culturales de Mesoam??rica en Tamaulipas: los pueblos de la Sierra Madre Oriental, los pueblos de la Sierra de Tamaulipas y la Huasteca. Fue en esta ??ltima ??rea donde el patr??n cultural mesoamericano se defini?? con mayor claridad y cuyo legado se ha trasmitido hasta nuestros d??as en las comunidades ind??genas huastecas, aunque ??stas no sobrevivieron en Tamaulipas y s?? en otras entidades como San Luis Potos?? e Hidalgo. En nuestra entidad, los huastecas se asentaron principalmente a lo largo de la cuenca baja del r??o Guayalejo-Tames?? y en los valles monta??osos de Tanguanch??n (Ocampo) y Tammapul (Tula). Pol??ticamente no constituyeron un Estado, sino m??s bien se integraban como un conjunto de se??or??os. 
                                                            </p>
                                                             <p class="descripcion-atraccion" style="text-align: justify;" > Fueron h??biles artesanos y pose??an una compleja cosmogon??a religiosa, al grado de que en la Huasteca surgi?? el concepto del dios Quetzalc??atl. Como pueblo ubicado en un espacio perif??rico de la Mesoam??rica nuclear, mantuvieron una larga autonom??a hasta que en el poscl??sico tard??o los mexicanas sometieron a su dominio a una porci??n de la Huasteca.

                                                            En Tamaulipas, entre los siglos XV y XVI, sucesivas oleadas de n??madas del norte hicieron replegar a los huastecas hacia el r??o P??nuco, de tal forma que al momento de la Conquista espa??ola, pr??cticamente ya no ocupaban su territorio. Sobre los grupos de la Sierra Madre Oriental, si bien disponemos de investigaciones arqueol??gicas, no tenemos mucha informaci??n sobre la identificaci??n cultural de los pueblos prehisp??nicos que la ocuparon. Hacia la parte meridional, en la regi??n de Ocampo, surgieron sociedades ind??genas que pose??an una significativa diversificaci??n agr??cola, mientras que en la parte septentrional, entre los filos de la serran??a, hubo asentamientos con un gran trabajo constructivo, como se hace patente en el Balc??n de Montezuma, una zona arqueol??gica ubicada en las cercan??as de la actual capital del estado. Para el siglo XVII, al tiempo del primer encuentro con la cultura occidental, la Sierra Madre era ocupada por los llamados indios pisones. Para el caso de la Sierra de Tamaulipas y como se ha mencionado, de ella se tienen antiqu??simas referencias hist??ricas, as?? como m??ltiples ejemplos de la evoluci??n posterior de los pueblos ind??genas que la habitaron.

                                                            Lo anterior es visible en las numerosas ruinas diseminadas en toda esta casi impenetrable serran??a, como es el caso de El Sabinito, un interesante sitio actualmente en investigaci??n, que nos habla de una sociedad organizada de tipo mesoamericano. Sin embargo, existen evidencias de que durante el poscl??sico este modelo cultural se agot??, quedando habitada la sierra por diversos grupos de agricultores, pero de un nivel de civilizaci??n menor. En contraste al mundo mesoamericano, en el norte de la entidad y en todo el conjunto del noreste de M??xico y el sur de Texas, imper?? en la antig??edad y hasta el arribo de los espa??oles, un patr??n cultural de m??ltiples grupos tribales n??madas (los chichimecas), entre los que el tronco ling????stico predominante era la lengua coahuilteca. Este vasto espacio norte??o form?? parte del ??rea cultural de Aridoam??rica o la "Am??rica ??rida". Se trataba de la presencia de numerosas bandas de indios cazadores-recolectores, que deambulaban por las llanuras, especialmente en las cercan??as de las corrientes fluviales, los que pose??an una reducida cultura material y muy elementales estructuras de organizaci??n social. Por mencionar algunos, cabr??a citar a los carrizos de orillas del r??o Bravo, a los pintos de las riberas del Conchas o a los janambres del centro de Tamaulipas. Asolados por las redadas esclavistas provenientes de la Huasteca o del Nuevo Reino de Le??n durante los siglos XVI y XVII, los indios de Tamaulipas ofrecieron una fiera resistencia a la ocupaci??n novohispana. Adem??s, este espacio costero se convirti?? en refugio de las etnias de las entidades vecinas, identificados como "ap??statas", es decir, que hab??an renunciado a la cristianizaci??n. Con la colonizaci??n de Tamaulipas a partir de la segunda mitad del siglo XVIII, se intent?? asentar a los indios chichimecas en misiones a cargo de frailes franciscanos. Sin embargo, hubo muy poco arraigo ind??gena en estas misiones y los diversos grupos que deambulaban por su territorio acabaron por extinguirse. En este proceso actuaron la guerra, el desequilibrio de sus antiguos h??bitats y costumbres de caza y recolecci??n, las epidemias y su poca disposici??n para asimilarse al orden colonial. Algunos grupos trascendieron hasta mediados del siglo XIX, hasta finalmente desaparecer como etnias socialmente diferenciadas.

                                                            Antes de la llegada de los conquistadores espa??oles el territorio de Tamaulipas estuvo ocupado por varias etnias de las cuales sobresalen los huastecos. Am??rico Vespucio, el c??lebre cart??grafo italiano que bautiz?? al continente, visit?? el territorio tamaulipeco a finales del siglo XVI y en su correspondencia con Lorenzo di Pierfrancesco mencion?? que los nativos llamaban al territorio Lariab. Durante la colonia se le conoci?? con otros nombres: Reino Guasteca, Provincia de Amichel y Tierra Garayana, Provincia de P??nuco, Comarca de Paul, de Alifau y Ocinan, M??danos de la Magdalena, Costa del Seno Mexicano, Nuevo Reino de Le??n y Nuevo Santander. El nombre actual proviene de la fundaci??n del pueblo de Tamaholipa que hiciese Fray Andr??s de Olmos en 1544. 
                                                            El primer asentamiento permanente Espa??ol en el ??rea fue Tampico en 1554. Lo que ahora es Tamaulipas fue incorporada como una provincia de la Nueva Espa??a en 1746 con el nombre de Nuevo Santander.

                                                            Durante la mayor parte de la colonia la poblaci??n europea sufri?? los embates de los grupos ind??genas rebeldes, a los que a su vez esclavizaban o asesinaban. En 1732 Jos?? de Escand??n arrib?? al territorio y desarroll?? un agresivo programa de colonizaci??n y pacificaci??n que se extender??a al vecino Nuevo Reino de Le??n. Tras el llamado a la independencia hecho por Miguel Hidalgo y Costilla, Bernardo Guti??rrez de Lara, originario de Revilla (hoy Nva, Cd, Guerrero, Tam.), se uni?? a las filas insurgentes y obtuvo importantes victorias en San Antonio Bejar (hoy San Antonio, Texas).

                                                            El 17 de abril de 1817 desembarc?? en las costas tamaulipecas Francisco Javier Mina, rebelde espa??ol que lleg?? al territorio a combatir al ej??rcito imperial de su pa??s. A mediados de siglo, tras la consumaci??n de la independencia, la pugna entre liberales y conservadores y la invasi??n de los Estados Unidos afectaron enormemente la regi??n, la cual adquiri?? un fuerte sentido de autonom??a. Tras los abusos generados por la presidencia de Antonio L??pez de Santa Anna, en 1840 decidi?? independizarse de M??xico y unirse a la Rep??blica del R??o Grande junto a los estados de Nuevo Le??n y Coahuila. La incipiente rep??blica fue sofocada por el ej??rcito mexicano. Durante la Guerra de Reforma y la Revoluci??n mexicana se libraron importantes batallas en territorio tamaulipeco y a principios del siglo XX Emilio Portes Gil, oriundo del estado, se convertir??a en presidente interino de M??xico.  </p>
                                                            <center>                       
                                                            <img src="https://aniber10.files.wordpress.com/2013/11/18104-escudotam.gif?w=365&h=422">
        </center>
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

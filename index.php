<?php
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
    header("Content-type: text/html;charset=ISO-8859-1");
?>
<?php
    require_once("includes/php/dbc_public.inc");

    dbc_public();
    $database = 'especiales';
    $rows = mysql_db_query($database,"SELECT id,contenido_titulo,contenido_texto FROM contenido where contenido_nivel = '1' AND contenido_status = 'Aprobado' AND contenido_titulo NOT LIKE '' Order By contenido_ordenamiento"); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- metas -->
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <!--meta charset="utf-8"-->
    <meta name="author" content="Emprende Perú">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- title  -->
    <title>Marketing Institucional - Universidad del Pacífico</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="https://www.up.edu.pe/images/favicon.ico" type="image/vnd.microsoft.icon" />

    <!-- plugins -->
    <link rel="stylesheet" href="css\plugins.css?i=3">

    <!-- revolution slider css -->
    <link rel="stylesheet" href="css\rev_slider\settings.css">
    <link rel="stylesheet" href="css\rev_slider\layers.css">
    <link rel="stylesheet" href="css\rev_slider\navigation.css">

    <!-- custom css -->
    <link href="css\styles-3.css" rel="stylesheet" id="colors">

</head>

<body>

    <!-- start page loading -->
    <div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div>
    <!-- end page loading -->

    <!-- start main-wrapper section -->
    <div class="main-wrapper">

        <!-- start header section -->
        <header class="header-style8">

            <div class="navbar-default" style="background-color: #05599d;">

                <!-- Start Top Search -->
                <div class="top-search bg-theme">
                    <div class="container">
                        <form class="search-form" action="search.html" method="GET" accept-charset="utf-8">
                            <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search font-size18 text-white" type="submit"></button>
                                </span>
                                <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                                <span class="input-group-addon close-search"><i class="fas fa-times font-size18 line-height-28 margin-5px-top"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Top Search -->

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area alt-font">
                                <nav class="navbar navbar-expand-lg navbar-light no-padding">

                                    <div class="navbar-header navbar-header-custom">
                                        <!-- Start Logo -->
                                        <a href="index.php" class="navbar-brand logodefault"><img id="logo" src="https://campusvirtual.up.edu.pe/img/logo-up.png" alt="logo"></a>
                                        <!-- End Logo -->
                                    </div>

                                    <!--div class="navbar-toggler"></div-->
                                    
                                    <!-- Menu Area -->
                                    <!--ul class="navbar-nav ml-auto" id="nav" style="display: none;">
                                        <li class="current"><a href="index.php">INICIO</a></li>
                                    </ul-->  
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>






               <div class="menu_area alt-font" style="background-color: #003e6c;">

                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light no-padding">
                            <div class="navbar-toggler"></div>

                                    <!-- Menu Area -->
                                    <ul class="navbar-nav" id="nav" style="display: none;">
                                        <li><a href="#">Herramientas</a>
                                            <ul>
                                                <li><a target="_blank" href="http://bb.up.edu.pe/">Blackboard</a></li>
                                                <li><a target="_blank" href="https://autoservicio2.up.edu.pe">Power Campus</a></li>
                                                <li><a target="_blank" href="http://mail.up.edu.pe">Correo Electrónico</a></li>
                                                <li><a target="_blank" href="http://labvirtual.up.edu.pe/">Laboratorio virtual</a></li>
                                                <li><a target="_blank" href="http://srvnetappup.up.edu.pe/guiatelefonica/BuscarDirectorioTelf.aspx">Directorio telefónico</a></li>
                                                <li><a target="_blank" href="http://campusvirtual.up.edu.pe/Biblioteca/default.aspx?utm_source=CampusVirtual&utm_medium=banner&utm_campaign=Biblioteca">Biblioteca</a></li>
                                                <li><a target="_blank" href="http://srvmicst.up.edu.pe/MicroStrategy/login/login.aspx">
                                                Sistema de Información para la Gestión Universitaria (SIGU)</a></li>
                                                <li><a target="_blank" href="http://srvcom02.up.edu.pe:9080/siserpvi/">Paneles Virtuales</a></li>
                                                <li><a target="_blank" href="http://srvweb.up.edu.pe/si/index.jsp">Sistema de Información Institucional (SII)</a></li>
                                                <li><a target="_blank" href="http://apps.up.edu.pe/convenios">Convenios</a></li>
                                                <li><a target="_blank" href="http://pcampusportal:85/_layouts/ReportServer/RSViewerPage.aspx?rv%3aRelativeReportUrl=%2fReportes+de+PowerCAMPUS%2fUNIVERSIDAD+DEL+PACIFICO%2f12+-+Administrativos%2fAuditoria%2fReporte+de+auditoria+web.rdl&Source=http%3a%2f%2fpcampusportal%3a85%2fReportes%2520de%2520PowerCAMPUS%2fForms%2fAllItems.aspx%3fRootFolder%3dhttp%253a%252f%252fpcampusportal%253a85%252fReportes%2520de%2520PowerCAMPUS%252fUNIVERSIDAD%2520DEL%2520PACIFICO%252f12%2520%252d%2520Administrativos%252fAuditoria%26FolderCTID%3d0x012000E7576CD61E326440BE3AEEA24E02FCD2&DefaultItemOpen=0">Auditoria</a></li>
                                                <li><a target="_blank" href="http://vri.up.edu.pe/">Servicios para la investigación</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Información académica</a>
                                            <ul>
                                                <li><a target="_blank" href="http://autoservicio1.up.edu.pe/ss/CourseManager/Gradebook.aspx?view=1">Calificaciones</a></li>
                                                <li><a target="_blank" href="http://autoservicio1.up.edu.pe/ss/CourseManager/Gradebook.aspx?view=4">
                                                Asistencia</a></li>
                                                <li><a target="_blank" href="http://autoservicio1.up.edu.pe/ss/UP/EvaluacionDocente/Forms/UPEvaluacionDocenteResultadosHome.aspx">Resultados de evaluación docente</a></li>
                                                <li><a target="_blank" href="http://autoservicio1.up.edu.pe/ss/Records/ClassSchedule.aspx">Horarios</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Servicios</a>
                                            <ul>
                                                <li><a target="_blank" href="http://campusv.up.edu.pe/sisisemail/_data/2019/5692/Calendario_Academico_Regular_2019.pdf">Calendario académico 2019</a></li>
                                                <li><a target="_blank" href="http://campusv.up.edu.pe/sisisemail/_data/2019/5635/Calendario Académico Regular 2020.pdf">Calendario académico 2020</a></li>
                                                <li><a target="_blank" href="https://campusvirtual.up.edu.pe/cafeteria/default.aspx">Cafetería</a></li>
                                                <li><a target="_blank" href="http://intranet.up.edu.pe:8080/site_cumpleanos/">Cumpleaños</a></li>
                                                <li><a target="_blank" href="http://campusvirtual.up.edu.pe/documentos/default.aspx">Documentos institucionales</a></li>
                                                <li><a target="_blank" href="http://www.up.edu.pe/prensa/eventos/">Agenda</a></li>
                                                <li><a target="_blank" href="http://campusvirtual.up.edu.pe/gestion_personas">Gestión de Personas</a></li>
                                                <li><a target="_blank" href="http://portalgiit.up.edu.pe">Gestión de la Información e Innovación Tecnológica 
                                                (GIIT)</a></li>
                                                <li><a target="_blank" href="http://www1.up.edu.pe/webmarketing/">Marketing Institucional</a></li>
                                            </ul>
                                        </li>                                        
                                        <li><a href="#">Contactos de servicios</a>
                                            <ul>
                                                <li><a target="_self" href="docentes/contacto-pregrado.html">Pregrado - PRE</a></li>
                                                <li><a target="_self" href="docentes/contacto-postgrado.html">Postgrado - EPG</a></li>
                                                <li><a target="_self" href="docentes/contacto-educacion-ejecutiva.html">Educación Ejecutiva - CEE</a></li>
                                                <li><a target="_self" href="docentes/contacto-centro-de-idiomas.html">Centro de Idiomas - CIDUP</a></li>
                                                <li><a target="_self" href="docentes/contacto-escuela-pre-universitaria.html">Escuela Pre Universitaria - EPU</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">La UP</a>
                                            <ul>
                                                <li><a target="_blank" href="http://www.up.edu.pe/prensa/blogs/Paginas/default.aspx">Blogs UP</a></li>
                                                <li><a target="_blank" href="http://www.up.edu.pe/aplicaciones/boletines/peruanito/default.aspx">El Peruanito 2.0</a></li>
                                                <li><a target="_blank" href="http://revistas.up.edu.pe/index.php/apuntes/index">Apuntes Revista de Ciencias Sociales</a></li>
                                                <li><a target="_blank" href="http://www.up.edu.pe/aplicaciones/boletines/emprendeup/">Boletín Emprende UP</a></li>
                                                <li><a target="_blank" href="http://www.up.edu.pe/investigacion-centros/fondo-editorial/">Fondo Editorial</a></li>
                                                <li><a target="_blank" href="http://www.up.edu.pe/prensa/Paginas/default.aspx">Sala de Prensa</a></li>
                                                <li><a target="_blank" href="https://campusvirtual.up.edu.pe/documentos/default.aspx">Documentos institucionales</a></li>
                                                <li><a target="_blank" href="http://www.youtube.com/user/UPacificoUP/videos">Videoteca</a></li>
                                                <li><a target="_blank" href="http://www.estudiosindianos.org/">Proyecto Estudios Indianos</a></li>
                                                <li><a target="_blank" href="http://defensoriauniversitaria.up.edu.pe">Defensoría Universitaria</a></li>
                                            </ul>
                                        </li>
                                        <li></li>
                                                                              
                                    </ul>
                                    <!-- End Menu Area -->


                        </nav>
                    </div>

                </div>



            </div>

        </header>
        <!-- end header section -->








    <section>
        <div class="container">

            <div id="rev_slider_2" class="rev_slider" style="display: none;" data-version="5.4.5">
                <ul>
                    <li data-transition="parallaxtoright">
                        <!-- Overlay -->
                        <!--div class="opacity-extra-medium bg-black z-index-1"></div-->
                        <img src="img/slider/banner_institucional.jpg" alt="slide1" class="rev-slidebg">
                    </li>
                </ul>
            </div>


        </div>
    </section>







    <!-- start service section -->
    <section style="padding-top: 0px;">
        <div class="container">
            <div class="text-center section-heading">
                <h2>Marketing Institucional</h2>
                <p class="width-85 sm-width-75 xs-width-95">El área de Marketing Institucional es responsable de la construcción, consolidación y sostenimiento del posicionamiento de la Universidad del Pacífico, buscando el cumplimiento de los objetivos de imagen y marca tanto de cada una de las Facultades y carreras, así como también de las Unidades Institucionales, con una visión estratégica integrada.</p>
            </div>

            <div class="row margin-60px-bottom">

<?php
    $arrIcons = array("icon-hotairballoon","icon-tools","icon-layers","icon-mobile","icon-ribbon","icon-envelope","icon-search","icon-presentation","icon-document","icon-pictures","icon-bargraph","icon-genius","icon-gears","icon-adjustments");
    $intContador = 0;

    while ($row = mysql_fetch_array($rows)) { 
        $strUrl_Servicio = 'detalle_servicio.php?xid='.$row["id"].'';
        $strTitulo_Servicio = $row["contenido_titulo"];
        $strContenido_Servicio = strip_tags($row["contenido_texto"]);
        $strContenido_Servicio = substr($strContenido_Servicio, 0, 100)."...";
?>
            <div class="col-lg-4 col-md-12 margin-30px-bottom xs-margin-20px-bottom">
                <a href="<?php echo $strUrl_Servicio; ?>"><div class="feature-box-01">
                    <i class="<?php echo $arrIcons[$intContador]; ?> font-size36 margin-20px-bottom" style="color: #0073ad;"></i>
                    <h4 class="font-size18 margin-10px-bottom"><?php echo $strTitulo_Servicio; ?></h4>
                    <p class="font-size15 line-height-24"><?php echo $strContenido_Servicio; ?></p>
                </div>
                </a>
            </div>

<?php
        $intContador++;
    }
    mysql_free_result($rows);
?>


            </div>


        </div>
    </section>
    <!-- end service section -->



       <!-- start footer section -->
        <footer>
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-md-6 sm-margin-30px-bottom">
                        <p class="margin-20px-top" style="color:#ffffff; font-size:18px; font-weight:bold;">Universidad del Pacífico</p>
                        <p class="margin-15px-top" style="color:#ffffff;">Av. Salaverry 2020, Jesús María, Lima, Perú // Tel. +51 1 2190100</p>
                    </div>

                    <div class="col-lg-3 col-md-6 sm-margin-30px-bottom"></div>

                    <div class="col-lg-4 col-md-6">
                        <p class="margin-20px-top" style="color:#ffffff; font-size:18px; font-weight:bold;">Síguenos</p>
                        <div class="margin-15px-top footer-social-icons">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </footer>
        <!-- end footer section -->



    </div>
    <!-- end main-wrapper section -->

    <!-- start scroll to top -->
    <a href="javascript:void(0)" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
    <!-- end scroll to top -->

    <!-- all js include start -->

    <!-- Java script -->
    <script src="js\core.min.js"></script>

    <!-- revolution slider js files start -->
    <script src="js\rev_slider\jquery.themepunch.tools.min.js"></script>
    <script src="js\rev_slider\jquery.themepunch.revolution.min.js"></script>
    <script src="js\rev_slider\extensions\revolution.extension.actions.min.js"></script>
    <script src="js\rev_slider\extensions\revolution.extension.carousel.min.js"></script>
    <script src="js\rev_slider\extensions\revolution.extension.kenburn.min.js"></script>
    <script src="js\rev_slider\extensions\revolution.extension.layeranimation.min.js"></script>
    <script src="js\rev_slider\extensions\revolution.extension.migration.min.js"></script>
    <script src="js\rev_slider\extensions\revolution.extension.navigation.min.js"></script>
    <script src="js\rev_slider\extensions\revolution.extension.parallax.min.js"></script>
    <script src="js\rev_slider\extensions\revolution.extension.slideanims.min.js"></script>
    <script src="js\rev_slider\extensions\revolution.extension.video.min.js"></script>
    <!-- revolution slider js files end -->
        
    <!-- custom scripts -->
    <script src="js\main.js?i=4"></script>

    <!-- all js include end -->

</body>

</html>
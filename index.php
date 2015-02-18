<!DOCTYPE html>
<html  lang="es">
<head>
<title>Diseno Gmail Bootstrap</title>
<meta charset="UTF-8">
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">    
<link rel="stylesheet" type="text/css" href="css/style.css">    

</head>
<body>

    <!-- Primer Container en donde esta ubicado 
    el logo de google junto con el crear cuenta e
    iniciar sesion -->
    <div class="container-fluid well">
       <div class="row">        
           <!-- columna del logo de google responsive-->
           <div class="col-xs-3 col-sm-3 col-sm-offset-1 col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-2">        
             <img src="img/google_logo_41.png" alt="img-responsive">
           </div>
           <!-- columna Link iniciar session solo visible en xs (Mobile)-->
           <div class="col-xs-4 col-xs-offset-4 visible-xs">
               <small> <a href="#">Iniciar Session</a></small>
           </div>
            <!-- columna boton crear una cuenta solo visible en xs (Mobile)-->
           <div class="col-xs-3 col-xs-offset-3 visible-xs">
               <button type="button" class="btn btn-primary">Crear una cuenta</button>
           </div>
            <!-- columna boton crear una cuenta solo visible en md sm lg-->
           <div class="col-sm-4 col-sm-offset-3 visible-sm visible-md visible-lg col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-3">
               <small> <a href="#">Iniciar Session</a></small>
               <button type="button" class="btn btn-primary">Crear una cuenta</button>
           </div>       
        </div>

    </div>

    <!--Segunto Container Menu Secundario -->   
    <div class="container-fluid">
       <div class="row" id="menu-sec">
            <!-- Menu Secundario es visible en sm y lg -->
            <div class=" col-md-8 col-sm-12 col-lg-9 visible-sm visible-md visible-lg  col-lg-offset-3  col-sm-offset-1 col-md-offset-2">
                <img src="img/googlemail-16.png" alt=""><strong> Gmail </strong>
                <a href="#" class="enlace-menu2">Funciones</a>
                <a href="#" class="enlace-menu2"> Para Dispositivos Moviles</a>
                <a href="#" class="enlace-menu2"> Para empresas</a>
                <a href="#" class="enlace-menu2"> Ayuda</a>
                <br><p></p>        
            </div>
        
       
    
    <!--  Menu compacto solo visible en xs  -->
    <div class="col-xs-12 visible-xs">
       
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button>
                    <a href="#" class="nav-brand"><img src="img/googlemail-16.png" alt=""><small><stron>Gmail</stron></small></a>
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                       <li>
                           <a href="#" class="enlace-menu">Funciones</a>
                       </li>
                       <li>
                           <a href="#" class="enlace-menu">Para dispositivos moviles</a>
                       </li>
                       <li>
                           <a href="#" class="enlace-menu">Para empresas</a>
                       </li>
                       <li>
                           <a href="#" class="enlace-menu">Ayuda</a>
                       </li>                        
                    </ul>
                </div>
            </div> 
        </nav> 
    </div>
    <!--  Fin menu para xs Visible -->
    </div>
</div>
<!-- Fin del Sgundo contenedor -->


<!--Tercer contenedor el del slide -->
<div class="container" id="sha">
    <div class="row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="img/about-carousel-1.png" alt="first image">
              <div class="carousel-caption">
                <h4> La Sencillez y la Facilidad de Gmail en todo tipo de dispositivos</h4>
                <p><button type="button" class="btn btn-primary">Crea una Cuenta</button></p>
              </div>
            </div>
            <div class="item">
              <img src="img/about-carousel-2.png" alt="second image">
              <div class="carousel-caption">
                <h4> La bandeja de entrada de Gmail clasifica tus mensajes por tipo para organizarte mejor</h4>
                <p><button type="button" class="btn btn-primary">Crea una Cuenta</button></p>
              </div>
            </div>
            <div class="item">
              <img src="img/about-carousel-3.jpg" alt="third image">
              <div class="carousel-caption">
                <h4> Habla con amigos en una videollamada, chatea con un companero por telefono desde tu bandeja de entrada</h4>
                <p><button type="button" class="btn btn-primary">Crea una Cuenta</button></p>
              </div>
            </div>
          </div>
    </div>
    </div>
</div>

<!-- Fin del tercer contenedor -->

<!-- Cuarto contenedor donde se encuentra la informacion  -->
<div class="container" id="sha">
    <div class="row">
        <div class="col-xs-12">
            <br />
            <h2><p class="text-center"> Te damos la bienvenida a Gmail</p></h2>
        </div>
    </div>
    <!--    Primer bloque izquierda-->
    <div class="row">
        <!-- Imagen responsive -->
        <div class="col-xs-12 col-sm-3">
            <center><img src="img/mobile-feature-1.png" alt="img-responsive"/></center>
        </div>
        <!--Texto del contenido -->
        <div class="col-xs-12 col-sm-3">
            <br />
            <strong>Disfruta de Gmail en cualquier dispositivo </strong>
            <small><p>Tienes lo mejor de Gmail donde estes y en cualquier dispositivo.
            <a href="#">Mas informacion sobre Gmail para moviles</a></p></small>
        </div>
        
        <div class="col-xs-12 col-sm-3">
            <center><img src="img/circle-hangout-video.png" alt="img-responsive"/></center>            
        </div>
        <div class="col-xs-12 col-sm-3">
            <strong>Habla ingles en diferentes dispositivos</strong>
            <small><p>Hangout da la vida a las conversaciones con fotos, emojis en incluso en videollamadas en grupo gratis. Habla
            con tu dispositivo Android y Apple desde cualquier lugar.</p></small>
            <a href="#"> Mas informacion sobre Hangouts</a>
        </div>
    </div>
    
    <!-- Segundo bloque derecha   -->
    <div class="row">
        <!-- Imagen responsive -->
        <div class="col-xs-12 col-sm-3">
            <center><img src="img/circle-inbox-b-new.png" alt="img-responsive"/></center>
        </div>
        <div class="col-xs-12 col-sm-3">
            <br />
            <strong>Descubre la nueva bandeja de entrada</strong>
            <small> <p> con las nuevas pestanas personalizables lo controlas todo: de un vistazo sabes que hay de nuevo y decides hacerlo.</p></small>
            <a href="#"> Mas informacion sobre la nueva bandeja de entrada</a>
        </div>
        <!-- Imagen responsive -->
        <div class="col-xs-12 col-sm-3">
           <center><img src="img/circle-storage.png" alt="img-responsive"/></center> 
        </div>
        <div class="col-xs-12 col-sm-3">
            <strong>Un monton de espacio gratis</strong>
            <small><p> Se acabo lo de borrar  mensajes para ahorrar espacio: ahora, entre Gmail, Google Drive y Fotos de Google+, de almacenamiento
            gratuito.</p></small>
            <a href="#">Mas informacion sobre el almancenamiento</a>
        </div>            
    </div>
    
    <!-- Tercer bloque   -->
    <div class="row">
        <!-- Imagen responsive -->
        <div class="col-xs-12 col-sm-3">
            <center><img src="img/work-feature-1.png" alt="img-responsive"/></center>
        </div>
        <div class="col-xs-12 col-sm-3">
            <br />
            <strong>Gmail para el trabajo</strong>
            <small> <p> Consigue un correo electronico personalizado tipo @tu_empresa.com con calendarios, documentos, videoconferencias y otras funciones
            al que podras acceder con tu telefono o tablet.</p></small>
            <a href="#"> Mas informacion sobre Gmail para el trabajo</a>
        </div>
        <!-- Imagen responsive -->
        <div class="col-xs-12 col-sm-3">
           <center><img src="img/circle-help.png" alt="img-responsive"/></center> 
        </div>
        <div class="col-xs-12 col-sm-3">
            <strong>Necesitas Ayuda ?</strong>
            <small><p> Tienes alguna duda sobre Gmail ? En el .</p></small>
            <a href="#">Centro de ayuda</a> encontraras las preguntas mas frecuentes y muchas sugerencias.
        </div>            
    </div>
    
    <div class="col-xs-12">
        <br /><br /><br /><br /><br />    
    </div>
    
</div>
<!-- fin del cuarto conetendor -->

<!-- Quinto contenedor pie de pagina (footer)-->
<div class="container-fluid well">
   <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 col-sm-offset-1">
           <br />
           
           <small class="pull-left">
               <a href="#"> Nuestras politica</a>
               <a href="#"> Ayuda</a>
               <a href="#"> Para empresas</a>
               <a href="#"> Para dispositivos Moviles</a>
           </small>
           
           <a href="#" class="pull-left"><img src="img/gplus.jpg" alt="img-responsive"></a>
           <br />
       </div>
   </div>
    
</div>

<!--Sexto contenedor -->
<div class="container">
    <div class="row">
        <!-- Combinacion de columnas y clases de empleo push y pull  -->
            <div class="col-xs-12 col-sm-5 col-sm-push-7 col-md-3 col-md-push-9 col-lg-3 col-lg-push-8">
                <!-- Poner la imagen a lado del elemento combo box -->
                <a href="#" class="pull-left">
                    <img src="img/hl.jpg" alt="img-responsive" class="media-object">
                </a>
                <select onchange="var href=this[this.selectedIndex].value;if(href!=''){window.location.href=href};">

                    <option value="/intl/ms/mail/help/abouth.html">
                        Bahasa Melayu
                    </option>
                    <option value="/intl/ms/mail/help/abouth.html">
                        Bahasa Melayu
                    </option><option value="/intl/ms/mail/help/abouth.html">
                        Bahasa Melayu
                    </option><option value="/intl/ms/mail/help/abouth.html">
                        Bahasa Melayu
                    </option><option value="/intl/ms/mail/help/abouth.html">
                        Bahasa Melayu
                    </option>                    
                </select>

            </div>
    

<!--Enlaces finales combinacion de clases push y pull -->
<div class="col-xs-12 col-sm-5 col-sm-pull-5 col-md-5 col-md-pull-3 col-lg-4 col-lg-pull-2">
    <small> <a href="#" class="menu-footer">Google -</a>
            <a href="#" class="menu-footer">Acerca de Google</a>
            <a href="#" class="menu-footer">Privacidad y Condiciones</a>
    </small>
    <br /><br />
</div>
</div>
</div>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

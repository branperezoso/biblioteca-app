
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Administradores</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/icono.png" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style1.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>

        <style>

.biblioteca{


    margin-top: 5px;
    color: white;
    font-size: 35px;
}

</style>


</head>
<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
        <div class="full-reset" style="padding: 10px 0; color:#f7f3f3;">
                <figure>
                    <img src="assets/img/log2.png" alt="Biblioteca" class="img-responsive center-box" style="width:80%;">
                </figure>
                <p class="text-center" style="padding-top: 10px;">Biblioteca</p>
            </div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="inicio_admin.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio </a></li>
                    <li>
                    <a href="admin.php">
                        <i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Administración
                    </a>    
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Registros <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                        <li><a href="registros.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>&nbsp;&nbsp; Registros</a></li>
                            <li><a href="newadmin.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador</a></li>
                            <li><a href="newuser.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo usuario</a></li>

                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Libros y catálogo <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="insertar_libro.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo libro</a></li>
                            <li><a href="catalogo.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Catálogo</a></li>
                        </ul>
                    </li>
                    <li>
                        @auth

                            <li>
                                <a href="{{ route('prestamos') }}"><i class="zmdi zmdi-alarm zmdi-hc-fw"></i>&nbsp;&nbsp;Préstamo</a>
                            </li>
                            <li class="nav-item">
                                {{-- <a class="nav-link" href="{{ route('prestamos') }}">Devolución</a> --}}
                            </li>
                        @endauth
                    </li>
                    <li><a href="reportes.php"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes y estadísticas</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <strong>{{ Auth::user()->name }}</strong>
                </li>
                <li data-href="{{ route('logout') }}" data-placement="bottom" title="Salir del sistema">
                
                                       
                                    <i class="zmdi zmdi-power" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </li>
            </ul>
        </nav>
        
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Centro de investigacion</h1>
            </div>
        </div>
        
      
        <section class="full-reset text-center" style="padding: 40px 0;">

            <article class="tile">
            <a href="administradores.php">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-face"></i></div>
                <div class="tile-name all-tittles" style="color:#058D4C;">administradores</div>
                <div class="tile-num full-reset" style="color:#058D4C;">7</div>
            </a>
            </article>
           
            <article class="tile">
       
            <a href="estudiantes.php">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-accounts"></i></div>
                <div class="tile-name all-tittles" style="color:#058D4C;">estudiantes</div>
                <div class="tile-num full-reset" style="color:#058D4C;">8</div>
            </a>
            </article>
    
            <article class="tile">
            <a href="catalogo.php">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-book"></i></div>
                <div class="tile-name all-tittles" style="color#058D4C;">libros</div>
                <div class="tile-num full-reset" style="color:#058D4C;">5</div>
            </a>
            </article>
 
            <article class="tile">
            <a href="secciones.php">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-trending-up"></i></div>
                <div class="tile-name all-tittles" style="width: 90%; color:#058D4C;">secciones</div>
                <div class="tile-num full-reset" style="color:#058D4C;">&nbsp;</div>
            </a>
            </article>
            <article class="tile">
            <a href="devoluciones.php">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-time-restore"></i></div>
                <div class="tile-name all-tittles" style="width: 90%; color:#058D4C;">Devoluciones pendientes</div>
                <div class="tile-num full-reset" style="color:#058D4C;">3</div>
            </a>
            </article>

            <article class="tile">
            <a href="prestamos.php">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-calendar"></i></div>
                <div class="tile-name all-tittles" style="color:#058D4C;">préstamos</div>
                <div class="tile-num full-reset" style="color:#058D4C;">6</div>
            </a>
            </article>
            <article class="tile">
            <a href="reportes.php">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-trending-up"></i></div>
                <div class="tile-name all-tittles" style="width: 90%; color:#058D4C;;">reportes y estadísticas</div>
                <div class="tile-num full-reset" style="color:#058D4C;">&nbsp;</div>
            </a>
            </article>
            
        </section>
        
       <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
Proyecto biblioteca<br>
Directorio <br>
Normatividad<br>
Programas y proyectos<br>
Comité técnico nacional<br>
Informes<br>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrolladores</h4>
                        <ul class="list-unstyled">

                        <li></i>&nbsp; Brandon Perez Cruz<a href="https://www.facebook.com/brandon.perezcruz.1"><i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i></a></i></li>
                        <li></i>&nbsp; Brandon Valadez Ortega<a href="https://www.facebook.com/profile.php?id=100008737218047&mibextid=ZbWKwL"><i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i></a></i></li>
   
                    </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© 2023</div>
        </footer>
    </div>
</body>
</html>
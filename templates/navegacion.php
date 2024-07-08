<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">
    
    <!-- Iconos Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Librerias Stylesheet -->
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    
    <!-- Bootstrap  -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilo de plantilla  -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/Search_navbar.css" rel="stylesheet">
    <title>Sumaq Choque</title>
</head>
<body>
     <!-- Circulo de carga - Inicio -->
    <!-- <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> -->
    <!-- Circulo de carga - Fin -->

    <!-- Navbar - Inicio -->
    <div class="container-fluid fixed-top">
        <!-- <div class="container topbar  d-none d-lg-block">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i><a href="#" class="text-white">(Direccion)</a></small>
                    <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">Email@ejemplo.com</a></small>
                </div>
                <div class="top-link pe-2">
                    <a href="#" class="text-white"><small class="text-white mx-2">Politica de privacidad</small></a>
                    <a href="#" class="text-white"><small class="text-white mx-2">Termino de uso</small></a>
                </div>
            </div>
        </div> -->
        <div class="container px-0" >
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="index.html" class="navbar-brand"><h1 class="display-6" style="color: #30657B;">Sumaq Choque</h1></a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars" style="color: #30657B;"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="comprar.php" class="nav-item nav-link">Comprar</a>
                            <!-- <a href="shop-detail.html" class="nav-item nav-link">Shop Detail</a> -->

                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Paginas</a>
                                <div class="dropdown-menu m-0 bg-dark rounded-0">
                                    <a href="cart.html" class="dropdown-item">Cart</a>
                                    <a href="chackout.html" class="dropdown-item">Chackout</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="404.html" class="dropdown-item">404 Page</a>
                                </div>
                            </div> -->

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Catalogos</a>
                                <div class="dropdown-menu m-0 bg-dark rounded-0">
                                    <a href="#" class="dropdown-item">Prueba</a>
                                    <a href="#" class="dropdown-item">Prueba2</a>
                                    <a href="#" class="dropdown-item">Prueba3</a>
                                </div>
                            </div>
                        <a href="contacto.php" class="nav-item nav-link">Contactos</a> 
                    </div>
                   

                    <div class="d-flex m-2 me-0">
                        <div class="search">
                            <input type="text" class="txt" placeholder="Buscar...">
                            <button class="buttons">
                                <i class="fas fa-search" style="color: #30657B;"></i>
                            </button>
                        </div>
                        <!-- <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-info"></i></button> -->                        
                    </div>
                    <div class="d-flex m-3 me-0">
                        <a href="carrito.php" class="position-relative me-4 my-auto">
                            <i class="fa fa-shopping-bag fa-2x" style="color: #30657B;"></i>
                            <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                        </a>
                        <a href="#" class="my-auto">
                            <i class="fas fa-user fa-2x" style="color: #30657B;"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
     </div>
    <!-- Navbar - Fin -->

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://kit.fontawesome.com/5e5c568579.js" crossorigin="anonymous"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/search_navbar.js"></script>
    
</body>
</html>
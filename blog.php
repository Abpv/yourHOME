<?php
    session_start();
if (isset($_SESSION['login'])) {
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

    ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>yourHOME - Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">yourHOME</div>

    <!-- Navigation -->
    <?php include_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <h2 class="text-center">Bienvenid@ <?php echo $fname; echo " "; echo $lname; ?>
                - <a href="logout.php">Salir</a></h2>
                    <hr>
                    <h2 class="intro-text text-center">yourHOME
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>Añade toques personales
                        <br>
                        <small>Enero 2022</small>
                    </h2>
                    <p>Para que tu hogar se sienta como en casa, es importante añadir toques personales. Coloca fotos de tu familia y tus amigos en las paredes, elige decoraciones que te recuerden a lugares especiales o a personas queridas, y utiliza objetos que hayas encontrado en tus viajes para añadir interés y significado a tu hogar.</p>
                    <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Leer Más</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>Utiliza iluminación cálida
                        <br>
                        <small>Marzo 2022</small>
                    </h2>
                    <p>La iluminación es uno de los elementos más importantes en el diseño de interiores. Una iluminación cálida y suave es ideal para crear un ambiente relajado y acogedor. Utiliza lámparas de mesa, lámparas de techo y luces de lectura para conseguir un efecto cálido y cómodo.</p>
                    <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Leer Más</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>Juega con las texturas
                        <br>
                        <small>Julio 2022</small>
                    </h2>
                    <p>El uso de diferentes texturas en los muebles, las alfombras y las cortinas puede ayudar a crear un ambiente interesante y cómodo. Las alfombras suaves y las mantas acogedoras son ideales para los días fríos, mientras que los cojines y las cortinas con texturas pueden añadir un toque de interés a cualquier habitación.</p>
                    <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Leer Más</button>

                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Antiguas</a>
                        </li>
                        <li class="next"><a href="#">Nuevas &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!--Modals-->
    <!--Modal 1-->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!--Modal Content-->
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Coconut Oil Coffee</h4>
            </div>
            <div class="modal-body">
                <p>Sample Text</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
        <!--Modal 2-->
        <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!--Modal Content-->
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Irish Coffee</h4>
            </div>
            <div class="modal-body">
                <p>Sample Text</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
        <!--Modal 3-->
        <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!--Modal Content-->
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Frozen Caramel Latte</h4>
            </div>
            <div class="modal-body">
                <p>Sample Text</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>

    <?php require_once 'footer.php'; ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php
}else{
    header("location:login.php ");
}
?>
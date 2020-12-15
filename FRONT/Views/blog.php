<?php
include_once "../Controller/blogC.php";
include_once "../Controller/commentC.php";
include_once "../Models/commentm.php";
session_start();
$comment = null;
$commentC = new commentC();
if (isset($_POST["text"])&& isset($_POST["id_b"]) &&isset($_SESSION['e'])) 
 { 

     $comment = new comment(
         $_POST['text'],
         $_POST['id_b'],
         $_SESSION['e']
     );

$commentC->ajoutercomment($comment);
}
    
$blogC = new blogC();
$result=$blogC->afficherblog();

// On prolonge la session

// On teste si la variable de session existe et contient une valeur
if (empty($_SESSION['e'])) {
	// Si inexistante ou nulle, on redirige vers le formulaire de login
	header('Location:../../BACK/signin.php');
}
$nom_u=$_SESSION['e'];


?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <!-- TITLE OF SITE -->
    <title>Travel</title>

    <!-- favicon img -->
    <link rel="shortcut icon" type="image/icon" href="./assets/logo/favicon.png" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

    <!--animate.css-->
    <link rel="stylesheet" href="../assets/css/animate.css" />

    <!--hover.css-->
    <link rel="stylesheet" href="../assets/css/hover-min.css">

    <!--datepicker.css-->
    <link rel="stylesheet" href="../assets/css/datepicker.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css" />

    <!-- range css-->
    <link rel="stylesheet" href="../assets/css/jquery-ui.min.css" />

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />

    <!-- bootsnav -->
    <link rel="stylesheet" href="../assets/css/bootsnav.css" />

    <!--style.css-->
    <link rel="stylesheet" href="../assets/css/style.css" />

    <!--responsive.css-->
    <link rel="stylesheet" href="../assets/css/responsive.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

    <!-- main-menu Start -->
    <header class="top-area">
        <div class="header-area">


            <div class="container">

                <div class="row">

                    <div class="col-sm-2">
                        <div class="logo">


                            <a href="../index.html">
                                Tunisia<span>Tour</span>

                            </a>

                        </div><!-- /.logo-->
                        <!--<img src="../assets/logo/logo.png"  >-->
                    </div><!-- /.col-->
                    <div class="col-sm-10">
                        <div class="main-menu">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <i class="fa fa-bars"></i>
                                </button><!-- / button-->
                            </div><!-- /.navbar-header-->
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class=""><a href="../index1.php">home</a></li>
                                    <li class=""><a href="#footer">Destination</a></li>
                                    <li class=""><a href="#footer">Packages </a></li>
                                    <li class=""><a href="#footer">Special Offers</a></li>
                                    <li class="smooth-menu"><a href="#blog">blog</a></li>
                                    <li class=""><a href="#footer">subscription</a></li>
                                    <li>
                                    <a href="../FRONT/Views/dex.php"><button class="book-btn">Déconnexion
											</button></a>
                                    </li>
                                    <!--/.project-btn-->
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.main-menu-->
                    </div><!-- /.col-->
                </div><!-- /.row -->
                <div class="home-border"></div><!-- /.home-border-->
            </div><!-- /.container-->
        </div><!-- /.header-area -->


    </header><!-- /.top-area-->
    <!-- main-menu End -->
    <!--about-us start -->
    <section id=".home" class="about-us">
        <div class="container">
            <div class="about-us-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="single-about-us">
                            <div class="about-us-txt">
                                <h2 class="animated fadeInUp" style="opacity: 0;">
                                    Explore our Blog
                                    And the Beauty of
                                    The Beautiful
                                    World
                                </h2>
                                <div class="about-btn">
                                    <button class="about-view animated fadeInDown" style="opacity: 0;">
                                        explore now
                                    </button>
                                </div>
                                <!--/.about-btn-->
                            </div>
                            <!--/.about-us-txt-->
                        </div>
                        <!--/.single-about-us-->
                    </div>
                    <!--/.col-->
                    <div class="col-sm-0">
                        <div class="single-about-us">

                        </div>
                        <!--/.single-about-us-->
                    </div>
                    <!--/.col-->
                </div>
                <!--/.row-->
            </div>
            <!--/.about-us-content-->
        </div>
        <!--/.container-->

    </section>
    <!--/.about-us-->
    <!--about-us end -->

    <!--travel-box start-->
    <!--/.travel-box-->
    <!--travel-box end-->

    <!--service start-->
    <!--/.service-->
    <!--service end-->

    <!--galley start-->
    <!--/.gallery-->
    <!--gallery end-->


    <!--discount-offer start-->
    <!-- /.discount-offer-->
    <!--discount-offer end-->

    <!--packages start-->
    <!--/.packages-->
    <!--packages end-->

    <!-- testemonial Start -->
    <!--/.testimonial-->
    <!-- testemonial End -->


    <!--special-offer start-->
    <!--/.special-offer end-->
    <!--special-offer end-->
    <section id="blog">
        <br>
        <hr>
        <!--blog end-->
        <!--blog end-->
        <?php foreach($result as $rows) { ?>

        <section id="news 1">
            <div class="container">
                <h2>trending news </h2><span><br>
                    15 november 2017</span></h2>
                <div>
                    <img src="../assets/images/blog/<?php echo $rows['image']; ?>">
                </div>

                <br>
                <h3 style="color: rgb(29, 138, 165);">

                    <?php echo $rows['titre'];?> :
                </h3>
                <br>
                <div style="font-size: 38px;">
                    <?php echo $rows['article'];?>
                </div>
                <br>
                <h3>Les commentaire :</h3>

                <?php 
                            $cmnt=$commentC->affichercommentbyid($rows['id']);
                            foreach($cmnt as $col) {?>
                <hr >

            
                
                <h4 style="color :Blue;">
                    <?php echo $col['nom_u']; ?> :
                </h4>
                <br>
                <?php echo $col['text'];?>
                <hr>
                <?php } ?>

                <br>
                <form method="POST" bords="arrondis">
                    <h4>ajouter un commentaire :</h4>
                    <br>

                    <input type="hidden" name="id_b" id="id_b" value="<?php echo $rows['id']; ?>">

                    <textarea class="form-control"  onblur="majus_nom();"name="text" id="text" cols="20" rows="5" onfocusout="" required> </textarea>
                    <label id="element" name="erreur" style="color: red;display: none;">commentaire vide
                                            invalide</label>
                    <br>
                    <input type="submit" class="book-btn" name="submit" value="   ajouter   " onClick="cmnt()">
                    <script>
                        
                    </script>

                   
                </form>
                </div>
            <hr>
            <?php } ?>
            <!--/.caption-->


        </section>
        <!--subscribe start
        <section id="join" class="discount-offer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="dicount-offer-content text-center">
                            <h2>Create a New article</h2>
                            <br>
                            <form action="blog.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                                        <input type="text" class="form-control" id="titre" name="titre"
                                            placeholder="Titre" style="color: rgb(29, 138, 165);"
                                            onfocusout="majus_nom()" Required></input>
                                        <label id="element" name="erreur" style="color: red;display: none;">titre
                                            invalide</label>
                                        <hr>
                                        <h2 style="text-align: left; color: rgb(12, 137, 175) ;">Sujet :</h2>
                                        <textarea name="" class="form-control" name="article" id="article" cols="50"
                                            rows="10" onfocusout="majus_prenom()" Required> </textarea>
                                        <label id="element1" name="erreur" style="color: red;display: none;">L'article
                                            est vide </label>
                                        <br>
                                        <h2 style="text-align: left; color: rgb(12, 137, 175) ;">Image :</h2>

                                        <input type="file" id="image" name="image" class="form-control">
                                        <br>
                                        <h2 style="text-align: left; color: rgb(12, 137, 175) ;">votre ID :</h2>
                                        <input type="num" id="id_c" name="id_c" class="form_control"
                                            placeholder="24123856" minlength="1" maxlength="8"
                                            onfocusout="telephonefc()" Required>
                                        <label id="element2" name="erreur" style="color: red;display: none;">l'id est
                                            invalide </label>
                                      
                                        <div class="clearfix"></div>

                                    </div>
                                </div>
                            </form>
                            <div class="about-btn">
                                <input type="submit" name="submit" value="ajouter" onClick="validation()">
                                </input>
                            </div>
                            /.about-btn-->


                        <!--</div> /.dicount-offer-content
                    </div> /.col
                </div> /.row-
            </div> /.container

        </section> /.discount-offer-->                                       


        <!--subscribe end-->
        <script>
            function majus_nom() {
                var ch = document.getElementById("text").value;
                var element = document.getElementById("element");
                if (ch === "") { element.style.display = "block"; } else { element.style.display = "none"; }
            }
        

                function cmnt() {
                    majus_nom();
                    var error1 = document.getElementById("element");
                    if ((error1.style.display == "none"))
                        alert("comentaire bien ajouter" ); else alert("Votre commentaire est mal rempli");
                }
        </script>






        <script src="../assets/js/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


        <!--bootstrap.min.js-->
        <script src="../assets/js/bootstrap.min.js"></script>

        <!-- bootsnav js -->
        <script src="../assets/js/bootsnav.js"></script>

        <!-- jquery.filterizr.min.js -->
        <script src="./assets/js/jquery.filterizr.min.js"></script>

        <script src="../https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <!--jquery-ui.min.js-->
        <script src="../assets/js/jquery-ui.min.js"></script>

        <!-- counter js -->
        <script src="../assets/js/jquery.counterup.min.js"></script>
        <script src="../assets/js/waypoints.min.js"></script>

        <!--owl.carousel.js-->
        <script src="../assets/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
        <script src="../assets/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script src="../assets/js/datepicker.js"></script>

        <!--Custom JS-->
        <script src="../assets/js/custom.js"></script>




        </div>
</body>
<section id='footer'>
    <footer class="footer-copyright">
        <div class="container">
            <div class="footer-content">
                <div class="row">

                    <div class="col-sm-3">
                        <div class="single-footer-item">
                            <div class="footer-logo">
                                <a href="index.html">
                                    tour<span>Nest</span>
                                </a>
                                <p>
                                    best travel agency
                                </p>
                            </div>
                        </div>
                        <!--/.single-footer-item-->
                    </div>
                    <!--/.col-->

                    <div class="col-sm-3">
                        <div class="single-footer-item">
                            <h2>link</h2>
                            <div class="single-footer-txt">
                                <p><a href="index.html">home</a></p>
                                <p><a href="#">destination</a></p>
                                <p><a href="#">spacial packages</a></p>
                                <p><a href="#">special offers</a></p>
                                <p><a href="#">blog</a></p>
                                <p><a href="#">contacts</a></p>
                            </div>
                            <!--/.single-footer-txt-->
                        </div>
                        <!--/.single-footer-item-->

                    </div>
                    <!--/.col-->

                    <div class="col-sm-3">
                        <div class="single-footer-item">
                            <h2>popular destination</h2>
                            <div class="single-footer-txt">
                                <p><a href="index.html">china</a></p>
                                <p><a href="index.html">venezuela</a></p>
                                <p><a href="index.html">brazil</a></p>
                                <p><a href="index.html">australia</a></p>
                                <p><a href="index.html">london</a></p>
                            </div>
                            <!--/.single-footer-txt-->
                        </div>
                        <!--/.single-footer-item-->
                    </div>
                    <!--/.col-->

                    <div class="col-sm-3">
                        <div class="single-footer-item text-center">
                            <h2 class="text-left">contacts</h2>
                            <div class="single-footer-txt text-left">
                                <p>+1 (300) 1234 6543</p>
                                <p class="foot-email"><a href="#">info@tnest.com</a></p>
                                <p>North Warnner Park 336/A</p>
                                <p>Newyork, USA</p>
                            </div>
                            <!--/.single-footer-txt-->
                        </div>
                        <!--/.single-footer-item-->
                    </div>
                    <!--/.col-->

                </div>
                <!--/.row-->

            </div>
            <!--/.footer-content-->
            <hr>
            <div class="foot-icons ">
                <ul class="footer-social-links list-inline list-unstyled">
                    <li><a href="#" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank" class="foot-icon-bg-3"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <p>&copy; 2017 <a href="https://www.themesine.com">ThemeSINE</a>. All Right Reserved</p>

            </div>
            <!--/.foot-icons-->
            <div id="scroll-Top">
                <i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip"
                    data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
            </div>
            <!--/.scroll-Top-->
        </div><!-- /.container-->

    </footer><!-- /.footer-copyright-->
    <!-- footer-copyright end -->
</section>




<script src="../assets/js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<!--modernizr.min.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


<!--bootstrap.min.js-->
<script src="../assets/js/bootstrap.min.js"></script>

<!-- bootsnav js -->
<script src="../assets/js/bootsnav.js"></script>

<!-- jquery.filterizr.min.js -->
<script src="../assets/js/jquery.filterizr.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!--jquery-ui.min.js-->
<script src="../assets/js/jquery-ui.min.js"></script>

<!-- counter js -->
<script src="../assets/js/jquery.counterup.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>

<!--owl.carousel.js-->
<script src="../assets/js/owl.carousel.min.js"></script>

<!-- jquery.sticky.js -->
<script src="../assets/js/jquery.sticky.js"></script>

<!--datepicker.js-->
<script src="../assets/js/datepicker.js"></script>

<!--Custom JS-->
<script src="../assets/js/custom.js"></script>


</body>

</html>
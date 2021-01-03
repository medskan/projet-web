<?php
include_once '../Model/reclamation.php';
include_once '../Controller/reclamationC.php';

$error = "";

// create user
$reclamation = null;

// create an instance of the controller
$reclamationC = new reclamationC();
if (
    isset($_POST["name"]) &&
    isset($_POST["email"])  &&
    isset($_POST["phone"])  &&
    isset($_POST["reclamation"])
) {
    if (

        !empty($_POST["name"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["phone"]) &&
        !empty($_POST["reclamation"]) &&
        (($_POST ["name"] [0]>='A' )&& ($_POST ["name"] [0]<='Z' ))&&
        (($_POST ["phone"]>=20000000) &&($_POST ["phone"]<=99999999))
    ) {
        $reclamation = new reclamation(

            $_POST['name'],
            $_POST['email'] ,
            $_POST['phone'],
            $_POST['reclamation']
        );
        $reclamationC->ajouterreclamation($reclamation);
        header('Location:index.php');
    }
    else if  ((($_POST ["name"] [0]<'A' )|| ($_POST ["name"] [0]>'Z' ))&&(($_POST ["phone"]<20000000) ||($_POST ["phone"]>99999999)))
        $error = "veuillez verifier le nom et le numero de telephone"  ;
    else if  (($_POST ["name"] [0]<'A' )|| ($_POST ["name"] [0]>'Z' ))
        $error = "le nom doit commencer par une majuscule"  ;
    else if (($_POST ["phone"]<20000000) ||($_POST ["phone"]>99999999))
        $error = "le numero de telephone doit comporter 8 chiffres"  ;

}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tourisme Sans Frontières</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="imgs/logo.png" alt="#" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="show-menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#agency">Travel Agency</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Reclamations</a>
                        </li>


                        <li class="nav-item .search-container">
                            <a class="nav-link search" href="#"><i class="fas fa-search"></i></a>
                            <form>
                                <input type="search">
                            </form>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="far fa-user"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <header id="home">
            <div class="overlay">
                <div class="container">
                    <div>
                        <h1><span>        <center> Let's go now!</center> </h1>
                        <p></p>
                        <button><a href="#" class="text-uppercase">book now</a></button>
                        <button><a href="ajouterappreciation.php" class="text-uppercase">Appreciations</a></button>
							  <button><a href="offre.php" class="text-uppercase">Nos Offres</a></button>
							  <button><a href="EventActiv.php" class="text-uppercase">Nos Event/Activité</a></button>
							 <button><a href="vol.php" class="text-uppercase">Vol</a></button>
                    </div>
                </div>
            </div>
        </header>
        
        <div class="about-us" id="about">
            <div class="small-container">
         
               <br>
			   <div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-12 text-center">
                                <div class="item">
                                    <img src="imgs/img2.jpg">
                                    <h5 class="text-uppercase">Restaurants</h5>
                                </div>
                                <div class="item">
                                    <img src="imgs/img1.jpg">
                                    <h5 class="text-uppercase">where to stay</h5>
                                </div>
                                <div class="item">
                                    <img src="imgs/img4.jpg">
                                    <div>
                                        <h5 class="text-uppercase">Sightseeing</h5>
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="imgs/img3.jpg">
                                    <h5 class="text-uppercase">shops and boutiques</h5>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 text-right">
                                <h4 class="text-uppercase"><center>Help and also</center><br><center> have fun</center></span></h4>
                                
								<p>Being in a different place make us feel so much better by discovering new things,meeting new people, different culture imagine what can it make to the autistic kids special after
 
                            what they have been through after the virus so let make them feel live again!</p>
                                <button class="text-center"><a href="#" class="text-capitalize">book now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="first"></div>
                <div class="second"></div>
            </div>
        </div>
        
        <div class="services" id="service">
            <div class="container">
                <h2 class="text-capitalize">Enjoy <span> The Moment</span></h2>
                
            </div>
            <div class="small-container">
                <div id="slideToNext" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="imgs/pic4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="imgs/pic3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="imgs/pic2.jpg" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#slideToNext" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left fa-2x"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#slideToNext" role="button" data-slide="next">
                    <i class="fas fa-chevron-right fa-2x"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>
        
        <div class="agency" id="agency">
            <div class="white-overlay">
                <div class="container">
                    <div>
                        <img src="imgs/airplane.png">
                        <div>
                            <img src="imgs/pic1.png">
                            <h2 class="text-center text-uppercase">Enjoy <br> All <br> World</h2>
                        </div>
                        <img src="imgs/airplane.png">
                    </div>
                    <p class="text-center">Have the best holiday with  us at a cheaper price and do a human act at the same time 
be helpful and economic also we make it easy to you since our agency is online but 
you can reach us in our local to advise you and help you organize your dream trip </p>
                </div>
            </div>
        </div>
        
        <div class="statistics text-capitalize text-center font-weight-bold">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <i class="fas fa-umbrella-beach fa-3x"></i>
                        <h3>425</h3>
                        <p>Tourists</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <i class="fas fa-birthday-cake fa-3x"></i>
                        <h3>125</h3>
                        <p>years</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <i class="fa fa-home fa-3x"></i>
                        <h3>325</h3>
                        <p>cottages</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <i class="fas fa-glass-cheers fa-3x"></i>
                        <h3>120</h3>
                        <p>restaurants</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact" id="contact">
            <div class="violet-overlay">
                <div class="container">
                    <h2 class="text-center">Get in touch</h2>
                    <p> <center> Do not hesitate to send us your reclamations</center> </p>




                    <div class="contact-form">
                        <form action="" method="POST">
                            <input  name="name" type="text" placeholder="Name">
                            <input  name="email" type="email" placeholder="Email">
                            <input  name="phone" type="text" placeholder="Phone">
                            <textarea name="reclamation" placeholder="Your reclamations"></textarea>
                            <input type="submit" value="SEND">
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <strong><div align="center"><?php echo($error)?> </div></strong>
        <footer>
            <div class="container">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h4 class="text-uppercase">Contact Us</h4>
                            <p class="address">
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h4 class="text-uppercase">additional links</h4>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Terms and conditions</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="item date">
                            <h4 class="text-uppercase">resent posts</h4>
                            <p><a href="#"></a></p>
                            <p><a href="#"></a></p>
                            <p><a href="#"></a></p>
                            <p><a href="#"></a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h4 class="text-uppercase">newsletter</h4>
                            <form>
                                <input type="text" placeholder="Name">
                                <input type="email" placeholder="Email">
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright text-center">
                <p><a> 2A21 </a></p>
            </div>
        </footer>
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function () {
                
                'use strict';
                
                var winH = $(window).height();
                
                $('header').height(winH);  
                
                $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
                
                $('.navbar ul li a.search').on('click', function (e) {
                    e.preventDefault();
                });
                $('.navbar a.search').on('click', function () {
                    $('.navbar form').fadeToggle();
                });
                
                $('.navbar ul.navbar-nav li a').on('click', function (e) {
                    
                    var getAttr = $(this).attr('href');
                    
                    e.preventDefault();
                    $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
                });
            })
        </script>
    </body>
</html>
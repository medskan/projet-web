<?php

include "db.class.php";

$DB = new DB() ;
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
                            <a class="nav-link" href="#contact">Contact us</a>
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
							  <button><a href="offre.php" class="text-uppercase">Nos Offres</a></button>
							  <button><a href="EventActiv.php" class="text-uppercase">Nos Event/Activité</a></button>
                    </div>
                </div>
            </div>
        </header>
        <h1 align="center"> Nos Activité</h1>
        <div class="about-us" id="about">
            <div class="small-container">
         
               <br>
			   <div>
                    <div class="container">
                        <div class="row">
                           <table >
		<tr>
	<?PHP $total=0; ?>
				<?PHP $products = $DB->query('SELECT * FROM activ') ;  ?>
			<?PHP foreach ( $products as  $product) :?>
			<?PHP $total++;?>

			<?PHP 
			if($total>3)
			{
				echo('<tr>') ;
			}
			?>
				<td>

        <div class="w3-content w3-section">
					<img  src="activ/<?= $product->photo; ?>" ;>
					<div class="p-mask">
						<h2><?PHP echo $product->name; ?></h2>
						<p>Description : <?PHP echo $product->description; ?></p>
					
				
							</div>
    </div>
</td>
						<?PHP 
			if($total>1)
			{
				echo('</tr>') ;
				$total=0;
			}
			?>
												
			<?PHP endforeach ?>
													</tr>
							</table>
	
    
                        </div>
                    </div>
                </div>
                <div class="first"></div>
                <div class="second"></div>
            </div>
        </div>
			<!------------------------------------------------------------------------------------------>
			<h1 align="center"> Nos Event</h1>
          <div class="about-us" id="about">
            <div class="small-container">
         
               <br>
			   <div>
                    <div class="container">
                        <div class="row">
                           <table >
		<tr>
	<?PHP $total=0; ?>
				<?PHP $products1 = $DB->query('SELECT * FROM event') ;  ?>
			<?PHP foreach ( $products1 as  $product1) :?>
			<?PHP $total++;?>

			<?PHP 
			if($total>3)
			{
				echo('<tr>') ;
			}
			?>
				<td>

        <div class="w3-content w3-section">
					<img  src="activ/<?= $product1->photo; ?>" ;>
					<div class="p-mask">
						<h2><?PHP echo $product1->name; ?></h2>
						<p>Description : <?PHP echo $product1->description; ?></p>
					
				
							</div>
    </div>
</td>
						<?PHP 
			if($total>1)
			{
				echo('</tr>') ;
				$total=0;
			}
			?>
												
			<?PHP endforeach ?>
													</tr>
							</table>
	
    
                        </div>
                    </div>
                </div>
                <div class="first"></div>
                <div class="second"></div>
            </div>
        </div>
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
                            <h4 class="text-uppercase">Contact us</h4>
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
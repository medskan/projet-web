<?php
include_once '../Model/appreciation.php';
include_once '../Controller/appreciationC.php';

$error = "";

// create user
$appreciation = null;

// create an instance of the controller
$appreciationC = new appreciationC();
if (
    isset($_POST["evaluation"]) &&
    isset($_POST["ratio"])  &&
    isset($_POST["rate"])  &&
    isset($_POST["recommendation"])
) {
    if (

        !empty($_POST["evaluation"]) &&
        !empty($_POST["ratio"]) &&
        !empty($_POST["rate"]) &&
        !empty($_POST["recommendation"])
    ) {
        $appreciation = new appreciation(

            $_POST['evaluation'],
            $_POST['ratio'] ,
            $_POST['rate'],
            $_POST['recommendation']
        );
        $appreciationC->ajouterappreciation($appreciation);
        header('Location:index.php');
    }
    else
        $error = "Missing information";
}

?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appreciation</title>
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


<div class="contact" id="contact">
    <div class="violet-overlay">
        <div class="container">

    <div class="contact-form">
    <form action="" method="POST" align="center">


    <container>

        </br></br></br>
        <p> <strong> How do you evaluate your last experience with us? </strong> </p>
        <select name="evaluation">

            <option> Excellent </option>
            <option> Good </option>
            <option> Bad </option>
            <option> Very Bad </option>



        </select>


        </br></br>
        <p><strong> Quality-Price Ratio   </strong> </p>
        <select name="ratio">

            <option> It is in line with expectations </option>
            <option> It is nearly in line with expectations </option>
            <option> It is not in line with expectations </option>
            <option> It is too far from expectations </option>



        </select>

        <p> <strong> Following your experience with us please rate us  from 0 to 5 </strong> <p>
            <select name="rate">

                <option> 0 </option>
                <option> 1 </option>
                <option> 2 </option>
                <option> 3 </option>
                <option> 4 </option>
                <option> 5 </option>


    </select>
        </container>
    <p> <strong> Your recommendations help us to improve </strong> </p>

    <textarea  name="recommendation" placeholder="Your recommendations ?" ></textarea>
    <br> <input type="submit" value="SEND">
    </form>
    </div>
        </div>
    </div>
</div>
</div>
</div>
</div></div>

</body>
</html>

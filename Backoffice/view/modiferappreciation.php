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
        $appreciationC->modifierappreciation($appreciation,$_GET['id']);
        header('Location:appreciation.php');
    }
    else
        $error = "Missing information";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body>

<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
        <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
                Creative Tim
            </a></div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item  ">
                    <a class="nav-link" href="./dashboard.html">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item active ">
                    <a class="nav-link" href="offre.php">
                        <i class="material-icons">content_paste</i>
                        <p>Gestion Offre</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="categorie.php">
                        <i class="material-icons">library_books</i>
                        <p>Gestion Categorie</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="activ.php">
                        <i class="material-icons">bubble_chart</i>
                        <p>Gestion Activité</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="event.php">
                        <i class="material-icons">location_ons</i>
                        <p>Gestion Event</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="resv.php">
                        <i class="material-icons">notifications</i>
                        <p>Gestion Reservation</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="bi.php">
                        <i class="material-icons">person</i>
                        <p>Gestion Billet</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="reclamation.php">
                        <i class="material-icons">library_books</i>
                        <p>Gestion Of Reclamations </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="reclamation.php">
                        <i class="material-icons">library_books</i>
                        <p>Gestion Of Appreciations </p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;">Dashboard</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">
                                <i class="material-icons">notifications</i> Notifications
                            </a>
                        </li>
                        <!-- your navbar here -->
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">

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
        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                </div>
                <!-- your footer here -->
            </div>
        </footer>
        </di
    </div>




    <script src="../assets/js/script.js"></script>

</body>
</html>


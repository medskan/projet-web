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
        !empty($_POST["reclamation"])
    ) {
        $reclamation = new reclamation(

            $_POST['name'],
            $_POST['email'] ,
            $_POST['phone'],
            $_POST['reclamation']
        );
        $reclamationC->modifierreclamation($reclamation,$_GET['id']);
        header('Location:reclamation.php');
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
                      <form action="" method="POST">
                            <input  name="name" type="text" placeholder="Name">
                            <input  name="email" type="email" placeholder="Email">
                            <input  name="phone" type="text" placeholder="Phone">
                            <textarea name="reclamation" placeholder="Your reclamations"></textarea>
                            <input type="submit" value="SEND">
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
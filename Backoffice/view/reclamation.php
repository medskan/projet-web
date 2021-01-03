<?php
require_once '../Controller/reclamationC.php';

$reclamationC =  new reclamationC();

$reclamation = $reclamationC->afficherreclamation();

if (isset($_GET['id'])) {
    $reclamationC->supprimerreclamation($_GET['id']);
    header('Location:reclamation.php');
}

?>


<!DOCTYPE html>
<html lang="en">

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

        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div align="center">
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="rechercher utilisateur" title="Type in a name" >
                </div>
                <table id="myTable" border="2" align="center" >
                    <tr>
                        <th>name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>reclamation</th>
                        <th>modifier</th>
                        <th>supprimer</th>
                    </tr>
                    <?php
                    foreach ($reclamation as $rec) {
                        ?>
                        <tr>

                            <td><strong class="shop-item-title"> <?= $rec['name'] ?> </strong></td>
                            <td ><?= $rec['email'] ?> </td>
                            <td ><?= $rec['phone'] ?> </td>
                            <td ><?= $rec['reclamation'] ?> </td>
                            <td><a type="button" class="btn btn-primary shop-item-button" href = "modifierreclamation.php?id=<?= $rec['name'] ?>">Modifier</a></td>
                            <td> <a type="button" class="btn btn-primary shop-item-button" href = "reclamation.php?id=<?= $rec['name'] ?>">Supprimer</a> </td>

                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <!-- your content here -->
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
    </div>
</div>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>


<script src="../assets/js/script.js"></script>
</body>

</html>

<?php
include_once '../Model/service.php';
include_once '../Controller/serviceC.php';

$error = "";

// create user
$service = null;

// create an instance of the controller
$serviceC = new serviceC();
if (
    isset($_POST["login"]) &&
    isset($_POST["email"]) &&
    isset($_POST["reclamation"]) &&
    isset($_POST["evaluation"]) &&
    isset($_POST["rapport"])  &&
    isset($_POST["note"])  &&
    isset($_POST["recommandation"])
) {
    if (
        !empty($_POST["login"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["reclamation"]) &&
        !empty($_POST["evaluation"]) &&
        !empty($_POST["rapport"]) &&
        !empty($_POST["note"]) &&
        !empty($_POST["recommandation"])
    ) {
        $service = new service(
            $_POST['login'],
            $_POST['email'],
            $_POST['reclamation'],
            $_POST['evaluation'],
            $_POST['rapport'] ,
            $_POST['note'],
            $_POST['recommandation'],
        );
        $serviceC->ajouterservice($service);
        //header('Location:afficherUtilisateurs.php');
    }
    else
        $error = "Missing information";
}


?>








<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Service Client</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form action="" method="post">
					<h3>Contact Us</h3>
					<p> <strong>Go tours vous offre les meilleures vacances possible </strong>  </p>
					<label class="form-group">
						<input type="text" name="login" class="form-control"  required>
						<span>Login</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" name="email" class="form-control"  required>
						<span for=""> Mail</span>
						<span class="border"></span>
					</label>
					<label class="form-group" >
						<textarea name="reclamation" id="" class="form-control" required></textarea>
						<span for="">Vos Reclamations</span>
						<span class="border"></span>
					</label>
					<button>Submit
						<i class="zmdi zmdi-arrow-right"></i>
					</button>


			</div>

			<container>
				<img title="l'image de notre logo" src="Logo.png">
				</br></br></br>
				<p> <strong> Comment évaluez-vous votre dernière experience avec nous ? </strong> </p>

		<input type="radio" name="evaluation" /> Excellente <br />
		<input type="radio" name="evaluation" /> Bonne <br />
		<input type="radio" name="evaluation" /> Mauvaise <br />
                <input type="radio" name="evaluation" /> Mediocre <br />

				</br></br>
				<p><strong> Concernant le rapport qualité-prix  </strong> </p>

			<input type="radio" name="rapport" /> C'est conforme aux attentes  <br />
			<input type="radio" name="rapport" /> C'est a peu pres conforme aux attentes <br />
			<input type="radio" name="rapport" /> Ce n'est pas conforme  <br />
			<input type="radio" name="rapport" /> Ce n'est pas du tout conforme  <br />
			</container>
			<container>
				<p> <strong> Suite a votre experience avec nous veuillez nous attribuez une note allant de 0 jusqu'à 10 </strong> <p>
			<select name="note">

			<option> 0 </option>
			<option> 1 </option>
			<option> 2 </option>
			<option> 3 </option>
			<option> 4 </option>
			<option> 5 </option>
			<option> 6 </option>
			<option> 7 </option>
			<option> 8 </option>
			<option> 9 </option>
			<option> 10 </option>
			</container>
			</select>
				<p> <strong> Vos recommandations nous intéresse enormement pour s'ameliorer </strong> </p>

		<input type="text" name="recommandation" placeholder=" Vos recommandations  ?" />

		</form>
		</div>
	
	</body>
</html>
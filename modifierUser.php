<?php
    include "../controller/UtilisateurC.php";
    include_once '../Model/Utilisateur.php';

	$utilisateurC = new UtilisateurC();
	$error = "";

	if (
        isset($_POST["nom_hotel"]) && 
        isset($_POST["nombre_etoiles"]) &&
        isset($_POST["mode_paiement"]) && 
        isset($_POST["login"]) && 
        isset($_POST["pass"])
    ){
		if (
            !empty($_POST["nom_hotel"]) && 
            !empty($_POST["nombre_etoiles"]) && 
            !empty($_POST["mode_paiement"]) && 
            !empty($_POST["login"]) && 
            !empty($_POST["pass"])
        ) {
            $user = new Utilisateur(
                $_POST['nom_hotel'],
                $_POST['nombre_etoiles'], 
                $_POST['mode_paiement'],
                $_POST['login'],
                $_POST['pass']
            );
            
            $utilisateurC->modifierUtilisateur($user, $_GET['id']);
            //header('Location:afficherUtilisateurs.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier Utilisateur</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherUtilisateurs.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$user = $utilisateurC->recupererUtilisateur1($_GET['id']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='3' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="nom_hotel">nom_hotel:
                        </label>
                    </td>
                    <td><input type="text" name="nom_hotel" id="nom_hotel" maxlength="20" value = "<?php echo $user->nom_hotel; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nombre_etoiles">nombre_etoiles:
                        </label>
                    </td>
                    <td><input type="text" name="nombre_etoiles" id="nombre_etoiles" maxlength="20" value = "<?php echo $user->nombre_etoiles; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="mode_paiement">mode_paiement :
                        </label>
                    </td>
                    <td>
                        <input type="mode_paiement" name="mode_paiement" id="mode_paiement">
                    </td>
                </tr>
                <tr>
                    <td rowspan='2' colspan='1'>Information de Connexion</td>
                    <td>
                        <label for="login">Login:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="login" id="login" value = "<?php echo $user->Login; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass">Mot de passe:
                        </label>
                    </td>
                    <td>
                        <input type="password" name="pass" id="pass" value = "<?php echo $user->Password; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>
<?php
include_once '../Model/Utilisateur.php';
include_once '../Controller/UtilisateurC.php';

$error = "";

// create user
$user = null;

// create an instance of the controller
$userC = new UtilisateurC();
if (
    isset($_POST["nom_hotel"]) &&
    isset($_POST["nombre_etoiles"]) &&
    isset($_POST["mode_paiement"]) &&
    isset($_POST["login"]) &&
    isset($_POST["pass"])
) {
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
        $userC->ajouterUtilisateur($user);
        header('Location:afficherUtilisateurs.php');
    }
    else
        $error = "Missing information";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
<body>
<button><a href="afficherUtilisateurs.php">Retour à la liste</a></button>
<hr>

<div id="error">
    <?php echo $error; ?>
</div>

<form action="" method="POST">
    <table border="1" align="center">

        <tr>
            <td rowspan='3' colspan='1'>Fiche Personnelle</td>
            <td>
                <label for="nom_hotel">nom_hotel:
                </label>
            </td>
            <td><input type="text" name="nom_hotel" id="nom_hotel" maxlength="20"></td>
        </tr>
        <tr>
            <td>
                <label for="nombre_etoiles">nombre_etoiles:
                </label>
            </td>
            <td><input type="text" name="nombre_etoiles" id="nombre_etoiles" maxlength="20"></td>
        </tr>

        <tr>
            <td>
                <label for="mode_paiement"> mode_paiement:
                </label>
            </td>
            <td>
                <input type="mode_paiement" name="mode_paiement" id="mode_paiement" >
            </td>
        </tr>
        <tr>
            <td rowspan='2' colspan='1'>Information de Connexion</td>
            <td>
                <label for="login">Login:
                </label>
            </td>
            <td>
                <input type="text" name="login" id="login" >
            </td>
        </tr>
        <tr>
            <td>
                <label for="pass">Mot de passe:
                </label>
            </td>
            <td>
                <input type="password" name="pass" id="pass">
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="submit" value="Envoyer">
            </td>
            <td>
                <input type="reset" value="Annuler" >
            </td>
        </tr>
    </table>
</form>
</body>
</html>
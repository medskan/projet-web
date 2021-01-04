<?PHP
	include "../controller/UtilisateurC.php";

	$utilisateurC=new UtilisateurC();
	$listeUsers=$utilisateurC->afficherUtilisateurs();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Hotels </title>
    </head>
    <body>

		<button><a href="AjouterUtilisateur.php">Ajouter un Utilisateur</a></button>
     	<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>Id</th>
				<th>Nom_hotel</th>
				<th>nombre_etoiles</th>
				<th>mode_paiement</th>
				<th>Login</th>
				<th>password</th>
				<th>supprimer</th>
				<th>modifier</th>
			</tr>

			<?PHP
				foreach($listeUsers as $user){
			?>
				<tr>
					<td><?PHP echo $user['id']; ?></td>
					<td><?PHP echo $user['Nom_hotel']; ?></td>
					<td><?PHP echo $user['nombre_etoiles']; ?></td>
					<td><?PHP echo $user['mode_paiement']; ?></td>
					<td><?PHP echo $user['login']; ?></td>
					<td><?PHP echo $user['password']; ?></td>
					<td>
						<form method="POST" action="supprimerUtilisateur.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
						</form>
					</td>
					<td>
						<a href="modifierUtilisateur.php?id=<?PHP echo $user['Id']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>

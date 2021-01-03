<?PHP
include "config.php";
class categorieC
{
 
	function ajoutercategorie($categorie)
	{
		 $sql = "INSERT INTO categorie (nom,description,datecreation) values (:nom, :description, :datecreation) ";
        $db = config::getConnexion(); 
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':nom', $categorie->getnom());
			$req->bindValue(':description', $categorie->getdescription());
			$req->bindValue(':datecreation', $categorie->getdatecreation());
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
	}
	function rechercheCateg($key)
	{
		$sql = "SELECT * FROM categorie WHERE nom LIKE '%$key%'  OR datecreation LIKE '%$key%' OR description LIKE '%$key%'";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function affichercategorie()
	{
		$sql = " SELECT * FROM categorie ";
        $db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimercategorie($id)
	{
		$sql = "DELETE FROM categorie where id= :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	
}

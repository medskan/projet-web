<?PHP
include "config.php";
class activC
{
 
	function ajouteractiv($activ)
	{
		 $sql = "INSERT INTO activ (name,description,photo,datecreation) values (:name, :description, :photo, :datecreation) ";
        $db = config::getConnexion(); 
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':name', $activ->getname());
			$req->bindValue(':description', $activ->getdescription());
			$req->bindValue(':photo', $activ->getphoto());
			$req->bindValue(':datecreation', $activ->getdatecreation());
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
	}
	function rechercheCateg($key)
	{
		$sql = "SELECT * FROM activ WHERE name LIKE '%$key%'  OR datecreation LIKE '%$key%' OR description LIKE '%$key%'";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function afficheractiv()
	{
		$sql = " SELECT * FROM activ ";
        $db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimeractiv($id)
	{
		$sql = "DELETE FROM activ where id= :id";
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

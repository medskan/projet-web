<?PHP
include "config.php";
class eventC
{
 
	function ajouterevent($event)
	{
		 $sql = "INSERT INTO event (name,description,photo,datecreation) values (:name, :description, :photo, :datecreation) ";
        $db = config::getConnexion(); 
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':name', $event->getname());
			$req->bindValue(':description', $event->getdescription());
			$req->bindValue(':photo', $event->getphoto());
			$req->bindValue(':datecreation', $event->getdatecreation());
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
	}
	function rechercheCateg($key)
	{
		$sql = "SELECT * FROM event WHERE name LIKE '%$key%'  OR datecreation LIKE '%$key%' OR description LIKE '%$key%'";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function afficherevent()
	{
		$sql = " SELECT * FROM event ";
        $db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimerevent($id)
	{
		$sql = "DELETE FROM event where id= :id";
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

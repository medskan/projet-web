<?PHP
	include "../config.php";
	require_once '../model/offre.php';

	class offreC {
		
		function ajouteroffre($offre){
			
			 $sql = "INSERT INTO offre (name, price, photo,categ) values (:name,:price,:photo,:categ) ";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':name', $offre->getname());
            $req->bindValue(':price', $offre->getprice());
			$req->bindValue(':photo', $offre->getphoto());
			$req->bindValue(':categ', $offre->getcateg());
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
		}
		
		function afficheroffre(){
			
			$sql="SELECT * FROM offre";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimeroffre($id){
			$sql="DELETE FROM offre WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifieroffre($offre, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPprice offre SET 
						name = :name, 
						price = :price,
						photo = :photo
						
					WHERE id = :id'
				);
				$query->execute([
					'name' => $offre->getname(),
					'price' => $offre->getprice(),
					'photo' => $offre->getphoto(),
					
					'id' => $id
				]);
				echo $query->rowCount() . " records UPpriceD successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupereroffre($key)
	{
			
		$sql = "SELECT * FROM offre WHERE name LIKE '%$key%' OR categ LIKE '%$key%' OR  id LIKE '%$key'";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

		function recupereroffre1($name){
			$sql="SELECT * from offre where name=$name";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>
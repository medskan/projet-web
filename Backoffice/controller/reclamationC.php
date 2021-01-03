<?PHP
include "../config.php";
require_once '../model/reclamation.php';

class reclamationC {

    function ajouterreclamation ($reclamation){
        $sql="INSERT INTO reclamation (name , email , phone , reclamation ) 
			VALUES (:name , :email ,:phone ,:reclamation )";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            var_dump($reclamation);
            $query->execute([
                'name' => $reclamation->getName(),
                'email' => $reclamation->getEmail(),
                'phone' => $reclamation->getPhone(),
                'reclamation' => $reclamation->getReclamation()

            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function afficherreclamation(){

        $sql="SELECT * FROM reclamation";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function supprimerreclamation($id){
        $sql="DELETE FROM reclamation WHERE name= :id";
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
    function modifierreclamation($reclamation, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE reclamation SET 
						name = :name, 
						email = :email,
						phone = :phone,
                        reclamation = :reclamation
					WHERE name = :id'
            );
            $query->execute([
                'name' => $reclamation->getName(),
                'email' => $reclamation->getEmail(),
                'phone' => $reclamation->getPhone(),
                'reclamation' => $reclamation->getReclamation(),
                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function recupererUtilisateur1($id){
        $sql="SELECT * from Utilisateur where id=:id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute([
                'id'=>$id
            ]);

            $user = $query->fetch();
            return $user;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}

?>

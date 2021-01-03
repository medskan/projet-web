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

    function afficherservice(){

        $sql="SELECT * FROM service";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function supprimerservice($id){
        $sql="DELETE FROM service WHERE login= :id";
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
    function modifierUtilisateur($service, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE service SET 
						login = :login, 
						email = :email,
						reclamation = :reclamation,
						rapport = :rapport,
						note = :note,
                        recommandation = :recommandation,
					WHERE login = :id'
            );
            $query->execute([
                'login' => $service->getLogin(),
                'email' => $service->getEmail(),
                'reclamation' => $service->getReclamation(),
                'evaluation' => $service->getEvaluation(),
                'rapport' => $service->getRapport(),
                'note' => $service->getNote(),
                'recommandation' => $service->getRecommandation(),
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

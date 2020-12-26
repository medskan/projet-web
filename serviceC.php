<?PHP
include "../config.php";
require_once '../Model/service.php';

class serviceC {

    function ajouterservice($service){
        $sql="INSERT INTO service (login , email, reclamation , evaluation , rapport , note , recommandation ) 
			VALUES (:login,:email, :reclamation , :evaluation , :rapport ,:note ,:recommandation )";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
var_dump($service);
            $query->execute([
                'login' => $service->getLogin(),
                'email' => $service->getEmail(),
                'reclamation' => $service->getReclamation(),
                'evaluation' => $service->getEvaluation(),
                'rapport' => $service->getRapport(),
                'note' => $service->getNote(),
                'recommandation' => $service->getRecommandation()
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

    function supprimerUtilisateur($id){
        $sql="DELETE FROM Utilisateur WHERE id= :id";
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
    function modifierUtilisateur($Utilisateur, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE Utilisateur SET 
						nom = :nom, 
						prenom = :prenom,
						email = :email,
						login = :login,
						password = :password
					WHERE id = :id'
            );
            $query->execute([
                'nom' => $Utilisateur->getNom(),
                'prenom' => $Utilisateur->getPrenom(),
                'email' => $Utilisateur->getEmail(),
                'login' => $Utilisateur->getLogin(),
                'password' => $Utilisateur->getPassword(),
                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function recupererUtilisateur($id){
        $sql="SELECT * from Utilisateur where id=$id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $user=$query->fetch();
            return $user;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function recupererUtilisateur1($id){
        $sql="SELECT * from Utilisateur where id=$id";
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

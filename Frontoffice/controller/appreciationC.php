<?php
include "../config.php";
require_once '../model/appreciation.php';

class appreciationC {

    function ajouterappreciation ($appreciation){
        $sql="INSERT INTO appreciation (evaluation , ratio , rate , recommendation ) 
			VALUES (:evaluation , :ratio ,:rate ,:recommendation )";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            var_dump($appreciation);
            $query->execute([
                'evaluation' => $appreciation->getEvaluation(),
                'ratio' => $appreciation->getRatio(),
                'rate' => $appreciation->getRate(),
                'recommendation' => $appreciation->getRecommendation()

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

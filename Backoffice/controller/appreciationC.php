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

    function afficherappreciation(){

        $sql="SELECT * FROM appreciation";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function supprimerappreciation($id){
        $sql="DELETE FROM appreciation WHERE recommendation= :id";
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
    function modifierappreciation($appreciation, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE appreciation SET 
				
						evaluation = :evaluation,
						ratio = :ratio,
						rate = :rate,
                        recommendation = :recommendation
                        
					WHERE recommendation = :id'
            );
            $query->execute([
                'evaluation' => $appreciation->getEvaluation(),
                'ratio' => $appreciation->getRatio(),
                'rate' => $appreciation->getRate(),
                'recommendation' => $appreciation->getRecommendation(),
                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }



}

?>

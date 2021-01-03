<?php
require "config.php" ;
class volC
{
	function afficher_Sign_return()
	{
		//require_once "config.php" ;
		$sql="SElECT * From vol";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
		
	}
	function supprimer($name)
	{ 
		//require_once "config.php" ;
		$sql="DELETE FROM vol where name= :name";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':name',$name);
		try{
            $req->execute();
        }
        catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
	}
	function recherchervol($str){
		$sql="select * from vol where name like '%".$str."%' or destination like '%".$str."%' or checkin like '%".$str."%' or checkout like '%".$str."%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function modifieretat($id,$etat)
   {  
		$sql = "UPDATE vol SET etat='$etat' WHERE id=:id ";
	
	$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
                       header('Location: bi.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	
 }

	
}

?>
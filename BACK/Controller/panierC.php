<?php
  include "config.php";

 include "./Models/panier.php";
 class panierC {


	function ajouterpanier($Panier){
		$sql="insert into panier (id,idchoix,iduser) values (:id, :idchoix,:iduser)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$Panier->getid();
		$idchoix=$Panier->getidchoix();
		$iduser=$Panier->getiduser();


		$req->bindValue(':id',$id);
		$req->bindValue(':idchoix',$idchoix);
		$req->bindValue(':iduser',$iduser);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }
    
 

    function afficherpanier(){
	
		$sql="SElECT * From panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    


    function supprimerpanier($id){
		$sql="DELETE FROM panier where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    


    function recupererpanier($id){
		$sql="SELECT * from panier where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


 }

?>
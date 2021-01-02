<?php
 include "config.php";
 include "./Models/Randonnee.php";
 
  class RandonneeC {


	function ajouterrandonnee($randonnee){
		$sql="insert into randonnee (id,nom,region,date,photo,description, cout) values (:id, :nom,:region,:date, :photo, :description, :cout)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$randonnee->getid();
		$nom=$randonnee->getnom();
		$region=$randonnee->getregion();
        $date=$randonnee->getdate();
        $photo=$randonnee->getphoto();
        $description=$randonnee->getdescription();
        $cout=$randonnee->getcout();

		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':region',$region);

		$req->bindValue(':date',$date);
		$req->bindValue(':photo',$photo);
        $req->bindValue(':description',$description);
        $req->bindValue(':cout',$cout);        

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }
    
 

    function afficherrandonnee(){
	
		$sql="SElECT * From randonnee";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    


    function supprimerrandonnee($id){
		$sql="DELETE FROM randonnee where id= :id";
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
    

    function modifierrandonnee($Randonnee,$id){
		$sql="UPDATE randonnee SET nom=:nom, region=:region, date=:date,description=:description, photo=:photo , cout=:cout WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nom=$Randonnee->getnom();
		$region=$Randonnee->getregion();
        $date=$Randonnee->getdate();
		$photo=$Randonnee->getphoto();
        $description=$Randonnee->getdescription();
        $cout=$Randonnee->getcout();		

      
       
		$datas = array(':id'=>$id,  ':nom'=>$nom, ':region'=>$region,':date'=>$date, ':photo'=>$photo, ':description'=>$description, ':cout'=>$cout );
	
		$req->bindValue(':id',$id);

		$req->bindValue(':nom',$nom);
		$req->bindValue(':region',$region);

		$req->bindValue(':date',$date);
		$req->bindValue(':photo',$photo);
        $req->bindValue(':description',$description);
        $req->bindValue(':cout',$cout);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
    }
    

    function recupererrandonnee($id){
		$sql="SELECT * from randonnee where id=$id";
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
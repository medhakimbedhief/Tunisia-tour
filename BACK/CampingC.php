<?php
 include "config.php";
 include "C:/wamp64/www/Tunisia-tour-master/BACK/Camping.php";
 class CampingC {


	function ajoutercamping($camping){
		$sql="insert into camping (id,nom,region,num,photo,information,DateDebut,DateFin,cout) values (:id, :nom,:region,:num, :photo, :information, :DateDebut, :DateFin, :cout)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$camping->getid();
		$nom=$camping->getnom();
		$region=$camping->getregion();

        $num=$camping->getnum();
        $photo=$camping->getphoto();
        $information=$camping->getinformation();
        $DateDebut=$camping->getDateDebut();
        $DateFin=$camping->getDateFin();
        $cout=$camping->getCout();

		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':region',$region);

		$req->bindValue(':num',$num);
		$req->bindValue(':photo',$photo);
        $req->bindValue(':information',$information);
        $req->bindValue(':DateDebut',$DateDebut);
        $req->bindValue(':DateFin',$DateFin);
        $req->bindValue(':cout',$cout);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }
    
 

    function afficherCamping(){
	
		$sql="SElECT * From camping";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    


    function supprimercamping($id){
		$sql="DELETE FROM camping where id= :id";
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
    

    function modifiercamping($camping,$id){
		$sql="UPDATE camping SET nom=:nom, region=:region, num=:num, information=:information, DateDebut=:DateDebut, DateFin=:DateFin, photo=:photo, cout=:cout WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$camping->getid();
		$nom=$camping->getnom();
		$region=$camping->getregion();

        $num=$camping->getnum();
		$photo=$camping->getphoto();
        $information=$camping->getinformation();
        $DateDebut=$camping->getDateDebut();
        $DateFin=$camping->getDateFin();
        $cout=$camping->getCout();		

      
       
		$datas = array(':idd'=>$idd,':id'=>$id,  ':nom'=>$nom, ':region'=>$region,':num'=>$num, ':photo'=>$photo, ':information'=>$information ,':DateDebut'=>$DateDebut,':DateFin'=>$DateFin,':cout'=>$cout);
		$req->bindValue(':idd',$idd);

		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':region',$region);

		$req->bindValue(':num',$num);
		$req->bindValue(':photo',$photo);
        $req->bindValue(':information',$information);
        $req->bindValue(':DateDebut',$DateDebut);
        $req->bindValue(':DateFin',$DateFin);
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
    

    function recuperercamping($id){
		$sql="SELECT * from camping where id=$id";
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
<?php
    class regionsc {
           
include "../../config.php";
require_once("../../../regions.php");
class region {
{

    function afficherregion(){
		$sql="SELECT * From region";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	/*function calculernote(){
        $sql="SELECT SUM(note)/count(note) from region";
		$db = config::getConnexion();
		try{
		$moy=$db->query($sql);
		return $moy;
	}

        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    */
	function ajouterregion($region){
		$sql="insert into region (idR,nomRegion,photo,information,DateDebut,DateFin,cout) values 
(:idR,:nomRegion, :photo, :information, :DateDebut, :DateFin, :cout)";
		$db = config::getConnexion();
		try{
			$req=$db->prepare($sql);
			$idR=$region->getidR();
			$nomRegion=$region->getnomRegion();
			$photo=$region->getphoto();
			$information=$region->getinformation();
			$DateDebut=$region->getDateDebut();
			$DateFin=$region->getDateFin();
			$cout=$region->getCout();
	
			$req->bindValue(':id',$idR);
			$req->bindValue(':nom',$nomRegion);

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
		

	<?php
 //include "config.php";
 include "./Models/region.php";
 class regionc {


	
	
	function supprimerregion($idR){
		$sql="DELETE FROM region where idR= :idR";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idR',$idR);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	function modifierRegion($region,$id){
		$sql="UPDATE region SET nom=:nom, photo=:photo, information=:information, DateDebut=:DateDebut, DateFin=:DateFin,cout=:cout  WHERE id=:idR";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	//	$idd=$region->getidR();
		$nom=$camping->getnomRegion();
        $information=$camping->getinformation();
        $DateDebut=$camping->getDateDebut();
        $DateFin=$camping->getDateFin();
        $cout=$camping->getCout();
		$photo=$camping->getphoto();
		

      
		$datas = array(':id'=>$idR,  ':nom'=>$nomRegion, ':information'=>$information, ':DateDebut'=>$DateDebut, ':DateFin'=>$DateFin, ':cout'=>$cout, ':photo'=>$photo);

		$req->bindValue(':id',$idR);
		$req->bindValue(':nom',$nomRegion);
		$req->bindValue(':information',$information);
		$req->bindValue(':DateDebut',$DateDebut);
		$req->bindValue(':DateFin',$DateFin);
		$req->bindValue(':cout',$cout);
		$req->bindValue(':photo',$photo);

		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}


	
	function recupererRegion($idR){
		$sql="SELECT * from region where idR=$idR";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	/*function rechercherListeregions($nomregion){
		//$sql="SELECT * from region
    where nomRegion LIKE '%$nomRegion%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
    
   
}

?>
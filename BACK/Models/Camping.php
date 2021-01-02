<?php 

class Camping{
    private $id;
    private $nom;
    private $region;
    private $DateDebut;
    private $DateFin;
    private $photo;
    private $information;
    private $cout;

 function __construct($Id,$Nom,$Region,$Photo,$information,$dateDebut,$dateFin,$Cout){
    $this->id=$Id;
    $this->nom=$Nom;
    $this->region=$Region;
    $this->photo=$Photo; 
    $this->information=$information;
    $this->DateDebut=$dateDebut;
    $this->DateFin=$dateFin;
    $this->cout=$Cout; 
 }

 function getid(){
    return $this->id;
 }
 function getnom(){
    return $this->nom;
 }
 function getregion(){
    return $this->region;
 }
 function getphoto(){
    return $this->photo;
 }
 function getinformation(){
   return $this->information;
}
function getDateDebut(){
   return $this->DateDebut;
}
function getDateFin(){
   return $this->DateFin;
}
function getCout(){
   return $this->cout;
}



 function setid($Id){
    $this->id=$Id;
 }
 function setnom($Nom){
    $this->nom=$Nom;
 }
 function setregion($Region){
    $this->region=$Region;
 }
 function setphoto($Photo){
     $this->photo=$Photo;
 }
 function setinformation($information){
   $this->information=$information;
}
function setDateDebut($dateDebut){
   $this->DateDebut=$dateDebut;
}
function setDateFin($dateFin){
   $this->DateFin=$dateFin;
}
function setCout($Cout){
   $this->cout=$Cout;
}

}


?>
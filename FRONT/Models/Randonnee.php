<?php 

class Randonnee{
    private $id;
    private $nom;
    private $region;
    private $date;
    private $photo;
    private $description;
    private $cout;

 function __construct($Id,$Nom,$Region,$Date,$Photo,$Description,$Cout){
    $this->id=$Id;
    $this->nom=$Nom;
    $this->region=$Region;
    $this->date=$Date;
    $this->photo=$Photo;
    $this->description=$Description; 
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
 function getdate(){
    return $this->date;
 }
 function getphoto(){
    return $this->photo;
 }
 function getdescription(){
   return $this->description;
}
function getcout(){
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
 function setnum($Date){
     $this->date=$Date;
 }
 function setphoto($Photo){
     $this->photo=$Photo;
 }
 function setdescription($Description){
   $this->description=$Description;
}
function setcout($Cout){
   $this->cout=$Cout;
}

}


?>
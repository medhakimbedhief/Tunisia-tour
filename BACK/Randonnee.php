<?php 

class Randonnee{
    private $id;
    private $nom;
    private $region;
    private $num;
    private $photo;
    private $description;
    private $cout;

 function __construct($Id,$Nom,$Region,$Num,$Photo,$Description,$Cout){
    $this->id=$Id;
    $this->nom=$Nom;
    $this->region=$Region;
    $this->num=$Num;
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
 function getnum(){
    return $this->num;
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
 function setnum($Num){
     $this->num=$Num;
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
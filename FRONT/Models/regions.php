<?php

include_once '..//assets.php';
include_once '../Controller/regionsc.php';


class region{
    private $idR;
    private $nom;
    private $DateDebut;
    private $DateFin;
    private $photo;
    private $information;
    private $cout;

 function __construct($IdR,$NomRegion,$Photo,$information,$dateDebut,$dateFin,$Cout){
    $this->id=$IdR;
    $this->nom=$NomRegion;
    $this->photo=$Photo; 
    $this->information=$information;
    $this->DateDebut=$dateDebut;
    $this->DateFin=$dateFin;
    $this->cout=$Cout; 
 }

 function getid(){
    return $this->idR;
 }
 function getnom(){
    return $this->nomRegion;
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



 function setid($IdR){
    $this->id=$IdR;
 }
 function setnom($NomRegion){
    $this->nom=$NomRegion;
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




?>
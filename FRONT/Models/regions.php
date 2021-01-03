<?php

include_once '..//assets.php';
include_once '../Controller/regionsc.php';


class region{
    private $idR;
    private $nom;
    private $photo;
    private $description;
  

 function __construct($IdR,$NomRegion,$Photo,$description){
    $this->id=$IdR;
    $this->nom=$NomRegion;
    $this->photo=$Photo; 
    $this->description=$description;
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
   return $this->description;
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
   $this->description=$description;
}






?>

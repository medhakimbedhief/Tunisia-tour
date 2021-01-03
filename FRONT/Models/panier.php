<?php 

class panier{
    private $id;
    private $idchoix;
    private $iduser;


 function __construct($Idchoix,$Iduser){

    $this->idchoix=$Idchoix;
    $this->iduser=$Iduser;
    ;

 }

 function getid(){
    return $this->id;
 }
 function getidchoix(){
    return $this->idchoix;
 }
 function getiduser(){
    return $this->iduser;
 }


 function setid($Id){
    $this->id=$Id;
 }
 function setidchoix($Idchoix){
    $this->idchoix=$Idchoix;
 }
 function setiduser($Iduser){
    $this->iduser=$Iduser;
 }


}


?>
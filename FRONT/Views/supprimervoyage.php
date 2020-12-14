<?php
  include_once '../Model/voyagem.php';
  include_once '../Controller/voyageC.php';
 $error = "";
 $voyagesC = new voyagesC();

 if (isset($_POST["id"])) 
 {
    $voyagesC->supprimervoyages($_POST["id"]);
     

 }
 else{
     $error = "Missing id";
     }

     header("location:../BACK/GV.php"); 
?>
<?php
  include_once '../Model/voyagem.php';
  include_once '../Controller/voyageC.php';
 $error = "";
 $voyageC = new voyageC();

 if (isset($_POST["id"])) 
 {
    $voyageC->supprimervoyage($_POST["id"]);
     

 }
 else{
     $error = "Missing id";
     }

     header("location:../BACK/GV.php"); 
?>
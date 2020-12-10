<?php
    include_once 'voyageC.php';

 $userC = new voyageC();
 if (isset($_GET['id'])) // get id through query string
 {
$id = $_GET['id']; 
$userC->deletevoyage($id);
header("location: ../../BACK/GV.php"); // redirects to all records page
 
}
 else
{
    echo "Error deleting record"; // display error message if not delete
}

 
?>
<?php
    include_once 'voyageC.php';

 $userC = new voyagesC();
 if (isset($_GET['id'])) // get id through query string
 {
$id = $_GET['id']; 
$userC->deletevoyages($id);
header("location: ../../BACK/GV.php"); // redirects to all records page
 
}
 else
{
    echo "Error deleting record"; // display error message if not delete
}

 
?>
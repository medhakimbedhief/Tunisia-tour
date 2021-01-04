<?php
    include_once 'hotelC.php';

 $userC = new hotelC();
 if (isset($_GET['id'])) // get id through query string
 {
$id = $_GET['id']; 
$userC->deletehotel($id);
header("location: ../../BACK/GH.php"); // redirects to all records page
 
}
 else
{
    echo "Error deleting record"; // display error message if not delete
}

 
?>
<?php
    include_once 'blogC.php';

 $blogC = new blogC();
 if (isset($_GET['id'])) // get id through query string
 {
$id = $_GET['id']; 
$blogC->deleteblog($id);
header("location: ../../BACK/GB.php"); // redirects to all records page
 
}
 else
{
    echo "Error deleting record"; // display error message if not delete
}

 
?>
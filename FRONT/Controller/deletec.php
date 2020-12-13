<?php
    include_once 'commentC.php';

 $commentC = new commentC();
 if (isset($_GET['id'])) // get id through query string
 {
$id = $_GET['id']; 
$commentC->deletecomment($id);
header("location: ../../BACK/GC.php"); // redirects to all records page
 
}
 else
{
    echo "Error deleting record"; // display error message if not delete
}

 
?>
<?php
    include_once 'UtilisateurC.php';

 $userC = new UtilisateurC();
 if (isset($_GET['id'])) // get id through query string
 {
$id = $_GET['id']; 
$userC->supprimerutilisateur($id);
header("location: ../../BACK/GU.php"); // redirects to all records page
 
}
 else
{
    echo "Error deleting record"; // display error message if not delete
}

 
?>
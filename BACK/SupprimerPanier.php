<?PHP
include "../BACK/Controller/panierC.php";
$panier1C=new panierC();
if (isset($_POST["id"])){
	$panier1C->supprimerpanier($_POST["id"]);
	header('Location: checkout_Panier.php');
}

?>
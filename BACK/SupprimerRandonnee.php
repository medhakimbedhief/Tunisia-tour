<?PHP
include "../BACK/Controller/RandonneeC.php";
$rand=new RandonneeC();
if (isset($_POST["id"])){
	$rand->supprimerrandonnee($_POST["id"]);
	header('Location: checkout_randonnee.php');
}

?>
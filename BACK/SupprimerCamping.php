<?PHP
include "CampingC.php";
$camping=new CampingC();
if (isset($_POST["id"])){
	$camping->supprimerCamping($_POST["id"]);
	header('Location: checkout_camping.php');
}

?>
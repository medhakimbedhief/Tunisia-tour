<?PHP

include "C:/wamp64/www/Tunisia-tour-master/BACK/RandonneeC.php";

if (isset($_POST['nom']) and isset($_POST['Randonnee']) and isset($_POST['num']) and isset($_POST['information'])and isset($_POST['DateDebut'])and isset($_POST['DateFin'])and isset($_POST['cout'])){

	$targetDir = "uploads/";
	$fileName = basename($_FILES['photo']['nom']);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
 //   echo $fileName."--";
  //  echo $targetFilePath;
	move_uploaded_file($_FILES['photo']['nom'],$targetFilePath);

	

	$randonne1=new RandonneeC($_POST['id'],$_POST['nom'],$_POST['region'],$_POST['num'],$_POST['photo'],$_POST['information'],$_POST['DateDebut'],$_POST['DateFin'],$_POST['cout']);



$RandonneeC1=new RandonneeC();
if($_POST['DateFin']< $_POST['DateDebut'] )
{
	echo("<script> alert(\"il faut que la date fin soit superieur a la date debut\")</script>");
	echo("<script> window.location.replace(\"checkout_randonnee.php\")</script>");

}
else if($_POST['DateFin']> $_POST['DateDebut'] ){
$RandonneeC1-> Ajouterrandonne($Randonnee1);

header('Location: checkout_randonnee.php');
}
}else{
	echo "vérifier les champs";
}
//*/

?>



  
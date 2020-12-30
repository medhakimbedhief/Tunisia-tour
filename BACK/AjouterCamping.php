<?PHP

include "C:/wamp64/www/Tunisia-tour-master/BACK/CampingC.php";

if (isset($_POST['nom']) and isset($_POST['region']) and isset($_POST['num']) and isset($_POST['information'])and isset($_POST['DateDebut'])and isset($_POST['DateFin'])and isset($_POST['cout'])){

	$targetDir = "uploads/";
	$fileName = basename($_FILES['photo']['nom']);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
 //   echo $fileName."--";
  //  echo $targetFilePath;
	move_uploaded_file($_FILES['photo']['nom'],$targetFilePath);

	

	$camping1=new Camping($_POST['id'],$_POST['nom'],$_POST['region'],$_POST['num'],$_POST['photo'],$_POST['information'],$_POST['DateDebut'],$_POST['DateFin'],$_POST['cout']);



$campingC1=new CampingC();
if($_POST['DateFin']< $_POST['DateDebut'] )
{
	echo("<script> alert(\"il faut que la date fin soit superieur a la date debut\")</script>");
	echo("<script> window.location.replace(\"checkout_camping.php\")</script>");

}
else if($_POST['DateFin']> $_POST['DateDebut'] ){
$campingC1-> ajoutercamping($camping1);

header('Location: checkout_camping.php');
}
}else{
	echo "vérifier les champs";
}
//*/

?>




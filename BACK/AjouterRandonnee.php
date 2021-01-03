<?PHP

include "../BACK/Controller/RandonneeC.php";

if (isset($_POST['nom']) and isset($_POST['region']) and isset($_POST['date']) and isset($_POST['photo'])and isset($_POST['description'])and isset($_POST['cout'])){

	$targetDir = "uploads/";
	$fileName = basename($_FILES['photo']['nom']);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
 //   echo $fileName."--";
  //  echo $targetFilePath;
	move_uploaded_file($_FILES['photo']['nom'],$targetFilePath);

	

	$randonne1=new Randonnee($_POST['id'],$_POST['nom'],$_POST['region'],$_POST['date'],$_POST['photo'],$_POST['description'],$_POST['cout']);



$RandonneeC1=new RandonneeC();


$today=date("Y-m-d");

if($today > $_POST['date'] )
{
	echo("<script> alert(\"verifier date debut\")</script>");
	echo("<script> window.location.replace(\"checkout_camping.php\")</script>");

}
else {
$RandonneeC1-> AjouterRandonnee($randonne1);

header('Location: checkout_randonnee.php');
}
}else{
	echo "vérifier les champs";
}
//*/

?>



  
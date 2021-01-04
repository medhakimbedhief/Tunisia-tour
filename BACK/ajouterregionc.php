<?PHP

include "../BACK/Controller/regionc.php";

if (isset($_POST['nom']) and isset($_POST['description']){

	$targetDir = "uploads/";
	$fileName = basename($_FILES['photo']['nom']);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
 //   echo $fileName."--";
  //  echo $targetFilePath;
	move_uploaded_file($_FILES['photo']['nom'],$targetFilePath);

	

	$camping1=new region($_POST['id'],$_POST['nom'],$_POST['photo'],$_POST['description']);



$campingC1=new regionc();




?>

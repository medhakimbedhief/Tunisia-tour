<?php
 include_once '../Controller/UtilisateurC.php';
 include_once '../Models/Utilisateur.php';
$id = $_GET['id']; 

    $utilisateurC = new UtilisateurC();
        $pdo=config::getConnexion();
        $query= $pdo ->prepare("select * from utilisateur where id='$id'");
        $query->execute();
        $result = $query->fetchAll();

if(isset($_POST['update'])) 
{
    $CIN = $_POST['CIN'];
    $nom = $_POST['Nom'];
    $prenom = $_POST['Prenom'];
    $telephone = $_POST['telephone'];
    $email =$_POST['Email'];
    $login =$_POST['Login'];
    $password = $_POST['Password'];
    $utilisateurC->modifierutilisateur($CIN,$nom,$prenom,$telephone,$email,$login,$password,$id);
    header("location:../../BACK/GU.php"); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
	<meta name="author" content="GeeksLabs">
	<meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
	<link rel="shortcut icon" href="img/favicon.png">
	<title>Modification</title>
	<!-- Bootstrap CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<!-- bootstrap theme -->
	<link href="../css/bootstrap-theme.css" rel="stylesheet">
	<!--external css-->
	<!-- font icon -->
	<link href="../css/elegant-icons-style.css" rel="stylesheet" />
	<link href="../css/font-awesome.css" rel="stylesheet" />
	<!-- Custom styles -->
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/style-responsive.css" rel="stylesheet" />

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond.min.js"></script>
	  <![endif]-->

	<!-- =======================================================
		Theme Name: NiceAdmin
		Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
		Author: BootstrapMade
		Author URL: https://bootstrapmade.com
	  ======================================================= -->
</head>




    <body class="login-img3-body" >


	<div class="container">
    <div class=" text center">
<h3 class="page-header">Modifier cet utilisateur</h3>
</div>
<form method="POST">
   <div class="login-form">
	<div class="login-wrap">
    <p class="login-img"><i class="icon_lock_alt"></i></p>


<?php foreach($result as $rows) {?>


  CIN:          
  <div class="input-group">
  <input class="form-control"type="number" name="CIN" value="<?php echo $rows['CIN'] ?>" placeholder="Enter your CIN" Required>
  </div>

  Nom:
  <div class="input-group">
  <input class="form-control"type="text" name="Nom" value="<?php echo $rows['nom'] ?>" placeholder="Enter name" Required>
  </div>

  Prenom:
  <div class="input-group">
  <input class="form-control"type="text" name="Prenom" value="<?php echo $rows['prenom'] ?>" placeholder="Enter prenom" Required>
  </div>

  Telephone:
  <div class="input-group">
  <input class="form-control"type="number" name="telephone" value="<?php echo $rows['telephone'] ?>" placeholder="Enter your phone number" Required>
  </div>

  Adresse Email:
  <div class="input-group">
  <input class="form-control"type="email" name="Email"  value="<?php echo $rows['email'] ?>" pattern=".+@gmail.com|.+@esprit.tn" placeholder="Enter mail" Required>
  </div>

  Login:
  <div class="input-group">
  <input class="form-control"type="text" name="Login" value="<?php echo $rows['login'] ?>" placeholder="Enter LOGIN" Required>
  </div>

  Mot de passe:
  <div class="input-group">
  <input class="form-control" type="password" name="Password" value="<?php echo $rows['password'] ?>" placeholder="Enter PASSWORD" Required>
  </div>
  <input class="btn btn-primary btn-lg btn-block" type="submit" name="update" value="Modifier">

<?php } ?>
</div>
</div>
</form>
</div>

</body>
</html>
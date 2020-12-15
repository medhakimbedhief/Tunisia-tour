<?php
 include_once 'UtilisateurC.php';
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Dar Mima Modifier compte</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="../assets/css/bootstrap-theme.css" rel="stylesheet">
	<!-- Custom2 styles -->
	<link href="../assets/css/style.css" rel="stylesheet">
    <!-- Site2 Icons -->
    <link rel="shortcut icon" href="../Views/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../Views/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/custom.css">
    <!-- Login CSS -->
    <link rel="stylesheet" href="../assets/css/logintheme.css">    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>



    <body class="login-img3-body" >
    
    
    



<h3>Modifier cet utilisateur</h3>

	<div class="container">
<form method="POST">
   <div class="login-form">
	<div class="login-wrap">

<?php foreach($result as $rows) {?>


  CIN:          
  <div class="input-group">
  <input type="number" name="CIN" value="<?php echo $rows['CIN'] ?>" placeholder="Enter your CIN" Required>
  </div>

  Nom:
  <div class="input-group">
  <input type="text" name="Nom" value="<?php echo $rows['nom'] ?>" placeholder="Enter name" Required>
  </div>

  Prenom:
  <div class="input-group">
  <input type="text" name="Prenom" value="<?php echo $rows['prenom'] ?>" placeholder="Enter prenom" Required>
  </div>

  Telephone:
  <div class="input-group">
  <input type="number" name="telephone" value="<?php echo $rows['telephone'] ?>" placeholder="Enter your phone number" Required>
  </div>

  Adresse Email:
  <div class="input-group">
  <input type="email" name="Email"  value="<?php echo $rows['email'] ?>" pattern=".+@gmail.com|.+@esprit.tn" placeholder="Enter mail" Required>
  </div>

  Login:
  <div class="input-group">
  <input type="text" name="Login" value="<?php echo $rows['login'] ?>" placeholder="Enter LOGIN" Required>
  </div>

  Mot de passe:
  <div class="input-group">
  <input type="password" name="Password" value="<?php echo $rows['password'] ?>" placeholder="Enter PASSWORD" Required>
  </div>
  <input class="btn btn-primary btn-lg btn-block" type="submit" name="update" value="Modifier">

<?php } ?>
</div>
</div>
</form>
</div>

</body>
</html>
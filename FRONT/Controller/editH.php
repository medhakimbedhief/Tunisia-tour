<?php
 include_once 'voyageC.php';
 include_once '../Models/voyagem.php';


$id = $_GET['id']; 

    $hotelC = new hotelC();
        $pdo=config::getConnexion();
        $query= $pdo ->prepare("select * from hotel where id='$id'");
        $query->execute();
        $result = $query->fetchAll();

if(isset($_POST['update'])) 
{
    $nom = $_POST['nom'];
    $options = $_POST['options'];
    $depart = $_POST['depart'];
    $retour = $_POST['retour'];
    $retour = $_POST['etoiles'];
   
    $hotelC->modifierhotel($nom,$options,$depart,$retour,$etoiles,$id);
    header("location:../../BACK/GH.php"); 
    
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
    <title>Modification du hotel</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="../assets/css/bootstrap-theme.css" rel="stylesheet">
	<!-- Custom2 styles -->
	<link href="../assets/css/style.css" rel="stylesheet">
    <!-- Site2 Icons -->
    <link rel="shortcut icon" href="../Views/etoiless/favicon.ico" type="etoiles/x-icon">
    <link rel="apple-touch-icon" href="../Views/etoiless/apple-touch-icon.png">

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
    
    
    



<h3>Modifier cet hotel</h3>

	<div class="container">
<form method="POST">
   <div class="login-form">
	<div class="login-wrap">

<?php foreach($result as $rows) {?>

    <form class="form-horizontal" action="" method="POST">
        <table border="1" align="center">
        <div class="form-group">

        <label class="col-sm-2 control-label">nom</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="nom" id="nom" maxlength="20" value="<?php echo $rows['nom'] ?>" placeholder="Enter your nom" Required>
                    </div>
                    </div>




  <form class="form-horizontal" action="" method="POST">
        <table border="1" align="center">
        <div class="form-group">

        <label class="col-sm-2 control-label">options</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="options" id="options"  value="<?php echo $rows['options'] ?>" placeholder="Enter your price" Required>
                    </div>
                    </div>






                    <form class="form-horizontal" action="" method="POST">
        <table border="1" align="center">
        <div class="form-group">

        <label class="col-sm-2 control-label">depart</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="depart" id="depart" maxlength="20" value="<?php echo $rows['depart'] ?>" placeholder="depart" Required>
                    </div>
                    </div>

                    <form class="form-horizontal" action="" method="POST">
        <table border="1" align="center">
        <div class="form-group">

        <label class="col-sm-2 control-label">retour</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="retour" id="retour" maxlength="20" value="<?php echo $rows['retour'] ?>" placeholder="retour" Required>
                    </div>
                    </div>




                    <table border="1" align="center">
        <div class="form-group">

        <label class="col-sm-2 control-label">etoiles</label>
<div class="col-sm-10">
<input type="file" class="form-control" name="etoiles" id="etoiles" value="<?php echo $rows['etoiles'] ?>" placeholder="etoiles" Required>
                    </div>
                    </div>












 
                    <tr>
            <br>
                    <br>
            <div class="col-lg-offset-2 col-lg-10">
                
                    <input type="submit" value="Modifier" class="btn btn-danger">

                    <input type="reset" value="Annuler" class="btn btn-danger">
            

            </tr>
 

<?php } ?>
</div>
</div>
</form>
</div>



</body>
</html>


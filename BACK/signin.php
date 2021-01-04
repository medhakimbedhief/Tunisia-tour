<?php
  include_once '../FRONT/Models/Utilisateur.php';
  include_once '../FRONT/Controller/UtilisateurC.php';
  session_start();
  $message = "";
  $userC = new UtilisateurC();
  if (
      isset($_POST["login"]) &&
      isset($_POST["pass"])
  ) {
      if (
          !empty($_POST["login"]) &&
          !empty($_POST["pass"])
      ) {
          
        
          $message = $userC->connexionUser($_POST["login"], $_POST["pass"]);
          $_SESSION['e'] = $_POST["login"]; // on stocke dans le tableau une colonne ayant comme nom "e",
          //  avec le login à l'intérieur
          if ($message != 'le login ou le mot de passe est incorrect') {



            $to_email ='atunisiatour@gmail.com';
            $subject = 'Connexion validée';
            $message = 'Bonjour nous voudrons vous informez que vous etes bien connecté dans notre site TUNISIA TOUR';
            $headers = 'atunisiatour@gmail.com';
            try {
                if (mail($to_email, $subject, $message, $headers)) { 
                    echo (' <script> alert("Nous vous avons envoyer un mail"); </script> ');
                } else {
                    echo ('<script> alert("Erreur du mail"); </script>');
                }
            } catch (Exception $e) {
                echo 'Exception reçue : ',  $e->getMessage(), "\n";
            }
    
    
    

             

              header('Location:../FRONT/index1.php');
          } else {
              $message = 'le login ou le mot de passe est incorrect';
              echo ('<script> alert("Vos données sont incorrectes, Veuillez réessayer"); </script>');

          }
      } else
          $message = "Missing information";
  }

?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->


<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Tunia tou login</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login-img3-body">
	
	<div class="container">

    <form action="" method="POST">
    
    
    <div class="login-form">
			<div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            Login:
            <br>
        <div class="input-group">
        <span class="input-group-addon"><i class="icon_profile"></i></span>

            <input type="text"  class="form-control"name="login" id="login" placeholder="Username"  onfocusout="vide_log()" >
        </div>
        <label id="elementlog" name="erreur" style="color: red;display: none;">Ce champ est obligatoire</label> 
        Password :
        <br>
        <div class="input-group">
        <span class="input-group-addon"><i class="icon_key_alt"></i></span>
        <input type="password" id="pass" class="form-control" name="pass" placeholder="password"  onfocusout="vide_pass()">
</div>
<label id="elementpass" name="erreur" style="color: red;display: none;">Ce champ est obligatoire</label> 


    
     <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Se Connecter" onClick="validation()">
     <a><button class="btn btn-info btn-lg btn-block" formaction="../FRONT/Views/Signup.php" >S'inscrire</button></a>
     

     </div>
    </div>

</form>
        </div>
        <div id="error">
                    </div>
</body>
<script>
        function vide_log() {
            var ch = document.getElementById("login").value;
            var element = document.getElementById("elementlog");
            if (ch === "") { element.style.display = "block"; } else { element.style.display = "none"; }
        }        
        function vide_pass() {
            var ch = document.getElementById("pass").value;
            var element = document.getElementById("elementpass");
            if (ch === "") { element.style.display = "block"; } else { element.style.display = "none"; }
        }
    function validation(){
        vide_log();
        vide_pass();
    }
    </script>

</html>
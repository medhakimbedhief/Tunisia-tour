<?php
  include_once '../FRONT/Models/Utilisateur.php';
  include_once '../FRONT/Controller/UtilisateurC.php';
 $error = "";
 if (isset($_POST["login"]) && isset($_POST["pass"])) 
 {
    $login=$_POST["login"];
    $password=$_POST["pass"];
    $utiC=new UtilisateurC();
    $pdo=config::getConnexion();
        $query= $pdo ->prepare("select * from utilisateur where login= '$login' and password= '$password'");
        $query->execute(['login' => $login]);
         $result = $query->fetchAll();
         echo("<table border='1' align='center'><tr>");
         // output data of each row
     foreach($result as $rows)
     {
         echo ("<td>");
         echo $rows['CIN'];
         echo ("</td>");
         echo ("<td>");
         echo $rows['nom'];
         echo ("</td>");
         echo ("<td>");
         echo $rows['prenom'];
         echo ("</td>");


     echo("</tr>");
 }
echo("</table>");}




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

    <form action="signin.php" method="POST">
    
    
    <div class="login-form">
			<div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            Login:
            <br>
        <div class="input-group">
        <span class="input-group-addon"><i class="icon_profile"></i></span>

            <input type="text"  class="form-control"name="login" id="login" onfocusout="vide_log()" Required>
            <label id="elementlog" name="erreur" style="color: red;display: none;">Ce champ est obligatoire</label> 
        </div>
        Password :
        <br>
<div class="input-group">
    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
    <input type="password" id="pass" class="form-control" name="pass" placeholder="password"  onfocusout="vide_pass()"Required>
    <label id="elementpass" name="erreur" style="color: red;display: none;">Ce champ est obligatoire</label> 
</div>
<label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
    
     <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Se Connecter" onClick="validation()">
     </div>
    </div>

</form>
</div>
<div id="error">
            
           
           
    <?php echo $error; ?>
            </div>
         <!--   <form action="supprimerutilisateur.php" method="POST">
            <table border="1" align="center"bordercolor="black" bgcolor="white">
            <tr>
                <td><label for="Supprimer">Supprimer selon id:
                            </label></td>
                            <td><input type="text" name="id" id="id" ></td>
                            <td>
                            <input type="submit" value="Supprimer" > 
                        </td>
        </tr>
            </table>
                </form>
                <form action="modifierutilisateur.php" method="GET">
            <table border="1" align="center"bordercolor="black" bgcolor="white">
            <tr>
                <td><label for="Modifier">Modifier selon id:
                            </label></td>
                            <td><input type="text" name="id" id="id" ></td>
                            <td>
                            <input type="submit" value="Modifier" > 
                        </td>
        </tr>
            </table>
                </form> -->
            

  
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
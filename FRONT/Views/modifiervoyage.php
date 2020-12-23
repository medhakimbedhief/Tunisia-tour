<?php
include "../controller/voyageC.php";
include_once '../Model/voyagem.php';



$id = $_GET['id']; 

$voyagesC = new voyagesC();
    $pdo=config::getConnexion();
    $query= $pdo ->prepare("select * from voyages where id='$id'");
    $query->execute();
    $result = $query->fetchAll();


    if(isset($_POST['update'])) 
    {
        $destination = $_POST['destination'];
        $prix = $_POST['prix'];
        $depart = $_POST['depart'];
        $retour = $_POST['retour'];
        $image = $_POST['image'];
        $voyagesC->modifiervoyages($destination,$prix,$depart,$retour,$image,$id);
          
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h3>Modifier un voyage</h3>

<form method="POST">
<?php foreach($result as $rows) ?>
    <table border="1">
        <tr>
            <td>destination</td>
            <td>prix</td>
            <td>depart</td>          
            <td>retour</td>
            <td>image</td>
        </tr>
        <tr>
        <td >
  <input type="text" name="destination" value="<?php echo $rows['destination'] ?>" placeholder="Enter your destination" Required></td>
  
        <td >
  <input type="number" name="prix" value="<?php echo $rows['prix'] ?>" placeholder="Enter price" Required></td>
  <td>
  <input type="text" name="depart" value="<?php echo $rows['depart'] ?>" placeholder="Enter depart" Required></td>
  <td >
  <input type="text" name="retour" value="<?php echo $rows['retour'] ?>" placeholder="Enter retour" Required></td>
  <td >
  <input type="file" name="image" value="<?php echo $rows['image'] ?>" placeholder="Enter retour" Required></td>

  <td>
  <input type="submit" name="update" value="Modifier"></td></tr>
<?php  ?>
</table>
</form>
<a href="../BACK/GV.php"> afficher ma base de donnees</a><br>
<a href="../BACK/GV.php"> retourner à la page d'acceuil</a><br>

</body>
</html>
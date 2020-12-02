<?php
    include_once 'blogC.php';
    include_once '../Models/blogm.php';
    $id = $_GET['id']; 

    $blogC = new blogC();
    $pdo=config::getConnexion();
        $query= $pdo ->prepare("select * from blog where id='$id'");
        $query->execute();
        $result = $query->fetchAll();
    if (

        isset($_POST["update"])
        )  {
            $titre=$_POST['titre'];
            $article= $_POST['article'];
            $image=$_POST['image'];
            $error = "ok";
            echo $error;
            $blogC->modifierblog($titre,$article,$image,$id);
            header('location:../../BACK/GB.php');
        } else{
            $error = "Missing information";
            echo $error;
        }
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body style="background-color: burlywood;">
<?php

        #if (isset($_GET['id'])) {
         #   $blog = $blogC->getAlbumById($_GET['id']);
			
    ?>
<h2 align="center">Update Data</h2>
<hr>
<br>
<center>
<form action="" method="POST">
<table border="0">
    <tr> <td>ID</td>
        <td> titre</td>
        <td>article</td>
        <td>image</td>

    </tr>
    <?php foreach($result as $rows) {?>

    <tr>
    <td style="color:red"><?php echo $rows['id']; ?> </td>   
    <td >    
  <input type="text" name="titre" value="<?php echo $rows['titre']; ?>" placeholder="Enter title" Required></td>
  <td>
  <input type="text" name="article" value="<?php echo $rows['article']; ?>" placeholder="Enter article" Required></td>
  <td>
  <input type="file" name="image"  value="<?php echo $rows['image'] ;?>" ></td>
  </tr>
</table>
<br>
<input type="submit" name="update" value="modifier"> 

<?php } ?>
</form>
</center>

</body>
</html>


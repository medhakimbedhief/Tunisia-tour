<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "tunisia_tour");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM commentaire 
  WHERE nom_u LIKE '%".$search."%'
  OR text LIKE '%".$search."%' 
  OR id_b LIKE '%".$search."%' 

 ";
}
else
{
 $query = "
  SELECT * FROM commentaire ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Nom d utilisateur</th>
     <th>commentaire</th>
     <th>id du blog</th>

    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td><a>'.$row["nom_u"].'</a></td>
    <td>'.$row["text"].'</td>
    <td>'.$row["id_b"].'</td>


   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

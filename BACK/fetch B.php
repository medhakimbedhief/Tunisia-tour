<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "tunisia_tour");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM blog 
  WHERE titre LIKE '%".$search."%'
  OR article LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM blog ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Titre</th>
     <th>article</th>
     <th>iamge</th>

    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td><a>'.$row["titre"].'</a></td>
    <td>'.$row["article"].'</td>
    <td> <img src="C:\xampp\htdocs\Tunisia-tour\FRONT\assets\images\blog\ ' .$row["image"]. ' " height="40" width="40"    </td>

 

   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

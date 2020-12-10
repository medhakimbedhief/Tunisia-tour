<?PHP
include  '../FRONT/Controller/voyageC.php';

$voyageC = new voyageC();
$listeUsers = $voyageC->affichervoyages();

?>

<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Afficher Liste voyages </title>
</head>

<body>
	<button><a href="ajoutV.php">Ajouter un voyage</a></button>
	<hr>
	<table border=1 align='center'>
		<tr>
			<th>Id</th>
			<th>destination</th>
			<th>prix</th>
			<th>depart</th>
			<th>retour</th>
			<th>supprimer</th>
			<th>modifier</th>
		</tr>

		<?PHP
		foreach ($listeUsers as $user) {
		?>
			<tr>
				<td><?PHP echo $user['id']; ?></td>
				<td><?PHP echo $user['destination']; ?></td>
				<td><?PHP echo $user['prix']; ?></td>
				<td><?PHP echo $user['depart']; ?></td>
				<td><?PHP echo $user['retour']; ?></td>
				<td>
					<form method="POST" action="supprimervoyage.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
					</form>
				</td>
				<td>
					<a href="modifiervoyage.php?id=<?PHP echo $user['id']; ?>"> Modifier </a>
				</td>
			</tr>
		<?PHP
		}
	
		?>
	 <?php

	
?>
	</table>
</body>

</html>
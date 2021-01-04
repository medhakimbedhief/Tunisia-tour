<?PHP
include_once "config.php";


class regionC
{

	function ajouterregion($region)
	{
		$sql = "INSERT INTO region (nom, description, image) 
			VALUES (:nom,:description,:image)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				'nom' => $region->getnom(),
				'description' => $region->getdescription(),
				'image' => $region->getphoto(),
				
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function afficherregion()
	{

		$sql = "SELECT * FROM region";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
    }
    public function deleteregion($id) {
        $sql="delete  from region where id= '$id' ";
        $db=config::getConnexion();
        $query=$db->prepare($sql);
        $query->execute([
                'id' => $id]);
        }
	function supprimerregion($id)
	{
		$sql = "DELETE FROM region WHERE id= :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	public function modifierregion($nom,$description,$photo,$id) {
		$sql="update region SET 
							nom = :nom,
							description = :description, 
							image = :image,
						
						WHERE id = :id";
		$db=config::getConnexion(); 
		$query=$db->prepare($sql);
		$query->execute([
						'nom' => $nom,
						'description' => $description,
						'image' => $photo,
					
						'id' => $id,
					]); 
		}
	function recupererregion($id)
	{
		$sql = "SELECT * from region where id=$id";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$user = $query->fetch();
			return $user;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function recupererregion1($id)
	{
		$sql = "SELECT * from region where id=$id";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$user = $query->fetch(PDO::FETCH_OBJ);
			return $user;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	}
	


	function getnom($nom) {
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'SELECT * FROM region WHERE nom = :nom'
			);
			$query->execute([
				'nom' => $nom
			]);
			return $query->fetch();
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}

	 function getregion($description) {
		
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'SELECT * FROM region WHERE description = :description'
			);
			$query->execute([
				'description' => $description
			]);
			return $query->fetch();
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}
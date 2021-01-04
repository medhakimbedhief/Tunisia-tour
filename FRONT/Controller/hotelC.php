<?PHP
include_once "config.php";


class hotelC
{

	function ajouterhotel($hotel)
	{
		$sql = "INSERT INTO hotel (nom, options, depart, retour, etoiles) 
			VALUES (:nom,:options,:depart,:retour,:etoiles)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				'nom' => $hotel->getnom(),
				'options' => $hotel->getoptions(),
				'depart' => $hotel->getdepart(),
				'retour' => $hotel->getretour(),
				'etoiles' => $hotel->getetoiles(),
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function afficherhotel()
	{

		$sql = "SELECT * FROM hotel";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
    }
    public function deletehotel($id) {
        $sql="delete  from hotel where id= '$id' ";
        $db=config::getConnexion();
        $query=$db->prepare($sql);
        $query->execute([
                'id' => $id]);
        }
	function supprimerhotel($id)
	{
		$sql = "DELETE FROM hotel WHERE id= :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	public function modifierhotel($nom,$options,$depart,$retour,$etoiles,$id) {
		$sql="update hotel SET 
							nom = :nom,
							options = :options, 
							depart = :depart,
							retour = :retour,
							etoiles = :etoiles,
	
						WHERE id = :id";
		$db=config::getConnexion(); 
		$query=$db->prepare($sql);
		$query->execute([
						'nom' => $nom,
						'options' => $options,
						'depart' => $depart,
						'retour' => $retour,
						'etoiles' => $etoiles,
						'id' => $id,
					]); 
		}
	function recupererhotel($id)
	{
		$sql = "SELECT * from hotel where id=$id";
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

	function recupererhotel1($id)
	{
		$sql = "SELECT * from hotel where id=$id";
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
				'SELECT * FROM hotel WHERE nom = :nom'
			);
			$query->execute([
				'nom' => $nom
			]);
			return $query->fetch();
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}

	 function gethotel($options) {
		
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'SELECT * FROM hotel WHERE options = :options'
			);
			$query->execute([
				'options' => $options
			]);
			return $query->fetch();
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}


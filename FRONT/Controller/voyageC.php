<?PHP
include "config.php";


class voyagesC
{

	function ajoutervoyages($voyages)
	{
		$sql = "INSERT INTO voyages (destination, prix, depart, retour) 
			VALUES (:destination,:prix,:depart,:retour)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				'destination' => $voyages->getdestination(),
				'prix' => $voyages->getprix(),
				'depart' => $voyages->getdepart(),
				'retour' => $voyages->getretour(),
				
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function affichervoyages()
	{

		$sql = "SELECT * FROM voyages";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
    }
    public function deletevoyages($id) {
        $sql="delete  from voyages where id= '$id' ";
        $db=config::getConnexion();
        $query=$db->prepare($sql);
        $query->execute([
                'id' => $id]);
        }
	function supprimervoyages($id)
	{
		$sql = "DELETE FROM voyages WHERE id= :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	public function modifiervoyages($destination,$prix,$depart,$retour,$email,$login,$password,$id) {
		$sql="update voyages SET 
							destination = :destination,
							prix = :prix, 
							depart = :depart,
							retour = :retour,
	
						WHERE id = :id";
		$db=config::getConnexion(); 
		$query=$db->prepare($sql);
		$query->execute([
						'destination' => $destination,
						'prix' => $prix,
						'depart' => $depart,
						'retour' => $retour,
						'id' => $id
					]); 
		}
	function recuperervoyages($id)
	{
		$sql = "SELECT * from voyages where id=$id";
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

	function recuperervoyages1($id)
	{
		$sql = "SELECT * from voyages where id=$id";
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
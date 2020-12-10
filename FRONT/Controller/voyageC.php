<?PHP
include "config.php";


class voyageC
{

	function ajoutervoyage($voyage)
	{
		$sql = "INSERT INTO voyage (destination, prix, depart, retour) 
			VALUES (:destination,:prix,:depart,:retour)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				'destination' => $voyage->getdestination(),
				'prix' => $voyage->getprix(),
				'depart' => $voyage->getdepart(),
				'retour' => $voyage->getretour(),
				
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function affichervoyages()
	{

		$sql = "SELECT * FROM voyage";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
    }
    public function deletevoyage($id) {
        $sql="delete  from voyage where id= '$id' ";
        $db=config::getConnexion();
        $query=$db->prepare($sql);
        $query->execute([
                'id' => $id]);
        }
	function supprimervoyage($id)
	{
		$sql = "DELETE FROM voyage WHERE id= :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	public function modifiervoyage($destination,$prix,$depart,$retour,$email,$login,$password,$id) {
		$sql="update voyage SET 
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
	function recuperervoyage($id)
	{
		$sql = "SELECT * from voyage where id=$id";
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

	function recuperervoyage1($id)
	{
		$sql = "SELECT * from voyage where id=$id";
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
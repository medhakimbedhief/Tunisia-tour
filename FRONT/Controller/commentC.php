<?php
include_once "config.php" ;
class commentC{
        public function affichercommentbyid($id) {
           
            try{
                $result=NULL;
                $pdo=config::getConnexion();
                $query= $pdo ->prepare(
                    "select * from commentaire as c where c.id_b=$id"
                );
                $query->execute();
                return $query->fetchAll();
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        }
        public function affichercomment() {
           
            try{
                $result=NULL;
                $pdo=config::getConnexion();
                $query= $pdo ->prepare(
                    "select * from commentaire "
                );
                $query->execute();
                return $query->fetchAll();
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        }
        public function ajoutercomment($comment) {
    $sql="insert into commentaire(text,nom_u,id_b) values(:text,:nom_u,:id_b)";
    $db=config::getConnexion();
    $query=$db->prepare($sql);
    $query->execute([
                    'text' => $comment->gettext(),
                    'nom_u' => $comment->getlogin(),
                    'id_b' => $comment->getblog(),
				]); 
        }
        public function deletecomment($id)
{
    $sql="delete from commentaire where id = :id";
    $db=config::getConnexion();
    $query=$db->prepare($sql);
    $query->execute(['id' => $id]);
}
        }
?>
<?php
include_once "config.php" ;
class commentC{
    public function neutre()
    {
        try{
            $pdo=config::getConnexion();
            $sql="SELECT COUNT(*) FROM commentaire WHERE text NOT LIKE '%joli%' OR text NOT LIKE '%bon%' OR text NOT LIKE '%great%' OR text NOT LIKE '%bad%' OR text NOT LIKE '%mauvais%' OR text NOT LIKE '%worst%' ";
            $query=$pdo->prepare($sql);
            $query->execute();
            return $query->fetchColumn();
        }
        catch(PDOException $e){
            $e->getMessage();
        }
    }
    public function afficher_positives()
    {
        try{
            $pdo=config::getConnexion();
            $sql="SELECT * FROM commentaire WHERE text LIKE '%joli%' OR text LIKE '%bon%' OR text LIKE '%great%'";
            $query=$pdo->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        catch(PDOException $e){
            $e->getMessage();
        }
    }
    public function positives()
    {
        try{
            $pdo=config::getConnexion();
            $sql="SELECT COUNT(*) FROM commentaire WHERE text LIKE '%joli%' OR text LIKE '%bon%' OR text LIKE '%great%'";
            $query=$pdo->prepare($sql);
            $query->execute();
            return $query->fetchColumn();
        }
        catch(PDOException $e){
            $e->getMessage();
        }
    }
    public function negatives()
    {
        try{
            $pdo=config::getConnexion();
            $sql="SELECT COUNT(*) FROM commentaire WHERE text LIKE '%bad%' OR text LIKE '%mauvais%' OR text LIKE '%worst%'";
            $query=$pdo->prepare($sql);
            $query->execute();
            return $query->fetchColumn();
        }
        catch(PDOException $e){
            $e->getMessage();
        }
    }
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
<?php
include_once "config.php" ;
class blogC{
   

    public function afficherblog() {
        try{
            $result=NULL;
            $pdo=config::getConnexion();
            $query= $pdo ->prepare(
                'SELECT * FROM blog'
            );
            $query->execute();
            return $query->fetchAll();
        }
        catch(PDOException $e){
            $e->getMessage();
        }
    }
    public function ajouterblog($blog) {
    try {
    $sql="insert into blog(titre,article,image) values(:titre,:article,:image)";
    $db=config::getConnexion();
    $query=$db->prepare($sql);
    $query->execute([
					'titre' => $blog->gettitre(),
                    'article' => $blog->getarticle(),
                    'image' => $blog->getimage(),
                ]); }
                catch (PDOException $e) {
                    $e->getMessage();
                }
        }
        public function getAlbumById($id) {
            try {
                $pdo =config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM blog WHERE id = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function updateAlbum($blog, $id) {
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE blog SET 
                            titre = :titre, 
                            article = :prearticlenom,
                            image = :image,
                        WHERE id = :id'
                );
                $query->execute([
                    'titre' => $blog->gettitre(),
                    'article' => $blog->getarticle(),
                    'image' => $blog->getimage(),
                    'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function modifierblog($titre,$article,$image,$id) {
            $sql="update blog SET 
                                titre = :titre,
                                article = :article, 
                                image = :image
                            WHERE id = :id";
            $db=config::getConnexion(); 
            $query=$db->prepare($sql);
            $query->execute([
                            'titre' => $titre,
                            'article' => $article,
                            'image' => $image,
                            'id' => $id,
                        ]); 
            }
        public function deleteblog($id)
{
    $sql="delete from blog where id = :id";
    $db=config::getConnexion();
    $query=$db->prepare($sql);
    $query->execute(['id' => $id]);
}    }
        ?>
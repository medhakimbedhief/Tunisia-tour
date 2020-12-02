<?php
    class blog {
        private $id;
        private ?string $titre=null;
        private ?string $article=null;
        private ?string $image=null;

        public function __construct(string  $titre, string $article, string $image) {

            $this->titre= $titre;
            $this->article= $article;
            $this->image= $image;
            
        }
        public function getId() {
            return $this->id;
        }
        public function gettitre (){
            return $this->titre;
        }

        public function settitre (string $titre) {
            $this->titre = $titre;
        }

        public function getarticle (){
            return $this->article;
        }

        public function setarticle (string $article) {
            $this->article = $article ;
        }
        public function getimage (){
            return $this->image;
        }
        public function setimage (string $image) {
            $this->image = $image;
        }
    }
<?php
    class comment{
        private $id;
        private ?string $text=null;
        private ?string $id_b=null;
        private ?string $login=null;

        public function __construct(string  $text,string $id_b ,string $login) {

            $this->text= $text;
            $this->login= $login;
            $this->id_b=$id_b;

        }
        public function getId() {
            return $this->id;
        }
        public function gettext (){
            return $this->text;
        }

        public function settext (string $text) {
            $this->text = $text;
        }

        public function getlogin (){
            return $this->login;
        }

        public function setlogin (string $login) {
            $this->login = $login ;
        }
        public function getblog(){
            return $this->id_b;
        }
        public function setblog(string $id_b) {
            $this->id_b=$id_b;
        }
    }
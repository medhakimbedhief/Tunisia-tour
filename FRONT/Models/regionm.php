<?PHP
	class region{
		private  $id ;
		private  $nom=null;
		private  $description = null;
		
		private  $photo = null ;
		
		
		
	
		
		function __construct(  $nom,$description,$photo){
			
			$this->nom=$nom;
			$this->description=$description;
			
			$this->photo=$photo;
		}
		
		function getId() {
			return $this->id;
		}
		function getnom() {
			return $this->nom;
		}
		function getdescription() {
			return $this->description;
		}
		
		function getphoto() {
			return $this->photo;
		}
		function setnom(string $nom){
			$this->nom=$nom;
		}
		function setdescription(string $description){
			$this->description;
		}
		
		function setphoto(string $photo){
			$this->photo=$photo;
		}
		
	}
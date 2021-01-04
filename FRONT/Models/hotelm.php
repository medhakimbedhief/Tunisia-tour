<?PHP
	class hotel{
		private  $id ;
		private  $nom=null;
		private  $options = null;
		private  $depart = null ;
		private  $retour = null ;
		private  $etoiles = null ;
		
		
		
	
		
		function __construct(  $nom,$options, $depart,$retour,$etoiles){
			
			$this->nom=$nom;
			$this->options=$options;
			$this->depart=$depart;
			$this->retour=$retour;
			$this->etoiles=$etoiles;
		}
		
		function getId() {
			return $this->id;
		}
		function getnom() {
			return $this->nom;
		}
		function getoptions() {
			return $this->options;
		}
		function getdepart() {
			return $this->depart;
		}
		function getretour() {
			return $this->retour;
		}
		function getetoiles() {
			return $this->etoiles;
		}
		function setnom(string $nom){
			$this->nom=$nom;
		}
		function setoptions(float $options){
			$this->options;
		}
		function setdepart(string $depart){
			$this->depart=$depart;
		}
		function setretour(string $retour){
			$this->retour=$retour;
		}
		function setetoiles(string $etoiles){
			$this->etoiles=$etoiles;
		}
		
	}






<?PHP
	class voyage{
		private  $id ;
		private  $destination=null;
		private  $prix = null;
		private  $depart = null ;
		private  $retour = null ;
		
		
	
		
		function __construct(  $destination,$prix, $depart,$retour){
			
			$this->destination=$destination;
			$this->prix=$prix;
			$this->depart=$depart;
			$this->retour=$retour;
		}
		
		function getId() {
			return $this->id;
		}
		function getdestination() {
			return $this->destination;
		}
		function getprix() {
			return $this->prix;
		}
		function getdepart() {
			return $this->depart;
		}
		function getretour() {
			return $this->retour;
		}
		function setdestination(string $destination){
			$this->destination=$destination;
		}
		function setprix(floatval $prix){
			$this->prix;
		}
		function setdepart(date $depart){
			$this->depart=$depart;
		}
		function setretour(date $retour){
			$this->retour=$retour;
		}
		
	}
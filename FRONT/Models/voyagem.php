<?PHP
	class voyages{
		private  $id ;
		private  $destination=null;
		private  $prix = null;
		private  $depart = null ;
		private  $retour = null ;
		private  $image = null ;
		private  $recherche = null;
		
		
	
		
		function __construct(  $destination,$prix, $depart,$retour,$image){
			
			$this->destination=$destination;
			$this->prix=$prix;
			$this->depart=$depart;
			$this->retour=$retour;
			$this->image=$image;
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
		function getimage() {
			return $this->image;
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
		function setimage(string $image){
			$this->image=$image;
		}
		
	}
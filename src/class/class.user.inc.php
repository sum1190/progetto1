<?PHP
//Includo la classe database
include_once("class.database.inc.php");
class suser{
		private $db;
		private $iduser;
		private $user;
		private $password;
		private $islogged;
	
		public function __construct($us,$pas){
						$this->db = new database();
						$this->set_user($us);
						$this->set_password($pas);
						$this->set_islogged(false);
		}
		
		public function __destructor(){
					unset($this->db);
					unset($this->user);
					unset($this->password);
					unset($this->islogged);
			}
			
		//GET
		public function get_user(){
					return $this->user;
		}
		public function get_password(){
					return $this->password;
		}
		public function get_islogged(){
					return $this->islogged;
		}
		public function get_iduser(){
					return $this->iduser;
		}
		//SET
		public function set_user($v){
					$this->user=$v;
		}
		public function set_password($v){
					$this->password=$v;
		}
		public function set_islogged($v){
					$this->islogged=$v;
		}
		private function set_iduser($v){
					$this->iduser = $v;
		}
		
		//MAKE
		//Questa funzione restituisce true se l'utente è registrato altrimenti false. 
		public function makelogin(){
					//Prelevo i dati salvati nelle proprietà della classe tramite i relativi metodi
					$us=$this->get_user();
					$ps=$this->get_password();
					//Metto nella stringa la query SQL
					$qr="SELECT * FROM users WHERE username=? and password=? LIMIT 1";
					//Eseguo la query tramite un metodo della classe database
					$this->db->exec_query($qr,array($us,$ps));
					//controllo che l'utente esiste tramite il metodo della classe database
					//che restituisce il numero di righe della query, quindi in questo caso
					//se è 1 significa che è stato trovato e quindi continuo ricavando i dati che mi servivano
					//e ritorno true, altrimenti false.
					if($this->db->qry_size()==1){
						$res=$this->db->get_qry_rows();
						//setta user id 
						$this->set_islogged(true);
						//setta islogged a true
						$iu=$res[0]['iduser'];
						$this->set_iduser($iu);
						return true;
					}
					return false;		
		}
}
?>

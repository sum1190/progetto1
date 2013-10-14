<?PHP

class database{
	private $db;		//PDO
	private $qry;		//risultato della query
	
	
	
	//Costruttore , si connette al database con i dati 
	//che si trovano nel file config.php e istanzia la classe PDO
	public function __construct($d = NULL){
		if(is_object($d)){
			$this->set_db($d);
		}else{
				$url="127.0.0.1";
				$dbname="dbschoolproject";
				$dbus="root";
				$dbpas="";
				//$dsn = "mysql:host=".DB_URL.";dbname=".DB_NAME;
				$dsn="mysql:host=".$url.";dbname=".$dbname;
				try{
					//$this->db = new PDO($dsn, DB_USER, DB_PASS);
					$p = new PDO($dsn,$dbus,$dbpas);
					$this->set_db($p);
				}
				catch(PDOException $e){
					echo 'ATTENZIONE: '.$e->getMessage();
				}
			}		
	}
	
	private function set_db($p){
		$this->db=$p;
	}
	
	//Prende in input la query sql ed un array di parametri da passare
	//alla query, e la esegue
	public function exec_query($sql,$param){
		//if($this->qry = $this->db->prepare($sql)){
		if($this->qry = $this->get_dbquery($sql)){ 
			if(is_array($param)){
				$this->qry->execute($param);
			}
			$this->qry->execute();					//eseguo la query salvando il risultato nella variabile qry della classe database
		} 
	}
	
	
	public function get_qry(){
		return $this->qry;
	}
	
	//Restituisce il numero di righe del risultato di una query
	public function qry_size(){
		/*
		if(!$this->db){
				return 0;
		}*/
		return $this->qry->rowCount();
	}
	
	//Ritorna un array contenente tutte le righe risultanti di una query
	public function get_qry_rows(){
		return $this->qry->fetchAll();
	}
	
	//Prepare l'esecuzione di una query
	private function get_dbquery($sql){
		return $this->db->prepare($sql);
	}
	
	//Quoting di una stringa
	private function quoting($sql){
			$this->qry = $this->db->quote($sql);
	}

	//Binding di una query con dei parametri
	//Associa i valori nel vettore param ai ? presenti nella query salvata in qry 
	//(qry è una proprietà della classe medesima)
	private function binding($param){
		for($i = 1 ; $i < count($param); $i++){
			$this->qry=bindParam($i,$param[$i]);
		}
	}








}






?>
<?PHP
	//Fase di LOGIN
	function is_login_id($id_user){
		$_SESSION['id_user']=$id_user;
	}
	
	function is_login_us($us){
		$_SESSION['user']=$us;
	}

	
	//Fase di controllo
	function islogged_user(){
		if(is_string($_SESSION['user'])==1){
			return 1;//è una stringa
        }
		else{
			return 0;//non è una stringa
		}
	}
	

?>
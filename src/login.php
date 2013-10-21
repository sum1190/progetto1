<?PHP
	session_start();
	//Include la classe del file class.user.inc-php che si chiama suser
	include_once("./class/class.user.inc.php");   
	include_once("ses.php");
	//preleva i dati dalla pagina di login e controllo se sono stati inseriti i dati
	if(!empty($_POST['tUser']) && !empty($_POST['tPassw']))
	{
		//prelevo user e password inseriti nel input type
		$userc=$_POST['tUser'];
		$passc=$_POST['tPassw'];
		//Creo l'oggetto utente
		$o = new suser($userc,$passc);   
		//Metto nella variabile contr il risultato del metodo 
		//della classe,che ritorna true se l'utente è registrato e quindi 
		//è presente nella tabella, altrimenti false.
		$contr = $o->makelogin();
	    //
		if($contr){
			//echo "Hai effettuato il login   -> iduser: ".$o->get_iduser()." ".$o->get_user();
			is_login_id($o->get_iduser());
			is_login_us($o->get_user());
			header("Location:../logged.php");
		}
		else{
			header("Location: ../index.php");	
		}
	}//Caso in cui l'utente ha lasciato 1 o tutti e due cambi bianchi
	else{
			echo ("Non hai inserito un dato");
			echo ('User o Password sbagliate');
			header("Location: ../index.php");
		}
?>

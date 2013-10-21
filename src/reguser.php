<?PHP
	//Da finire ... 
	//Manca il controllo sulla sessione cioè se è gia loggato e in caso fare il logout
	//il controllo dei campi di conferma,
	//Aumento della sicurezza di inserimento dati

	include_once("./class/class.database.inc.php");
	//Controllo sui dati inseriti 
	$cont=0;
	if(!$us=$_POST['tnUser']){
		$cont=$cont+1;
	}
	if(!$us=$_POST['tnPass']){
		$cont=$cont+2;
	}
	if(!$us=$_POST['tnEmail']){
		$cont=$cont+4;
	}
	switch($cont){
		case 1: echo "Non hai inserito l'user... \n";break;
		case 2: echo "Non hai inserito la password...\n";break;
		case 3: echo "Non hai inserito l'user... \n"; echo "Non hai inserito la password...\n";break;
		case 4: echo "Non hai inserito l'Email...\n";break;
		case 5:echo "Non hai inserito l'user... \n";echo "Non hai inserito l'Email...\n";break;
		case 6:echo "Non hai inserito la password...\n";echo "Non hai inserito l'Email...\n";break;
		case 7:echo "Non hai riempito nessun campo...\n";break;
	}
	if($cont!=0){
		?><a href="../index.php">Torna alla pagina di registrazione</a>;<?PHP
	}
	else{
		//Prelevo i dati dalla pagina registerForm.php
		$us=$_POST['tnUser'];
		$ps=$_POST['tnPass'];
		$em=$_POST['tnEmail'];
		//Controllo se l'user è già presente
		$o = new database();
		$qsql="SELECT username FROM users WHERE username=? LIMIT 1";
		$o->exec_query($qsql,array($us));
		$n=$o->qry_size();
		if($n==0){
			echo "User inesistente...";
			//Inserisco i dati nella tabella
			$qsql1="INSERT INTO `users`(`username`, `password`, `islogged`, `ft`) VALUES (?,?,?,?)";
			$o->exec_query($qsql1,array($us,$ps,0,$em));
			echo "Ora sei registrato... ";
			//reindirizzo alla pagina di login 
			//Codice HTML per visualizzare il link e riportare alla pagina di login
			?><a href="../index.php">Effettua il login</a>;<?PHP		
		}
		else if($n==1){
				echo "User già esistente...";
				//header("Location: ../index.php");
			}
			else{
					echo "Errore...";
				}
	}
			
/*
tnUser
tnPass
tnEmail
*/
?>
<<<<<<< HEAD
<?PHP
	//Include la classe del file class.user.inc-php che si chiama suser
	include_once("./class/class.user.inc.php");      				 
	//preleva i dati dalla pagina di login e controllo se sono stati inseriti i dati
=======
<?php
	
	$u='davide';
	$p='password';
	echo "ciao";
	//preleva i dati dalla pagina di login
>>>>>>> 39906c68774dbf12b33177ef13e03a2704bddb4b
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
			echo "Hai effettuato il login   -> iduser: ".$o->get_iduser();
		}
		else{
<<<<<<< HEAD
			header("Location: ../index.php");	
		}
	}//Caso in cui l'utente ha lasciato 1 o tutti e due cambi bianchi
	else{
			echo ("Non hai inserito un dato");
			//header("Location: index.php");
=======
				//<h1>User o Password sbagliate</h1>
				echo ('User o Password sbagliate');
				header("Location: ../index.php");
			}
		
	}
	else
	{
			//<h1>Non hai inserito un dato</h1>
			echo "Non hai inserito un dato";
			header("Location: ../index.php");
>>>>>>> 39906c68774dbf12b33177ef13e03a2704bddb4b
	}
	
		/*Esempio di codice
		$url="127.0.0.1";
		$dbname="dbschoolproject";
		$dbus="root";
		$dbpas="";
		$dsn="mysql:host=".$url.";dbname=".$dbname;	
		$db=new PDO($dsn,$dbus,$dbpas);
		$sql="SELECT * FROM users";
		$qr=$db->prepare($sql);
		$qr->execute();
		// creazione di un array dei risultati 
		$res = $qr->fetchAll();
		// visualizzazione dei risultati 
		print_r($res);
		*/	
?>

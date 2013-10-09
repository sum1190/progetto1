<?php
	
	$u='davide';
	$p='password';
	echo "ciao";
	//preleva i dati dalla pagina di login
	if(!empty($_POST['tUser']) && !empty($_POST['tPassw']))
	{
		$user=$_POST['tUser'];
		$pass=$_POST['tPassw'];
		if(strcmp($user,$u)==0 && strcmp($pass,$p)==0)
		{
			//<h1>Hai effettuato il login</h1>
			echo "Hai effettuato il login";
		}
		else{
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
	}
	
	//Avvio la sessione
	//session_start();
	//Connette al DB


?>

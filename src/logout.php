<?PHP
	//ripristino sessione e successiva distruzione
	session_start();	
	session_destroy();
	
	//reindirizzamento all'index
	header("Location: ../index.php");
?>

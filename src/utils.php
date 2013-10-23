<?PHP
	//FUNZIONI UTILI
	function info(){
		echo "<br><h1>Per informazioni o assistenza contattarci alle e-mail: \n giocus@hotmail.it </h1>";
	}
	
	//Switch del corpo della pagina
	function controllo($valore_pagina){
		switch($_GET['action'])
		{
			case 'info':	info();		break;
			default:
                echo '';
		}	
	}
	
	
	//Crea dinamicamente il bottore scuola
	function scuole(){
		
	
	}
	
	
	
	

?>
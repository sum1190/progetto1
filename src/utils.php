<?PHP
	include_once("./src/class/class.database.inc.php");
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
	function scuole($id){
		$o = new database();
		//Prendo il numero di laboratori per scuola 
		$qsql1="SELECT nomescuola, count( idlab ) FROM scuola, regist, laboratori WHERE regist.iduser =".$id." AND scuola.idistituto = regist.idistituto AND scuola.idistituto = laboratori.idistituto GROUP BY nomescuola";
		$o->exec_query($qsql1,array());
		$num_lab=$o->qry_size();
		$vet_num_lab=$o->get_qry_rows();
	
	
		
		//$qsql="SELECT nomescuola, idlab FROM scuola, regist, laboratori WHERE regist.iduser =".$id." AND scuola.idistituto = regist.idistituto AND scuola.idistituto = laboratori.idistituto";
		$qsql="SELECT nomescuola, pc.idlab ,nomepc FROM scuola, regist, laboratori ,pc WHERE regist.iduser =14 AND scuola.idistituto = regist.idistituto AND scuola.idistituto = laboratori.idistituto AND pc.idlab = laboratori.idlab";
		$o->exec_query($qsql,array());
		$n=$o->qry_size();
		if($n!=0){
			$rw=$o->get_qry_rows();
			//echo "".$n." ";
			//print_r($rw);
			
			for($i = 0; $i<$num_lab; $i++){
				$cont=0;
				echo "<li>";
					echo "<a>".$vet_num_lab[$i][0]."</a>";		//Stampa scuola
					//campi dei lab
						echo"<ul>";
							for($j=0; $j<$n && $cont<$vet_num_lab[$i][1]; $j++){
								if(strcmp($vet_num_lab[$i][0],$rw[$j][0])==0){
									echo "<li><a>".$rw[$j][1]."</a></li>";		//stampo il laboratorio
									$cont++;
								}
							}
						echo"</ul>";
				echo "</li>";
				//campi dei pc
			}
		}
	}
	
	
	
	

?>
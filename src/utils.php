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
			case 'info':	//Stampa le informazioni del sito 
							info();		break;
			
			case 'pc'  :	//Stampa le informazioni su un determinato pc
							$npc=$_GET['npc'];
							if($npc){
								//controllo se il pc esiste e appartiene all'utente
								$o = new database();
								//Labb32_pc1
								$qsql="select * from pc,laboratori where nomepc='".$npc."' and pc.idlab=laboratori.idlab and laboratori.iduser=".$_SESSION['id_user']."; ";
								$o->exec_query($qsql,array());
								$nr=$o->qry_size();
								$qr=$o->get_qry_rows();
								//stampo le informazioni sul pc selezionato
								
								if($nr>0){
									print_r($qr);
								}
							}			
							break;
			default:
                echo '';
		}	
	}
	
	
	
	
	
	
	
	
	
	//Crea dinamicamente il bottore scuola.
	//Dato l'id dell'utente restituisce i dati relativi alle scuole , laboratori e pc 
	//di cui è responsabile.
	function scuole($id){
		$o = new database();
		//Prendo il numero di laboratori per scuola 
		$qsql1="SELECT nomescuola, count( idlab ) FROM scuola, regist, laboratori WHERE regist.iduser =".$id." AND scuola.idistituto = regist.idistituto AND scuola.idistituto = laboratori.idistituto GROUP BY nomescuola";
		$o->exec_query($qsql1,array());
		$num_lab=$o->qry_size();
		$vet_num_lab=$o->get_qry_rows();
		//$qsql="SELECT nomescuola, idlab FROM scuola, regist, laboratori WHERE regist.iduser =".$id." AND scuola.idistituto = regist.idistituto AND scuola.idistituto = laboratori.idistituto";
		//$qsql="SELECT nomescuola, pc.idlab ,nomepc FROM scuola, regist, laboratori ,pc WHERE regist.iduser =".$id." AND scuola.idistituto = regist.idistituto AND scuola.idistituto = laboratori.idistituto AND pc.idlab = laboratori.idlab";
		$qsql="SELECT nomescuola, pc.idlab, nomepc FROM scuola, regist, laboratori, pc WHERE regist.iduser =".$id." AND scuola.idistituto = regist.idistituto AND scuola.idistituto = laboratori.idistituto AND pc.idlab = laboratori.idlab AND laboratori.iduser=".$id."";
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
					//print_r($rw);
						echo"<ul>";
							for($j=0; $j<$n && $cont<$vet_num_lab[$i][1]; $j++){
								if(strcmp($vet_num_lab[$i][0],$rw[$j][0])==0){
									echo "<li><a>".$rw[$j][1]."</a>";		//stampo il laboratorio
									$cont++;
									//Stampa dei pc
									echo"<ul>";
									for($z=0; $z<$n; $z++){//echo"<li><a>pc1</a>";
										if(strcmp($rw[$j][1],$rw[$z][1])==0){
											echo " <li><a href=\"logged.php?action=pc&npc=".$rw[$z][2]." \" >".$rw[$z][2]."</a></li>";		//stampo il pc
										}
									}
									echo"</ul>";
									echo"</li>";
								}
							}
						echo"</ul>";
				echo "</li>";
				//campi dei pc
			}
		}
	}
	
	
	
	

?>
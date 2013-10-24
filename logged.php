<?PHP
	session_start();
	include('./src/ses.php');
	include('./src/utils.php');
	//se non è loggato torna al form e lo script termina
	if(islogged_user()==0){//verifico che non sono stati messi dati su session
         header("Location: index.php");
    }
	
?>
<html>
<head>
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	<script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="./js/jquery-ui.js"></script>

	<script language="javascript" type="text/javascript" src="js/nav2.1.js"></script>

	<link rel="stylesheet" href="./css/main.css" type="text/css"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" />
	
<script language="javascript" type="text/javascript">
    		$(document).ready(function(){
				$("#JqueryMenu2").navPlugin({
					'itemWidth': 150,
					'itemHeight': 30,
					'navEffect': "fade",
					'speed': 500
				});

			});
</script>

	
	<title>School Project - Utente Loggato</title>
</head>	

<body>

	<div id="header">
		<img src="./img/logo.png" alt="logo" width="80" height="80" style="float:left;" />
		<h1 align="center" id="headertext" >School Project</h1>
	</div>
	
		<div id="mainMenu">
	
	<!-- First, write your HTML -->
        <ul id="JqueryMenu2">
            <li>
                <a href="logged.php">Home</a>
            </li>

            <li>
                <a>Scuole</a>
                <ul>
						<?PHP scuole($_SESSION['id_user']);?>
						
                </ul>
            </li>

            <li>
                <a>Strumenti</a>
                <ul>
                    <li>
                        <a>Aggiungi</a>
                        <ul>
                            <li><a>Scuola</a></li>
                            <li><a>Laboratorio</a></li>
                            <li><a>PC</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>Modifica</a>
                        <ul>
                            <li><a>Category 3.3</a></li>
                            <li><a>Category 3.3</a></li>
                        </ul>
                    </li>
                    <li><a>Rimuovi</a></li>
                    <li><a>Profilo</a></li>
                </ul>
            </li>
			
			<li>
				<a href="logged.php?action=info">Info</a>
			</li>
			
            <li><a href="./src/logout.php"><img style="padding-right:5px;"src="./img/lo.png"></img>LOGOUT</a></li>
        </ul>
	</div>
	
	<div id="loggedcol">
	
		<?PHP
		//include('./src/utils.php');
		if(isset($_GET['action'])){ 
			controllo($_GET['action']);
		}
		?>
	</div>
	
	
</body>
</html>

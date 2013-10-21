<?PHP
	session_start();
	include('./src/ses.php');
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
	<script type="text/javascript" src="./js/jMenu.jquery.js"></script>
	
	<link rel="stylesheet" href="./css/jmenu.css" type="text/css"/>	
	<link rel="stylesheet" href="./css/main.css" type="text/css"/>
	
	<script>
	  $(document).ready(function(){
    // more complex jMenu plugin called
    $("#jMenu").jMenu({
      ulWidth : 'auto',
      effects : {
        effectSpeedOpen : 500,
        effectTypeClose : 'fade'
      },
      animatedText : false
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
        <ul id="jMenu">
            <li>
                <a>Home</a>
            </li>

            <li>
                <a>Scuole</a>
                <ul>
                    <li>
                        <a>Scuola1</a>
                        <ul>
                            <li><a>Gruppo Lavoro1</a>
                            <ul>
								<li><a>PC1.1</a></li>
								<li><a>PC1.2</a></li>
                            </ul></li>
                            <li><a>Gruppo Lavoro2</a></li>
                        </ul>
                    </li>
                    <li>
						<a>Scuola 2</a>
						<ul>
							<li><a>Gruppo Lavoro 2.1</a></li>
							<li><a>Gruppo Lavoro 2.2</a></li>
						</ul>
					</li>
                </ul>
            </li>

            <li>
                <a>strumenti</a>
                <ul>
                    <li>
                        <a>Category 3.2</a>
                        <ul>
                            <li><a>Category 3.3</a></li>
                            <li><a>Category 3.3</a></li>
                            <li><a>Category 3.3</a></li>
                            <li><a>Category 3.3</a></li>
                            <li><a>Category 3.3</a></li>
                            <li><a>Category 3.3</a></li>
                            <li><a>Category 3.3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>Category 3.2</a>
                        <ul>
                            <li><a>Category 3.3</a></li>
                            <li><a>Category 3.3</a></li>
                        </ul>
                    </li>
                    <li><a>Category 3.2</a></li>
                    <li><a>Category 3.2</a></li>
                </ul>
            </li>
            <li><a href="./src/logout.php"><img style="padding-right:5px;"src="./img/lo.png"></img>logout</a></li>
        </ul>
	</div>
	
	<div id="loggedcol"></div>
	
	
</body>
</html>

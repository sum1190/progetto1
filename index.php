<!--
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
-->
<html>
<head>
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	<script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
	<link rel="stylesheet" href="./css/main.css" type="text/css"/>
<title>School Project Login</title>
</head>

<body>
	<div id="header">
		<img src="./img/logo.png" alt="logo" width="80" height="80" style="float:left;" />
		<h1 align="center" id="headertext" >School Project</h1>
	</div>
	
	<div id="leftcol"></div>
	
	<div id="maincol">
		<form name="login" method="post" id="inputform" action="./src/login.php" onsubmit="checkField()">
				<label id="lblinput" for="tUser">User:</label>
				<input type="text" value="" name="tUser" id="inputtext1" />
				
				<label id="lblinput" for="tPassw">Password:</label>
				<input type="password" value="" name="tPassw" id="inputtext2"/>
				
				<font id="regfont" onclick="registerUser()">Registrati</font>
				<input type="submit" value="Accedi" name="sub" id="subinputbtn"/>
			
			<script type="text/javascript" src="./js/jsmain.js"></script>
		</form>
	</div>
</body>
</html>

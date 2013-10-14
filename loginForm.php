<form name="login" method="post" id="inputform" action="./src/login.php" onsubmit="checkField()">
				<label id="lblinput" for="tUser">User:</label>
				<input type="text" value="" name="tUser" id="inputtext1" />
				
				<label id="lblinput" for="tPassw">Password:</label>
				<input type="password" value="" name="tPassw" id="inputtext2"/>
				
				<font id="regfont" onclick="registerUser()">Registrati</font>
				<input type="submit" value="Accedi" name="sub" id="subinputbtn"/>
</form>

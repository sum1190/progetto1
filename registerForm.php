<form id="registrationForm">
	<label id="lblinput"><strong>Registrazione utente</strong></label>
	<br>
	<label id="lblinput" for="tnUser">Nome utente: </label>
	<input type="text" name="tnUser" id="inputtextuser"/> 
	
	<label id="lblinput" for="tnPass">Password: </label>
	<input type="password" name="tnPass" id="inputtextpass"/> 
	
	<label id="lblinput" for="tnCPass">Conferma password: </label>
	<input type="password" name="tnCPass" id="inputtextpass1" onKeyUp="checkPass()"/> 
	
	<label id="lblinput" for="tnEmail">E-mail: </label>
	<input type="text" name="tnEmail" id="inputtextemail" onKeyUp="validateMail()"/> 
	
	<label id="lblinput" for="tnCEmail">Conferma E-mail: </label>
	<input type="text" name="tnCEmail" id="inputtextemail1" onKeyUp="validateMail()"/> 
</form>

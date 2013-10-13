<form id="registrationForm">
	<label id="lblinput"><strong>Registrazione utente</strong></label>
	<br>
	<label id="lblinput" for="tnUser">Nome utente: </label>
	<input type="text" name="tnUser" id="inputtextuser"/> 
	
	<label id="lblinput" for="tnPass">Password: </label>
	<input type="password" name="tnPass" id="inputtextpass"/> 
	
	<label id="lblinput" for="tnCPass">Conferma password: </label>
	<input type="password" name="tnCPass" id="inputtextpass1"/> 
	
	<label id="lblinput" for="tnEmail">E-mail: </label>
	<input type="text" name="tnEmail" id="inputtextemail" onKeyUp="validateMail()"/> 
	
	<label id="lblinput" for="tnCEmail">Conferma E-mail: </label>
	<input type="text" name="tnCEmail" id="inputtextemail1"/> 
</form>

<script>
	function validateMail()
	{
		var mailctrl = document.getElementById('inputtextemail');
		var regCheck = new RegExp("[a-zA-Z0-9-\w\.]+\@[a-z0-9]+\.[a-z]+","g");
		
		if(regCheck.test(mailctrl.value))
			mailctrl.style.color = "green";
		else
			mailctrl.style.color = "#FF0600";
	}
</script>

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

<script>	
	function validateMail()
	{
		//control to be checked
		var mailctrl = document.getElementById('inputtextemail');
		var cmailctrl = document.getElementById('inputtextemail1');
		
		//regular expression used to match emails
		var regCheck = new RegExp("[a-zA-Z0-9-]{1,}@([a-zA-Z\.])?[a-zA-Z.]{1,}\.[a-zA-Z]{2,4}","g");
		
		if(regCheck.test(mailctrl.value))
		{
			mailctrl.style.color = "green";
			
			if(cmailctrl.value == mailctrl.value)
				cmailctrl.style.color="green";
		}
		else
		{
			mailctrl.style.color = "red";
			cmailctrl.style.color = "red";
		}
	}
	
	function checkPass()
	{
		var pass = document.getElementById('inputtextpass');
		var cPass = document.getElementById('inputtextpass1');
		
		if(cPass.value == pass.value)
			cPass.style.color = "green";
		else
			cPass.style.color = "red";
	}
</script>

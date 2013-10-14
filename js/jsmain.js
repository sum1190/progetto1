$("maincol").ready(function showLogin()
{
$("#maincol").load("loginForm.php");
$("#inputform").hide();
$("#inputform").fadeIn(1000);			
});
				
function checkField()
{
	var u=$("#inputtext1").val();
	var p=$("#inputtext2").val();
				
	if((u==null || u=="") && (p==null || p==""))
	{
		alert("No user or password provided");
		return false;
	}
	else if(u==null || u=="")
	{
		alert("No user provided");
		return false;
	}
	else if(p==null || p=="")
	{
		alert("No password provided");
		return false;
	}
}
				
function registerUser()
{
	//remove login form
	$("#inputform").remove();
	$(document).ready(function(){
	$("#maincol").load("registerForm.php");
	});
}

function validateMail()
{
	//control to be checked
	var mailctrl = document.getElementById('inputtextemail');
	var cmailctrl = document.getElementById('inputtextemail1');
	var valid = false;
	//regular expression used to match emails
	var regCheck = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?","g");
	
	if(regCheck.test(mailctrl.value))
	{
		
		mailctrl.style.color = "green";
		valid=true;
		if(cmailctrl.value == mailctrl.value && valid)
			cmailctrl.style.color="green";
		else
			cmailctrl.style.color="red";
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

function backToLogin() {
	$("#registrationForm").remove();
	$("#maincol").load("loginForm.php");
}


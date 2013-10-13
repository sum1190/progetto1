$("inputform").ready(function showLogin()
{
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
			
//TODO: check why the mail confirmation field doesn't change color -.-
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
		else
			cmailctrl.style.colo="red";
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
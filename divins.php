<!--
	This is the form used to insert new school in the database
-->
<br><br>
<div id="insschool">
	<form name="isch" action="post" style="width: 40%;border: 5px groove #7E92B3;border-radius:5px;padding:3px;	margin-top:100px;margin-left:250px;min-width:302px;">
		<label for="scname">Nome scuola</label>
		<input type="text" id="inputtext" name="schoolname" />
        <input type="submit" id="subinputbtn" value="Inserisci" style="float:none"/>
	</form>
</div>

<!--
	Form used to insert new lab in the db
-->
<div id="inslab">
<form name="ilab" action="post" style="width: 40%;border: 5px groove #7E92B3;border-radius:5px;padding:3px;	margin-top:100px;margin-left:250px;min-width:302px;">
<label for="slsc">SCUOLA</label>
<select name="slsc" style="min-width:200px;">
	<option>a</option>
	<option>b</option>
	<option>c</option>
</select>
<br>

<label for"nlab">Nome laboratorio: </label>
<input name="nlab" id="inputtext" type="text" />
<br>
    <input type="submit" value="Inserisci" id="subinputbtn" style="float:none" />
</form>
</div>
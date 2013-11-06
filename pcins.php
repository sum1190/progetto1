<div id="pcform" style="width:80%;z-top:100; margin-left:40px;">

<style>
*{position:relative; margin-top:10px; }
input{width: 30% !important}
/*select{width: auto;}*/
textarea{width: 100;}
label{font-weight:stronger;}
</style>

<form name="pcinsert" method="post" action="src/utils.php" >

<!-- PARTE SOFTWARE -->
<fieldset style="border: 5px groove #7E92B3;border-radius:5px;">
	<legend>Info pc</legend>
<label for="spnomepc">NOME PC</label>
<input id="inputtext1" name="spidpc" type="text"/>
<br>
<!-- -->
<label for="spidlab">GRUPPO DI LAVORO</label>
<!--
<input id="inputtext1" name="spidlab" type="text"/>
-->
<select name="sl1">
          <option selected>biennio</option>
          <option>media</option>
          <option>3o</option>
</select>

<br>

<!-- -->
<label for="sppassadmin">PASSWORD ADMINISTRATOR</label>
<input id="inputtext1" style="width: 100px;" name="sppassadmin" type="text"/>
<br>
<label for="sppassbios">PASSWORD BIOS</label>
<input id="inputtext1" name="sppassbios" type="text"/>
<br>

<!-- -->
<label for="spip">IP</label>
<input id="inputtext1" name="spip" type="text"/>
<br>
<label for="spmacaddress">MAC ADDRESS</label>
<input id="inputtext1" name="spmacaddress" type="text"/>
</fieldset>


<!--FIELDSET INVENTARIO -->
<fieldset style="border: 5px groove #7E92B3;border-radius:5px;">
<legend>Inventario</legend>
<label for="spinventario">N. INVENTARIO</label>
<input id="inputtext1" name="spinventario" type="text"/>
<br>
<!-- -->
<label for="spinventariomonitor">N. INVENTARIO MONITOR</label>
<input id="inputtext1" name="spinventariomonitor" type="text"/>
<br>
<!-- -->
<label for="spmotivazionescarico">MOTIVAZIONE SCARICO</label>
<input id="inputtext1" name="spmotivazionescarico" type="text"/>
<br>
</fieldset>

<!--FIELDSET SOFTWARE -->
<fieldset style="border: 5px groove #7E92B3;border-radius:5px;">
	<legend>SOFTWARE</legend>
<label for="spso">SISTEMA OPERATIVO</label>
<input id="inputtext1" name="spso" type="text"/>
<select name="sl2" onclick="cambiaVal(spso,sl2)">
          <option selected>Win7</option>
          <option>WinXp</option>
          <option>Linux</option>
</select>
<br>
<!-- -->
<label for="sppkwin">PRODUCT KEY WINDOWS</label>
<input id="inputtext1" name="sppkwin" type="text"/>
<br>
<!-- -->
<label for="sppkoffice">PRODUCT KEY OFFICE</label>
<input id="inputtext1" name="sppkoffice" type="text"/>
<br>

<!-- -->
<label for="spsoftinstall">SOFTWARE INSTALLATO</label>
<textarea id="inputtext1" name="spsoftinstall"/></textarea>
<br>

<!-- -->
<label for="spantivirus">ANTIVIRUS</label>
<input id="inputtext1" name="spantivirus" type="text"/>
<br>

<!-- -->
<label for="spbrowser">BROWSER</label>
<input id="inputtext1" name="spbrowser" type="text"/>
<br>
</fieldset>

<hr style="color:gray;background-color:blue;border:0;height:2px;margin:10px;">


<!-- PARTE HARDWARE -->
<!-- -->
<fieldset style="border: 5px groove #7E92B3;border-radius:5px;"> 
	<legend>HARDWARE</legend>
<label for="spprocessore">PROCESSORE</label>
<input id="inputtext1" name="spprocessore" type="text"/>
<select name="sl3" onclick="cambiaVal(spprocessore,sl3)">
          <option selected>Win7</option>
          <option>WinXp</option>
          <option>Linux</option>
</select>
<br>

<!-- -->
<label for="spschedamadre">SCHEDA MADRE</label>
<input id="inputtext1" name="spschedamadre" type="text"/>
<select name="sl4" onclick="cambiaVal(spschedamadre,sl3)">
          <option selected>Win7</option>
          <option>WinXp</option>
          <option>Linux</option>
</select>
<br>
<!-- -->
<label for="spram">RAM</label>
<input id="inputtext1" name="spram" type="text"/>
<select name="sl5" onclick="cambiaVal(spram,sl5)">
          <option selected>Win7</option>
          <option>WinXp</option>
          <option>Linux</option>
</select>
<br>

<!-- -->
<label for="spschedavideo">SCHEDA VIDEO</label>
<input id="inputtext1" name="spschedavideo" type="text"/>
<select name="sl6" onclick="cambiaVal(spschedavideo,sl6)">
          <option selected>Win7</option>
          <option>WinXp</option>
          <option>Linux</option>
</select>
<br>
<!-- -->
<label for="spharddisk">HARD DISK</label>
<input id="inputtext1" name="spharddisk" type="text"/>
<select name="sl7" onclick="cambiaVal(spharddisk,sl7)">
          <option selected>Win7</option>
          <option>WinXp</option>
          <option>Linux</option>
</select>
<br>

<label for="spdescrizionehd">DESCRIZIONE HARD-DISK</label>
<input id="inputtext1" name="spdescrizionehd" type="text" style="width:100%"/>
</fieldset>
<script >
	function cambiaVal(i,s)
	{
		i.value = s.value;
	}

</script>
</form>
<input type="submit" value="Inserisci" name="subpc" id="subinputbtn" style="float:left !important"/>
</div>

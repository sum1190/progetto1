<div id="pcform">

<style>
input{width: 100%}
select{width: 100%}
textarea{width: 100%}
</style>

<form name="pcinsert">

<!-- PARTE SOFTWARE -->
<label for="spnomepc">NOME PC</label>
<input name="spidpc" type="text"/>

<!-- -->
<label for="spidlab">GRUPPO DI LAVORO</label>
<input name="spidlab" type="text"/>
<select name="sl1" onclick="cambiaVal(spidlab,sl1)">
          <option selected>biennio</option>
          <option>media</option>
          <option>3o</option>
</select>
<br>
<!-- -->
<label for="sppassadmin">PASSWORD ADMINISTRATOR</label>
<input name="sppassadmin" type="text"/>
<br>
<!-- -->
<label for="spip">IP</label>
<input name="spip" type="text"/>
<br>
<!-- -->
<label for="spinventario">N. INVENTARIO</label>
<input name="spinventario" type="text"/>
<br>
<!-- -->
<label for="spinventariomonitor">N. INVENTARIO MONITOR</label>
<input name="spinventariomonitor" type="text"/>
<br>
<!-- -->
<label for="spmotivazionescarico">MOTIVAZIONE SCARICO</label>
<textarea name="spmotivazionescarico" value="" rows="4" cols="60"></textarea>
<br>
<!-- -->
<label for="spso">SISTEMA OPERATIVO</label>
<input name="spso" type="text"/>
<select name="sl2" onclick="cambiaVal(spso,sl2)">
          <option selected>Win7</option>
          <option>WinXp</option>
          <option>Linux</option>
</select>
<br>
<!-- -->
<label for="sppkwin">PRODUCT KEY WINDOWS</label>
<input name="sppkwin" type="text"/>
<br>
<!-- -->
<label for="sppkoffice">PRODUCT KEY OFFICE</label>
<input name="sppkoffice" type="text"/>
<br>

<!-- -->
<label for="spsoftinstall">SOFTWARE INSTALLATO</label>
<textarea name="spsoftinstall"/></textarea>
<br>

<!-- -->
<label for="spantivirus">ANTIVIRUS</label>
<input name="spantivirus" type="text"/>
<br>

<!-- -->
<label for="spbrowser">BROWSER</label>
<input name="spbrowser" type="text"/>
<br>

<hr style="color:gray;background-color:blue;border:0;height:2px;margin:10px;">
<!-- PARTE HARDWARE -->
<!-- -->
<label for="spprocessore">PROCESSORE</label>
<input name="spprocessore" type="text"/>
<select name="sl3" onclick="cambiaVal(spprocessore,sl3)">
          <option selected>Win7</option>
          <option>WinXp</option>
          <option>Linux</option>
</select>
<br>
<!-- -->
<label for="spschedamadre">SCHEDA MADRE</label>
<input name="spschedamadre" type="text"/>
<select name="sl4" onclick="cambiaVal(spschedamadre,sl3)">
          <option selected>Win7</option>
          <option>WinXp</option>
          <option>Linux</option>
</select>
<br>
<!-- -->
<label for="spram">RAM</label>
<input name="spram" type="text"/>
<select name="sl5" onclick="cambiaVal(spram,sl5)">
          <option selected>Win7</option>
          <option>WinXp</option>
          <option>Linux</option>
</select>
<br>
<!-- -->
<label for="spschedavideo">SCHEDA VIDEO</label>
<input name="spschedavideo" type="text"/>
<select name="sl6" onclick="cambiaVal(spschedavideo,sl6)">
          <option selected>Win7</option>
          <option>WinXp</option>
          <option>Linux</option>
</select>
<br>
<!-- -->
<label for="spharddisk">HARD DISK</label>
<input name="spharddisk" type="text"/>
<select name="sl7" onclick="cambiaVal(spharddisk,sl7)">
          <option selected>Win7</option>
          <option>WinXp</option>
          <option>Linux</option>
</select>
<br>

<label for="spdescrizionehd">DESCRIZIONE HARD-DISK</label>
<input name="spdescrizionehd" type="text"/>

<script >
	function cambiaVal(i,s)
	{
		i.value = s.value;
	}

</script>
</form>
</div>

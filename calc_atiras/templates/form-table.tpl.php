<head>
<link rel='stylesheet' type='text/css' href='../calc_css/calc.css'>
<link rel='stylesheet' type='text/css' href='css/atiras.css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/atiras.js"></script>
</head>

<body>
<div class='frame'>

<div class='title'>
<h1>Gépjármű átírás</h1>
</div>

<form name='calculator' method='post' class='calc-form'>

<input type='hidden' name='types' id='types' value='###types###'>

<div id='atiras'>

<div class='type'>
<select name='type' id='type'>
	###type-options###
</select>
</div>

<!--Személygépjármű-->
<div id='szemelygepjarmu' class='###visibility-szemelygepjarmu-class###'>
<h4>
Évjárat: 
<select name='sz_year' class='date'>
	###year-sz-options###
</select>
</h4>

<h4>
Teljesítmény: 
<input type='number' name='sz_teljesitmeny' class='date power' value='###sz_teljesitmeny###'>
<select name='sz_or' class='or'>
	###or-sz-options###
</select>
</h4>

<div class='error'>
<h3>###error###</h3>
</div>

<h4>
Hengerűrtartalom: 
<select name='sz_barrel' class='barrel'>
	###barrel-sz-options###
</select>
</h4>
</div>

<!--Motorkerékpár-->
<div id='motorkerekpar' class='###visibility-motorkerekpar-class###'>
<h4>
Évjárat: 
<select name='m_year' class='date'>
	###year-m-options###
</select>
</h4>

<h4>
Teljesítmény: 
<input type='number' name='m_teljesitmeny' class='date power' value='###m_teljesitmeny###'>
<select name='m_or' class='or'>
	###or-m-options###
</select>
</h4>

<div class='error'>
<h3>###error###</h3>
</div>

<h4>
Hengerűrtartalom: 
<select name='m_barrel' class='barrel'>
	###barrel-m-options###
</select>
</h4>
</div>

<!--Quad-->
<div id='quad' class='###visibility-quad-class###'>
<h4>
Évjárat: 
<select name='q_year' class='date'>
	###year-q-options###
</select>
</h4>

<h4>
Teljesítmény: 
<input type='number' name='q_teljesitmeny' class='date power' value='###q_teljesitmeny###'>
<select name='q_or' class='or'>
	###or-q-options###
</select>
</h4>

<div class='error'>
<h3>###error###</h3>
</div>
</div>

<!--Kisteherautó (3,5t össztömegig)-->
<div id='kisteherauto' class='###visibility-kisteherauto-class###'>
<h4>
Évjárat: 
<select name='k_year' class='date'>
	###year-k-options###
</select>
</h4>

<h4>
Teljesítmény: 
<input type='number' name='k_teljesitmeny' class='date power' value='###k_teljesitmeny###'>
<select name='k_or' class='or'>
	###or-k-options###
</select>
</h4>

<div class='error'>
<h3>###error###</h3>
</div>
</div>

<!--Tehergépkocsi-->
<div id='tehergepkocsi' class='###visibility-tehergepkocsi-class###'>
<h4>
Évjárat: 
<select name='t_year' class='date'>
	###year-t-options###
</select>
</h4>

<h4>
Teljesítmény: 
<input type='number' name='t_teljesitmeny' class='date power' value='###t_teljesitmeny###'>
<select name='t_or' class='or'>
	###or-t-options###
</select>
</h4>

<div class='error'>
<h3>###error###</h3>
</div>

<h4>
Össztömeg: 
<select name='tomeg' class='barrel'>
	###tomeg-options###
</select>
</h4>
</div>

<!--Autóbusz-->
<div id='autobusz' class='###visibility-autobusz-class###'>
<h4>
Évjárat: 
<select name='a_year' class='date'>
	###year-a-options###
</select>
</h4>

<h4>
Teljesítmény: 
<input type='number' name='a_teljesitmeny' class='date power' value='###a_teljesitmeny###'>
<select name='a_or' class='or'>
	###or-a-options###
</select>
</h4>

<div class='error'>
<h3>###error###</h3>
</div>

<h4>
Szállítható személyek száma: 
<select name='szem_szam' class='barrel'>
	###szem-szam-options###
</select>
</h4>
</div>

<!--Pótkocsi-->
<div id='potkocsi' class='###visibility-potkocsi-class###'>
<h4>
Össztömeg:
<select name='p_tomeg' class='barrel'>
	###tomeg-p-options###
</select>
</h4>

<h4>
Kategória:
<select name='kategoria' class='kategoria'>
	###kategoria-options###
</select>
</h4>
</div>

</div>

<div class='submit'>
<input type='hidden' value='submitted' name='submitted'>
<input type='submit' id='submit' value='Számol' class='form-submit'>
</div>

</form>

<div id='sum' class='###sum-visibility###'>	

<h3>Kiszámolt költségek</h3>

<table>
<tr>
<td class='title2'>Vagyonszerzési illeték:</td>
<td class='value'>###vagyonszerzesi### Ft</td>
</tr>

<tr>
<td class='title2'>Új forgalmi engedély:</td>
<td class='value'>###forgalmi### Ft</td>
</tr>

<tr>
<td class='title2'>Törzskönyv:</td>
<td class='value'>###torzskonyv### Ft</td>
</tr>

<tr>
<td class='title2'>Eredetvizsga:</td>
<td class='value'>###hatosagi_dij### Ft</td>
</tr>

<tr>
<td class='title2'>ÖSSZESEN FIZETENDŐ:</td>
<td class='value sum'>###sum### Ft</td>
</tr>
</table>
</div>	
	
</div>
</body>

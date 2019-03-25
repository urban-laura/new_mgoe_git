<head>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu"/>
	<link rel='stylesheet' type='text/css' href='../calc_css/calc###css-source###.css'>
	<link rel='stylesheet' type='text/css' href='css/cegauto_ado###cegauto-ado-css-source###.css'>

</head>

<body>

<div class='frame'>

<div class='title'>
<h1>Cégautó adó</h1>
</div>

<div id='sum' class='###sum-visibility###'>	
	<table>
		<tr>
			<td class='title2'>Havonta:</td>
			<td class='value month'>###month-value### Ft</td>
		</tr>

		<tr>
			<td class='title2'>Negyedévente:</td>
			<td class='value month3'>###month3-value### Ft</td>
		</tr>

		<tr>
			<td class='title2'>Évente:</td>
			<td class='value year'>###year-value### Ft</td>
		</tr>
	</table>
</div>

<div id='error' class='###error-visibility###'>
	<h5>###error###</h5>
</div>

<form name='calculator' method='post' class='calc-form'>
<div class='center'>

<select name='power' class="power ###power###">
	<option value="0" disabled selected class='invisible'>Teljesítmény (kW)</option>
	###power-options###
</select>

<select name='env' class="###env###">
 	<option value="0" disabled selected class='invisible'>Környezetvédelmi osztály</option>
	###env-options###
</select>
</div>

<div class='submit'>
<input type='hidden' value='submitted' name='submitted'>
<input type='submit' id='submit' value='Számold ki!' class='form-submit'>
</div>
</form>

<div id=zero>
</div>

</div>
</body>
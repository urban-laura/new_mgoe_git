<head>
<link rel='stylesheet' type='text/css' href='../calc_css/calc.css'>
<link rel='stylesheet' type='text/css' href='css/cegauto_ado.css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="js/cegauto_ado.js"></script>
</head>

<body>

<div class='frame'>

<div class='title'>
<h1>Cégautó adó</h1>
</div>

<form name='calculator' method='post' class='calc-form'>
<div class='center'>

<h4>
Teljesítmény (kW):
<select name='power' class='select'>
	###power-options###
</select>
</h4>

<h4>
Környezetvédelmi osztály:
<select name='env' class='select'>
	###env-options###
</select>
</h4>
</div>

<div class='submit'>
<input type='hidden' value='submitted' name='submitted'>
<input type='submit' id='submit' value='Számol' class='form-submit'>
</div>
</form>

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

</div>
</body>
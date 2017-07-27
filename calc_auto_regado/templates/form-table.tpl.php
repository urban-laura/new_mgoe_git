<head>

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu"/>
<link rel='stylesheet' type='text/css' href='../calc_css/calc###css-source###.css'>
<link rel='stylesheet' type='text/css' href='css/regado.css'>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="js/regado.js"></script>
</head>

<body>
<div class='frame'>

<div class='title'>
<h1>Személyautó regisztrációs adó</h1>
</div>

<div id='sum'>	
<h4><span class='sum-value'>###sum###</span> Ft</h4>
<h5>Eltelt hónapok száma: <strong><span class='month-value'>###month###</span></strong></h5>
</div>

<form name='calculator' method='post' class='calc-form'>

<div class='type'>
<h4>Üzemanyag típusa:</h4>
<select name='type' id='type'>
	###type-options###
</select>
</div>

<input type='hidden' name='fuel' id='fuel' value='###fuel###'>

<!-- Benzin -->
<div class='center ###visibility-benzin-class###' id='benzin'>

<h3>Első forgalomba helyezés:</h3>

<select name='c_year_b' class='date koz'>
<option value="0" disabled selected class='invisible'>Év</option>
	###year-b-options###
</select>

<select name='c_month_b' class='date'>
<option value="0" disabled selected class='invisible'>Hónap</option>
	###month-b-options###
</select>

<select name='barrel_b' class='stb'>
<option value="0" disabled selected class='invisible'>Hengerűrtartalom</option>
	###barrel-b-options###
</select>

<select name='env_b'>
<option value="0" disabled selected class='invisible'>Környezetvédelmi osztály</option>
	###env-b-options###
</select>
</div>

<!-- Dízel -->
<div class='center ###visibility-dizel-class###' id='dizel'>

<h3>Első forgalomba helyezés:</h3>

<select name='c_year_d' class='date koz'>
<option value="0" disabled selected class='invisible'>Év</option>
	###year-d-options###
</select>

<select name='c_month_d' class='date'>
<option value="0" disabled selected class='invisible'>Hónap</option>
	###month-d-options###
</select>

<select name='barrel_d' class='stb'>
<option value="0" disabled selected class='invisible'>Hengerűrtartalom</option>
	###barrel-d-options###
</select>

<select name='env_d'>
<option value="0" disabled selected class='invisible'>Környezetvédelmi osztály</option>
	###env-d-options###
</select>
</div>


<!-- Hibrid -->
<div class='center ###visibility-hibrid-class###' id='hibrid'>

<h3>Első forgalomba helyezés:</h3>

<select name='c_year_h' class='date koz'>
<option value="0" disabled selected class='invisible'>Év</option>
	###year-h-options###
</select>

<select name='c_month_h' class='date'>
<option value="0" disabled selected class='invisible'>Hónap</option>
	###month-h-options###
</select>
</div>

<!-- Elektromos --> 
<div class='center ###visibility-elektromos-class###' id='elektromos'>
<h3>A környezetkímélő járművek után nem kell regisztrációs adót fizetni.</h3>
</div>

<div class='submit'>
<input type='hidden' value='submitted' name='submitted'>
<input type='submit' id='submit' value='Számold ki!' class='form-submit'>
</div>

</form>

<div id='zero'>
</div>

</div>

</body>

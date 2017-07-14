<head>

<link rel='stylesheet' type='text/css' href='../calc_css/calc.css'>
<link rel='stylesheet' type='text/css' href='css/regado.css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="js/regado.js"></script>
</head>

<body>
<div class='frame'>

<div class='title'>
<h1>Személyautó regisztrációs adó</h1>
</div>

<div class='buttons-wrapper'>
	<div class='button-wrapper'><input type='button' id='button_benzin' class='button ###button-benzin-active-class###' value='Benzin'></div>
	<div class='button-wrapper'><input type='button' id='button_dizel' class='button ###button-dizel-active-class###' value='Dízel'></div>
	<div class='button-wrapper'><input type='button' id='button_hibrid' class='button ###button-hibrid-active-class###' value='Hibrid'></div>
	<div class='button-wrapper'><input type='button' id='button_elektromos' class='button ###button-elektromos-active-class###' value='Elektromos'></div>
</div>

<form name='calculator' method='post' class='calc-form'>

<input type='hidden' name='fuel' id='fuel' value='###fuel###'>

<!-- Benzin -->
<div class='center ###visibility-benzin-class###' id='benzin'>

<h2>Benzin</h2>

<h3>Az első forgalomba helyezés dátuma: </h3>

<div class='year_div'>
<h4>Év:
<select name='c_year_b' class='date'>
	###year-b-options###
</select>
</h4> 
</div>

<div class='month_div'>
<h4>Hónap:
<select name='c_month_b' class='date'>
	###month-b-options###
</select>
</h4>
</div>

<div id='error_b' class='error'>
<h3>###error###</h3>
</div>

<h3>Hengerűrtartalom:</h3> 
<select name='barrel_b' class='stb'>
	###barrel-b-options###
</select>

<h3>Környezetvédelmi osztály:</h3>
<select name='env_b' class='stb'>
	###env-b-options###
</select>
</div>

<!-- Dízel -->
<div class='center ###visibility-dizel-class###' id='dizel'>

<h2>Dízel</h2>

<h3>Az első forgalomba helyezés dátuma: </h3>

<div class='year_div'>
<h4>Év: 
<select name='c_year_d' class='date'>
	###year-d-options###
</select>
</h4>
</div>

<div class='month_div'>
<h4>Hónap:
<select name='c_month_d' class='date'>
	###month-d-options###
</select>
</h4>
</div>

<div id='error_d' class='error'>
<h3>###error###</h3>
</div>

<h3>Hengerűrtartalom:</h3>
<select name='barrel_d' class='stb'>
	###barrel-d-options###
</select>

<h3>Környezetvédelmi osztály:</h3>
<select name='env_d' class='stb'>
	###env-d-options###
</select>
</div>


<!-- Hibrid -->
<div class='center ###visibility-hibrid-class###' id='hibrid'>

<h2>Hibrid</h2>

<h3>Az első forgalomba helyezés dátuma: </h3>

<div class='year_div'>
<h4>Év: 
<select name='c_year_h' class='date'>
	###year-h-options###
</select>
</h4>
</div>

<div class='month_div'>
<h4>Hónap:
<select name='c_month_h' class='date'>
	###month-h-options###
</select>
</h4>
</div>

<div id='error_h' class='error'>
<h3>###error###</h3>
</div>

</div>


<!-- Elektromos --> 
<div class='center ###visibility-elektromos-class###' id='elektromos'>

<h2>Elektromos</h2>

<h5>A regisztrációs adó: 0 Ft</h5>

<h5>A környezetkímélő járművek után nem kell regisztrációs adót fizetni.</h5>
</div>

<div class='submit'>
<input type='hidden' value='submitted' name='submitted'>
<input type='submit' id='submit' value='Számol' class='form-submit'>
</div>

</form>

<div id='sum' class='###sum-visibility###'>	
<h5>###month-message###</h5>

<h4>###sum-message###</h4>
</div>

</div>

</div>
</body>

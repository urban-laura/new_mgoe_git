<head>
<link rel='stylesheet' type='text/css' href='../calc_css/calc.css'>
<link rel='stylesheet' type='text/css' href='css/regado.css'>

</head>

<body>

<div class='frame'>

<div class='title'>
<h1>Motorkerékpár regisztrációs adó</h1>
</div>

<form name='calculator' method='post' class='calc-form'>

<div id='motor'>

<h3>Az első forgalomba helyezés dátuma: </h3>

<div class='year_div'>
<h4>Év: 
<select name='m_year' class='date'>
	###year-m-options###
</select>
</h4>
</div>

<div class='month_div'>
<h4>Hónap:
<select name='m_month' class='date'>
	###month-m-options###
</select>
</h4>
</div>

<div id='error'>
<h3>###error###</h3>
</div>

<h3>Hengerűrtartalom: </h3>
<select name='barrel_m' class='barrel_m'>
	###barrel-m-options###
</select>
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

</body>

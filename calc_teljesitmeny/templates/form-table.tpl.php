<head>
<link rel='stylesheet' type='text/css' href='../calc_css/calc.css'>
<link rel='stylesheet' type='text/css' href='css/teljesitmeny.css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="js/teljesitmeny.js"></script>
</head>

<body>

<div class='frame'>

<div class='title'>
<h1>Teljesítményadó</h1>
</div>

<div class='center'>

<form name='calculator' method='post' class='calc-form'>

<h4>Évjárat:
<select name='year' id='year' class='date'>
	###year-options###
</select>
</h4>

<h4>
Teljesítmény:
<input type='number' name='teljesitmeny' id='power' class='date' value='###teljesitmeny###'>
<select name='or' class='or'>
	###or-options###
</select>
</h4>

<div id='error'>
<h4>###error###</h4>
</div>

</div>

<div class='submit'>
<input type='hidden' value='submitted' name='submitted'>
<input type='submit' id='submit' value='Számol' class='form-submit'>
</div>

</form>

<div id='sum' class='###sum-visibility###'>	
<h4>Éves teljesítményadó összege: ###sum### Ft</h4>
</div>	


</div>
</body>

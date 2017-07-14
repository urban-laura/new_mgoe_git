<head>
<link rel='stylesheet' type='text/css' href='../calc_css/calc.css'>
<link rel='stylesheet' type='text/css' href='css/vagyonszerzesi.css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="js/vagyonszerzesi.js"></script>
</head>

<body>
<div class='frame'>

<div class='title'>
<h1>Vagyonszerzési illeték</h1>
</div>

<form name='calculator' method='post' class='calc-form'>

<div id='vagyonszerzesi'>

<h4>
Évjárat: 
<select name='year' class='date'>
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
<h3>###error###</h3>
</div>

</div>

<div class='submit'>
<input type='hidden' value='submitted' name='submitted'>
<input type='submit' id='submit' value='Számol' class='form-submit'>
</div>

</form>

<div id='sum' class='###sum-visibility###'>	
<h4>Vagyonszerzési illeték: ###vagyonszerzesi### Ft</h4>
</div>	
	
</div>
</body>

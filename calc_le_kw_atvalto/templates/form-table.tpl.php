<head>
<link rel='stylesheet' type='text/css' href='../calc_css/calc.css'>
<link rel='stylesheet' type='text/css' href='css/atvalto.css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/atvalto.js"></script>
</head>

<body>

<div class='frame'>

<div class='title'>
<h1>LE - kW átváltó</h1>
</div>

<form name='calculator' method='post' class='calc-form'>

<div id='center'>
<div id='mibol'>
<input type='number' name='number' class='number' value='###number###'>
<select name='or_mibol'>
	###mibol-options###
</select>
</div>

<div id='images'>
</div>

<div id='mibe'>
<h4>###sum###
<select name='or_mibe'>
	###mibe-options###
</select>
</h4>
</div>

<div class='error'>
<h3>###error###</h3>
</div>
</div>

<div class='submit'>
<input type='hidden' value='submitted' name='submitted'>
<input type='submit' id='submit' value='Számol' class='form-submit'>
</div>
</form>

</div>
</body>
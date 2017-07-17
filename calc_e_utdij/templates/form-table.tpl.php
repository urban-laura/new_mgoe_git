<head>
<link rel='stylesheet' type='text/css' href='../calc_css/calc.css'>
<link rel='stylesheet' type='text/css' href='css/e_utdij.css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/e_utdij.js"></script>
</head>

<body>
<div class='frame'>

<div class='title'>
<h1>E-útdíj</h1>
</div>

<form name='calculator' method='post' class='calc-form'>

<div id='center'>

<h4>
Járműkategória:
<br>
<select name='category' class='category'>
	###category-options###
</select> 
</h4>

<h4>
Környezetvédelmi osztály:
<br />
<select name='env'>
	###env-options###
</select>
</h4>

<h4>
Főúton megtett távolság:
<br />
<input type='number' name='fout' class='number' value='###fout###'>
km
</h4>

<h4>
Gyorsforgalmi úton megtett távolság:
<br />
<input type='number' name='gyorsforgalmi' class='number' value='###gyorsforgalmi###'>
km
</h4>

<div class='error'>
<h3>###error###</h3>
</div>
</div>


<div class='submit'>
<input type='hidden' value='submitted' name='submitted'>
<input type='submit' id='submit' value='Számol' class='form-submit'>
</div>
</form>

<div id='sum' class='###sum-visibility###'>	
<h4>Fizetendő útdíj: ###sum### Ft (bruttó)</h4>
</div>

</div>
</body>
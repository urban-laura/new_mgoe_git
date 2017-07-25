<head>
<link rel='stylesheet' type='text/css' href='../calc_css/calc.css'>
<link rel='stylesheet' type='text/css' href='css/gyorshajtasi_buntetes.css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/gyorshajtasi_buntetes.js"></script>
</head>

<body>

<div class='frame'>

<div class='title'>
<h1>Gyorshajtási büntetés</h1>
</div>

<form name='calculator' method='post' class='calc-form'>

<div class='center'>

<h4>
Sebességhatár: 
<input type='number' class='sebesseg' name='sebesseghatar' value='###sebesseghatar###'>
km/h
</h4>
<div id='error'>
<h3 class='error1'>###error1###</h3>
</div>
<h4>

Ön sebessége:
<input type='number' class='on_sebessege sebesseg' name='on_sebessege' value='###on_sebessege###'>
km/h
</h4>
<div id='error'>
<h3 class='error2'>###error2###</h3>
</div>

</div>

<div class='submit'>
<input type='hidden' value='submitted' name='submitted'>
<input type='submit' id='submit' value='Számol' class='form-submit'>
</div>
</form>

<div id='sum' class='###sum-visibility###'>	
<h4>###sum###</h4>
</div>

</div>

</body>
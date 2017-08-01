<head>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu"/>
	<link rel='stylesheet' type='text/css' href='../calc_css/calc###css-source###.css'>
	<link rel='stylesheet' type='text/css' href='css/teljesitmeny###teljesitmeny-css-source###.css'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/teljesitmeny.js"></script>
</head>

<body>

	<div class='frame'>

		<div class='title'>
			<h1>Teljesítményadó</h1>
		</div>
		
		<div id='sum' class='###sum-visibility###'>	
			<h4>###sum### Ft</h4>
		</div>	

		<form name='calculator' method='post' class='calc-form'>

			<div class='center'>

				<h4>Évjárat:
				<select name='year' id='year' class='date'>
					###year-options###
				</select>
				</h4>

				<h4>
				Teljesítmény:
				<input type='text' name='teljesitmeny' id='power' class='date' value='###teljesitmeny###' placeholder="Teljesítmény">
				<input type="checkbox" name='kw' class="slectOne" ###kw###>kW
				<input type="checkbox" name='le' class="slectOne" ###le###>LE
				</h4>

				<div id='error'>
					<h4>###error###</h4>
				</div>

			</div>

			<div class='submit'>
				<input type='hidden' value='submitted' name='submitted' class="submitted">
				<input type='submit' id='submit' value='Számold ki!' class='form-submit'>
			</div>

		</form>	

 		<div id='zero'>
  		</div>
	</div>
</body>

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

				<h4>Gyártási év: 
				<select name='year' id='year'>
					<option value="0" disabled selected class='invisible'>Év</option>
					###year-options###
				</select>
				</h4>

				<input type='text' name='teljesitmeny' id='power' value='###teljesitmeny###' placeholder="Teljesítmény">
					<label class="kw">
						<input type="checkbox" name='kw' class="slectOne" ###kw###>
						<span></span>
					</label>
					<p>kW</p>

					<label class="le">
						<input type="checkbox" name='le' class="slectOne" ###le###>LE
						<span></span>
					</label>
			
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

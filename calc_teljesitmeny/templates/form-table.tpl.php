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

		<div id='error' class='###error-visibility###'>
			<h5>###error###</h5>
  		</div>

		<form name='calculator' method='post' class='calc-form'>

			<div class='center'>

				<h4>Gyártási év: 
				<select name='year' id='year' class="###year###">
					<option value="0" disabled selected class='invisible'>Év</option>
					###year-options###
				</select>
				</h4>

				<input type='text' name='teljesitmeny' id='power' class="###power###" value='###teljesitmeny###' placeholder="Teljesítmény">

					<p id="p_kw" class="###p-kw-visibility###">kW</p>
					<label class="kw">
						<input type="radio" name='kw' class="kw slectOne" ###kw###>
						<span id="kw" class="###kw-visibility###"></span>
					</label>


					<p id="p_le" class="###p-le-visibility###">LE</p>
					<label class="le">
						<input type="radio" name='le' class="le slectOne" ###le###>
						<span id="le" class="###le-visibility###"></span>
					</label>
		
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

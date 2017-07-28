<head>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu"/>
	<link rel='stylesheet' type='text/css' href='../calc_css/calc###css-source###.css'>
	<link rel='stylesheet' type='text/css' href='css/regado###regado-css-source###.css'>
</head>

<body>

	<div class='frame'>

		<div class='title'>
			<h1>Motorkerékpár<br /> regisztrációs adó</h1>
		</div>

		<div id='sum' class='###sum-visibility###'>	
			<h4>###sum### Ft</h4>
			<h5>Eltelt hónapok száma: <strong>###month###</strong></h5>
		</div>
		
		<div id='error' class='###error-visibility###'>
			<h5>###error1###</h5>
			<h5>###error2###</h5>
		</div>

		<form name='calculator' method='post' class='calc-form'>

			<div class='center'>

				<h3>Első forgalomba helyezés:</h3>

				<select name='m_year' class='error_color date koz ###m_year###'>
					<option value="0" disabled selected class='invisible'>Év</option>
					###year-m-options###
				</select>

				<select name='m_month' class='error_color date ###m_month###'>
					<option value="0" disabled selected class='invisible'>Hónap</option>
					###month-m-options###
				</select>

				<select name='barrel_m' class='error_color stb  ###m_barrel###'>
					<option value="0" disabled selected class='invisible'>Hengerűrtartalom</option>
					###barrel-m-options###
				</select>
	

				<div class='submit'>
					<input type='hidden' value='submitted' name='submitted'>
					<input type='submit' id='submit' value='Számold ki!' class='form-submit'>
				</div>

			</div>
		</form>
		<div id='zero'>
		</div>
	</div>
</body>

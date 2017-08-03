<head>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu"/>
	<link rel='stylesheet' type='text/css' href='../calc_css/calc###css-source###.css'>
	<link rel='stylesheet' type='text/css' href='css/atiras###atiras-css-source###.css'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/atiras.js"></script>
</head>

<body>
<div class='frame'>

<div class='title'>
<h1>Gépjármű átírás</h1>
</div>

<div id='sum' class='###sum-visibility###'>	
	<table>
		<tr>
			<td class='title2'>Vagyonszerzési illeték:</td>
			<td class='value'><span class="vagyon">###vagyonszerzesi###</span> Ft</td>
		</tr>

		<tr>
			<td class='title2'>Új forgalmi engedély:</td>
			<td class='value'>+ <span class="forgalmi">###forgalmi###</span> Ft</td>
		</tr>

		<tr>
			<td class='title2'>Törzskönyv:</td>
			<td class='value'>+ <span class="torzskonyv">###torzskonyv###</span> Ft</td>
		</tr>

		<tr>
			<td class='title2'>Eredetvizsga:</td>
			<td class='value hr'>+ <span class="hatosagi">###hatosagi_dij###</span> Ft</td>
		</tr>

		<tr>
			<td colspan="2" class='value'><span class="sum">###sum###</span> Ft</td>
		</tr>
	</table>
</div>	

<div id='error' class='###error-visibility###'>
	<h5>###error###</h5>
</div>

<form name='calculator' method='post' class='calc-form'>

<input type='hidden' name='types' id='types' value='###types###'>

<div class="center">

	<div class='type'>
		<h5>Gépjármű típusa:</h5>
		<select name='type' id='type'>
			###type-options###
		</select>
	</div>

<!--Személygépjármű-->
<div id='szemelygepjarmu' class='###visibility-szemelygepjarmu-class###'>

	<h4>Gyártási év: 
		<select name='sz_year' class="error_color date ###year###">
			<option value="0" disabled selected class='invisible'>Év</option>
			###year-sz-options###
		</select>
	</h4>

	<select name='sz_barrel' class='error_color ###barrel###'>
		<option value="0" disabled selected class='invisible'>Hengerűrtartalom</option>
		###barrel-sz-options###
	</select>

	<input type='text' name='sz_teljesitmeny' id='power' class="error_color ###power###" value='###sz_teljesitmeny###' placeholder="Teljesítmény">

	<p id="p_kw" class="p_kw ###p-kw-visibility###">kW</p>
	<label class="kw">
		<input type="radio" name='sz_kw' class="kw slectOne" ###kw###>
		<span id="kw" class="s_kw ###kw-visibility###"></span>
	</label>

	<p id="p_le" class="p_le ###p-le-visibility###">LE</p>
	<label class="le">
		<input type="radio" name='sz_le' class="le slectOne" ###le###>
		<span id="le" class="s_le ###le-visibility###"></span>
	</label>
</div>

<!--Motorkerékpár-->
<div id='motorkerekpar' class='###visibility-motorkerekpar-class###'>

	<h4>Gyártási év: 
		<select name='m_year' class="error_color date ###year###">
			<option value="0" disabled selected class='invisible'>Év</option>
			###year-m-options###
		</select>
	</h4>

	<select name='m_barrel' class='error_color ###barrel###'>
		<option value="0" disabled selected class='invisible'>Hengerűrtartalom</option>
		###barrel-m-options###
	</select>

	<input type='text' name='m_teljesitmeny' id='power' class="error_color ###power###" value='###m_teljesitmeny###' placeholder="Teljesítmény">

	<p id="p_kw" class="p_kw ###p-kw-visibility###">kW</p>
	<label class="kw">
		<input type="radio" name='m_kw' class="kw slectOne" ###kw###>
		<span id="kw" class="s_kw ###kw-visibility###"></span>
	</label>

	<p id="p_le" class="p_le ###p-le-visibility###">LE</p>
	<label class="le">
		<input type="radio" name='m_le' class="le slectOne" ###le###>
		<span id="le" class="s_le ###le-visibility###"></span>
	</label>
</div>


<!--Quad-->
<div id='quad' class='###visibility-quad-class###'>

	<h6>Gyártási év: 
		<select name='q_year' class="error_color date ###year###">
			<option value="0" disabled selected class='invisible'>Év</option>
			###year-q-options###
		</select>
	</h6>

	<input type='text' name='q_teljesitmeny' id='power' class="error_color ###power###" value='###q_teljesitmeny###' placeholder="Teljesítmény">

	<p id="p_kw" class="p_kw ###p-kw-visibility###">kW</p>
	<label class="kw">
		<input type="radio" name='q_kw' class="kw slectOne" ###kw###>
		<span id="kw" class="s_kw ###kw-visibility###"></span>
	</label>

	<p id="p_le" class="p_le ###p-le-visibility###">LE</p>
	<label class="le">
		<input type="radio" name='q_le' class="le slectOne" ###le###>
		<span id="le" class="s_le ###le-visibility###"></span>
	</label>
</div>

<!--Kisteherautó (3,5t össztömegig)-->
<div id='kisteherauto' class='###visibility-kisteherauto-class###'>

<h6>Gyártási év: 
		<select name='k_year' class="error_color date ###year###">
			<option value="0" disabled selected class='invisible'>Év</option>
			###year-k-options###
		</select>
	</h6>

	<input type='text' name='k_teljesitmeny' id='power' class="error_color ###power###" value='###k_teljesitmeny###' placeholder="Teljesítmény">

	<p id="p_kw" class="p_kw ###p-kw-visibility###">kW</p>
	<label class="kw">
		<input type="radio" name='k_kw' class="kw slectOne" ###kw###>
		<span id="kw" class="s_kw ###kw-visibility###"></span>
	</label>

	<p id="p_le" class="p_le ###p-le-visibility###">LE</p>
	<label class="le">
		<input type="radio" name='k_le' class="le slectOne" ###le###>
		<span id="le" class="s_le ###le-visibility###"></span>
	</label>
</div>

<!--Tehergépkocsi-->
<div id='tehergepkocsi' class='###visibility-tehergepkocsi-class###'>

	<h4>Gyártási év: 
		<select name='t_year' class="error_color date ###year###">
			<option value="0" disabled selected class='invisible'>Év</option>
			###year-t-options###
		</select>
	</h4>

	<select name='tomeg' class='error_color ###tomeg###'>
		<option value="0" disabled selected class='invisible'>Össztömeg</option>
		###tomeg-options###
	</select>

	<input type='text' name='t_teljesitmeny' id='power' class="error_color ###power###" value='###t_teljesitmeny###' placeholder="Teljesítmény">

	<p id="p_kw" class="p_kw ###p-kw-visibility###">kW</p>
	<label class="kw">
		<input type="radio" name='t_kw' class="kw slectOne" ###kw###>
		<span id="kw" class="s_kw ###kw-visibility###"></span>
	</label>

	<p id="p_le" class="p_le ###p-le-visibility###">LE</p>
	<label class="le">
		<input type="radio" name='t_le' class="le slectOne" ###le###>
		<span id="le" class="s_le ###le-visibility###"></span>
	</label>

</div>

<!--Autóbusz-->
<div id='autobusz' class='###visibility-autobusz-class###'>

	<h4>Gyártási év: 
		<select name='a_year' class="error_color date ###year###">
			<option value="0" disabled selected class='invisible'>Év</option>
			###year-a-options###
		</select>
	</h4>

	<select name='szem_szam' class='error_color ###szem-szam###'>
		<option value="0" disabled selected class='invisible'>Szállítható személyek száma</option>
		###szem-szam-options###
	</select>

	<input type='text' name='a_teljesitmeny' id='power' class="error_color ###power###" value='###a_teljesitmeny###' placeholder="Teljesítmény">

	<p id="p_kw" class="p_kw ###p-kw-visibility###">kW</p>
	<label class="kw">
		<input type="radio" name='a_kw' class="kw slectOne" ###kw###>
		<span id="kw" class="s_kw ###kw-visibility###"></span>
	</label>

	<p id="p_le" class="p_le ###p-le-visibility###">LE</p>
	<label class="le">
		<input type="radio" name='a_le' class="le slectOne" ###le###>
		<span id="le" class="s_le ###le-visibility###"></span>
	</label>
</div>

<!--Pótkocsi-->
<div id='potkocsi' class='###visibility-potkocsi-class###'>

	<select name='p_tomeg' class='tomeg error_color ###tomeg###'>
		<option value="0" disabled selected class='invisible'>Össztömeg</option>
		###tomeg-p-options###
	</select>

	<select name='kategoria' class='error_color ###kategoria###'>
		<option value="0" disabled selected class='invisible'>Kategória</option>
		###kategoria-options###
	</select>
</div>

</div>

<div class='submit'>
<input type='hidden' value='submitted' name='submitted'>
<input type='submit' id='submit' value='Számold ki!' class='form-submit'>
</div>

</form>
	
<div id="zero">
</div>	
</div>
</body>

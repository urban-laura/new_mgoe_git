<head>
<link rel='stylesheet' type='text/css' href='../calc_css/calc.css'>
<link rel='stylesheet' type='text/css' href='css/fedezetlensegi_dij.css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/fedezetlensegi_dij.js"></script>
</head>

<body>
<div class='frame'>

<div class='title'>
<h1>Fedezetlenségi díj</h1>
</div>

<form name='calculator' method='post' class='calc-form'>

<input type='hidden' name='types' id='types' value='###types###'>

<div id='center'>

<div class='type'>
<select name='type' id='type'>
	###type-options###
</select>
</div>

<!--Személygépjármű-->
<div id='szemelygepjarmu' class='###visibility-szemelygepjarmu-class###'>
<h4>
Teljesítmény (kW):
<select name='sz_teljesitmeny' class='stb'>
	###teljesitmeny-sz-options###
</select>
</h4>

<h4>
Napok száma:
<input type='number' name='sz_napok' class='days' value='###sz_napok###'>
</h4>
<div class='error'>
<h3>###error###</h3>
</div>
</div>

<!--Motorkerékpár-->
<div id='motorkerekpar' class='###visibility-motorkerekpar-class###'>
<h4>
Teljesítmény (kW):
<select name='m_teljesitmeny' class='stb'>
	###teljesitmeny-m-options###
</select>
</h4>

<h4>
Napok száma:
<input type='number' name='m_napok' class='days' value='###m_napok###'>
</h4>
<div class='error'>
<h3>###error###</h3>
</div>
</div>

<!--Quad-->
<div id='quad' class='###visibility-quad-class###'>
<h4>
Napok száma:
<input type='number' name='q_napok' class='e_days days' value='###q_napok###'>
</h4>
<div class='error'>
<h3>###error###</h3>
</div>
</div>

<!--Segédmotoros kerékpár-->
<div id='segedmotoros' class='###visibility-segedmotoros-class###'>
<h4>
Fedezetlenségi díj: 0 Ft
<br>
A segédmotoros kerékpárok után nem kell regisztrációs adót fizetni.
</h4>
</div>

<!--Autóbusz-->
<div id='autobusz' class='###visibility-autobusz-class###'>
<h4>
Férőhely:
<select name='ferohely' class='stb'>
	###ferohely-options###
</select>
</h4>

<h4>
Napok száma:
<input type='number' name='a_napok' class='f_days days' value='###a_napok###'>
</h4>
<div class='error'>
<h3>###error###</h3>
</div>
</div>

<!--Trolibusz-->
<div id='trolibusz' class='###visibility-trolibusz-class###'>
<h4>
Napok száma:
<input type='number' name='tr_napok' class='e_days days' value='###tr_napok###'>
</h4>
<div class='error'>
<h3>###error###</h3>
</div>
</div>

<!--Tehergépkocsi-->
<div id='tehergepkocsi' class='###visibility-tehergepkocsi-class###'>
<h4>
Össztömeg (kg):
<select name='t_ossztomeg' class='stb'>
	###ossztomeg-t-options###
</select>
</h4>

<h4>
Napok száma:
<input type='number' name='t_napok' class='o_days days' value='###t_napok###'>
</h4>
<div class='error'>
<h3>###error###</h3>
</div>
</div>

<!--Vontató-->
<div id='vontato' class='###visibility-vontato-class###'>
<h4>
Napok száma:
<input type='number' name='v_napok' class='e_days days' value='###v_napok###'>
</h4>
<div class='error'>
<h3>###error###</h3>
</div>
</div>

<!--Mezőgazdasági vontató-->
<div id='mezogazdasagi_vontato' class='###visibility-mezogazdasagi_vontato-class###'>
<h4>
Napok száma:
<input type='number' name='mv_napok' class='e_days days' value='###mv_napok###'>
</h4>
<div class='error'>
<h3>###error###</h3>
</div>
</div>

<!--Pótkocsi-->
<div id='potkocsi' class='###visibility-potkocsi-class###'>
<h4>
Össztömeg (kg):
<select name='p_ossztomeg' class='stb'>
	###ossztomeg-p-options###
</select>
<div class='error'>
<h3>###error###</h3>
</div>
</h4>

<h4>
Napok száma:
<input type='number' name='p_napok' class='o_days days' value='###p_napok###'>
</h4>
<div class='error'>
<h3>###error###</h3>
</div>
</div>

<!--Lassú jármű-->
<div id='lassu_jarmu' class='###visibility-lassu_jarmu-class###'>
<h4>
Napok száma:
<input type='number' name='l_napok' class='e_days days' value='###l_napok###'>
</h4>
<div class='error'>
<h3>###error###</h3>
</div>
</div>

<!--Munkagép-->
<div id='munkagep' class='###visibility-munkagep-class###'>
<h4>
Napok száma:
<input type='number' name='mu_napok' class='e_days days' value='###mu_napok###'>
</h4>
<div class='error'>
<h3>###error###</h3>
</div>
</div>

</div>

<div class='submit'>
<input type='hidden' value='submitted' name='submitted'>
<input type='submit' id='submit' value='Számol' class='form-submit'>
</div>

</form>

<div id='sum' class='###sum-visibility###'>	
<h4>
Fedezetlenségi díj: ###sum### Ft
</h4>
</div>

</div>
</body>
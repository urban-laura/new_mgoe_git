$(document).ready(function(){
	
	$('#type').change(function(){
		
		if($('#type option:selected').text() == 'Személygépjármű')
		{
			$('#motorkerekpar').addClass('invisible');
			$('#quad').addClass('invisible');
			$('#segedmotoros').addClass('invisible');
			$('#autobusz').addClass('invisible');
			$('#trolibusz').addClass('invisible');
			$('#tehergepkocsi').addClass('invisible');
			$('#vontato').addClass('invisible');
			$('#mezogazdasagi_vontato').addClass('invisible');
			$('#potkocsi').addClass('invisible');
			$('#lassu_jarmu').addClass('invisible');
			$('#munkagep').addClass('invisible');
			$('.error').addClass('invisible');
			$('#sum').addClass('invisible');
			$('#szemelygepjarmu').removeClass('invisible');
			$('#submit').removeClass('invisible');
			
			$('#types').val('szemelygepjarmu');
		}	
		
		if($('#type option:selected').text() == 'Motorkerékpár')
		{
			$('#szemelygepjarmu').addClass('invisible');
			$('#quad').addClass('invisible');
			$('#segedmotoros').addClass('invisible');
			$('#autobusz').addClass('invisible');
			$('#trolibusz').addClass('invisible');
			$('#tehergepkocsi').addClass('invisible');
			$('#vontato').addClass('invisible');
			$('#mezogazdasagi_vontato').addClass('invisible');
			$('#potkocsi').addClass('invisible');
			$('#lassu_jarmu').addClass('invisible');
			$('#munkagep').addClass('invisible');
			$('.error').addClass('invisible');
			$('#sum').addClass('invisible');
			$('#motorkerekpar').removeClass('invisible');
			$('#submit').removeClass('invisible');
			
			$('#types').val('motorkerekpar');
		}	
		
		if($('#type option:selected').text() == 'Quad (négykerekű segédmotoros kerékpár)')
		{
			$('#szemelygepjarmu').addClass('invisible');
			$('#motorkerekpar').addClass('invisible');
			$('#segedmotoros').addClass('invisible');
			$('#autobusz').addClass('invisible');
			$('#trolibusz').addClass('invisible');
			$('#tehergepkocsi').addClass('invisible');
			$('#vontato').addClass('invisible');
			$('#mezogazdasagi_vontato').addClass('invisible');
			$('#potkocsi').addClass('invisible');
			$('#lassu_jarmu').addClass('invisible');
			$('#munkagep').addClass('invisible');
			$('.error').addClass('invisible');
			$('#sum').addClass('invisible');
			$('#quad').removeClass('invisible');
			$('#submit').removeClass('invisible');
			
			$('#types').val('quad');
		}	
		
		if($('#type option:selected').text() == 'Segédmotoros kerékpár')
		{
			$('#szemelygepjarmu').addClass('invisible');
			$('#motorkerekpar').addClass('invisible');
			$('#quad').addClass('invisible');
			$('#autobusz').addClass('invisible');
			$('#trolibusz').addClass('invisible');
			$('#tehergepkocsi').addClass('invisible');
			$('#vontato').addClass('invisible');
			$('#mezogazdasagi_vontato').addClass('invisible');
			$('#potkocsi').addClass('invisible');
			$('#lassu_jarmu').addClass('invisible');
			$('#munkagep').addClass('invisible');
			$('#submit').addClass('invisible');
			$('.error').addClass('invisible');
			$('#sum').addClass('invisible');
			$('#segedmotoros').removeClass('invisible');
			
			$('#types').val('segedmotoros');
		}	
		
		if($('#type option:selected').text() == 'Autóbusz')
		{
			$('#szemelygepjarmu').addClass('invisible');
			$('#motorkerekpar').addClass('invisible');
			$('#quad').addClass('invisible');
			$('#segedmotoros').addClass('invisible');
			$('#trolibusz').addClass('invisible');
			$('#tehergepkocsi').addClass('invisible');
			$('#vontato').addClass('invisible');
			$('#mezogazdasagi_vontato').addClass('invisible');
			$('#potkocsi').addClass('invisible');
			$('#lassu_jarmu').addClass('invisible');
			$('#munkagep').addClass('invisible');
			$('.error').addClass('invisible');
			$('#sum').addClass('invisible');
			$('#autobusz').removeClass('invisible');
			$('#submit').removeClass('invisible');
			
			$('#types').val('autobusz');
		}	
		
		if($('#type option:selected').text() == 'Trolibusz')
		{
			$('#szemelygepjarmu').addClass('invisible');
			$('#motorkerekpar').addClass('invisible');
			$('#quad').addClass('invisible');
			$('#segedmotoros').addClass('invisible');
			$('#autobusz').addClass('invisible');
			$('#tehergepkocsi').addClass('invisible');
			$('#vontato').addClass('invisible');
			$('#mezogazdasagi_vontato').addClass('invisible');
			$('#potkocsi').addClass('invisible');
			$('#lassu_jarmu').addClass('invisible');
			$('#munkagep').addClass('invisible');
			$('.error').addClass('invisible');
			$('#sum').addClass('invisible');
			$('#trolibusz').removeClass('invisible');
			$('#submit').removeClass('invisible');
			
			$('#types').val('trolibusz');
		}	
		
		if($('#type option:selected').text() == 'Tehergépkocsi')
		{
			$('#szemelygepjarmu').addClass('invisible');
			$('#motorkerekpar').addClass('invisible');
			$('#quad').addClass('invisible');
			$('#segedmotoros').addClass('invisible');
			$('#autobusz').addClass('invisible');
			$('#trolibusz').addClass('invisible');
			$('#vontato').addClass('invisible');
			$('#mezogazdasagi_vontato').addClass('invisible');
			$('#potkocsi').addClass('invisible');
			$('#lassu_jarmu').addClass('invisible');
			$('#munkagep').addClass('invisible');
			$('.error').addClass('invisible');
			$('#sum').addClass('invisible');
			$('#tehergepkocsi').removeClass('invisible');
			$('#submit').removeClass('invisible');
			
			$('#types').val('tehergepkocsi');
		}	
		
		if($('#type option:selected').text() == 'Vontató')
		{
			$('#szemelygepjarmu').addClass('invisible');
			$('#motorkerekpar').addClass('invisible');
			$('#quad').addClass('invisible');
			$('#segedmotoros').addClass('invisible');
			$('#autobusz').addClass('invisible');
			$('#trolibusz').addClass('invisible');
			$('#tehergepkocsi').addClass('invisible');
			$('#mezogazdasagi_vontato').addClass('invisible');
			$('#potkocsi').addClass('invisible');
			$('#lassu_jarmu').addClass('invisible');
			$('#munkagep').addClass('invisible');
			$('.error').addClass('invisible');
			$('#sum').addClass('invisible');
			$('#vontato').removeClass('invisible');
			$('#submit').removeClass('invisible');
			
			$('#types').val('vontato');
		}	
		
		if($('#type option:selected').text() == 'Mezőgazdasági vontató')
		{
			$('#szemelygepjarmu').addClass('invisible');
			$('#motorkerekpar').addClass('invisible');
			$('#quad').addClass('invisible');
			$('#segedmotoros').addClass('invisible');
			$('#autobusz').addClass('invisible');
			$('#trolibusz').addClass('invisible');
			$('#tehergepkocsi').addClass('invisible');
			$('#vontato').addClass('invisible');
			$('#potkocsi').addClass('invisible');
			$('#lassu_jarmu').addClass('invisible');
			$('#munkagep').addClass('invisible');
			$('.error').addClass('invisible');
			$('#sum').addClass('invisible');
			$('#mezogazdasagi_vontato').removeClass('invisible');
			$('#submit').removeClass('invisible');
			
			$('#types').val('mezogazdasagi_vontato');
		}	
		
		if($('#type option:selected').text() == 'Pótkocsi, félpótkocsi')
		{
			$('#szemelygepjarmu').addClass('invisible');
			$('#motorkerekpar').addClass('invisible');
			$('#quad').addClass('invisible');
			$('#segedmotoros').addClass('invisible');
			$('#autobusz').addClass('invisible');
			$('#trolibusz').addClass('invisible');
			$('#tehergepkocsi').addClass('invisible');
			$('#vontato').addClass('invisible');
			$('#mezogazdasagi_vontato').addClass('invisible');
			$('#lassu_jarmu').addClass('invisible');
			$('#munkagep').addClass('invisible');
			$('.error').addClass('invisible');
			$('#sum').addClass('invisible');
			$('#potkocsi').removeClass('invisible');
			$('#submit').removeClass('invisible');
			
			$('#types').val('potkocsi');
		}	
		
		if($('#type option:selected').text() == 'Lassú jármű')
		{
			$('#szemelygepjarmu').addClass('invisible');
			$('#motorkerekpar').addClass('invisible');
			$('#quad').addClass('invisible');
			$('#segedmotoros').addClass('invisible');
			$('#autobusz').addClass('invisible');
			$('#trolibusz').addClass('invisible');
			$('#tehergepkocsi').addClass('invisible');
			$('#vontato').addClass('invisible');
			$('#mezogazdasagi_vontato').addClass('invisible');
			$('#potkocsi').addClass('invisible');
			$('#munkagep').addClass('invisible');
			$('.error').addClass('invisible');
			$('#sum').addClass('invisible');
			$('#lassu_jarmu').removeClass('invisible');
			$('#submit').removeClass('invisible');
			
			$('#types').val('lassu_jarmu');
		}	
		
		if($('#type option:selected').text() == 'Munkagép')
		{
			$('#szemelygepjarmu').addClass('invisible');
			$('#motorkerekpar').addClass('invisible');
			$('#quad').addClass('invisible');
			$('#segedmotoros').addClass('invisible');
			$('#autobusz').addClass('invisible');
			$('#trolibusz').addClass('invisible');
			$('#tehergepkocsi').addClass('invisible');
			$('#vontato').addClass('invisible');
			$('#mezogazdasagi_vontato').addClass('invisible');
			$('#potkocsi').addClass('invisible');
			$('#lassu_jarmu').addClass('invisible');
			$('.error').addClass('invisible');
			$('#sum').addClass('invisible');
			$('#munkagep').removeClass('invisible');
			$('#submit').removeClass('invisible');
			
			$('#types').val('munkagep');
		}	
			
	})	
	
	$('.days').keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl/cmd+A
            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+C
            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+X
            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
			
})//ready
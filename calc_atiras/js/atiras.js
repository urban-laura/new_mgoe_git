$(document).ready(function(){

	$('.slectOne').on('change', function() {
         $('.slectOne').not(this).prop('checked', false);
    })

     $('.kw').click(function() {
        $('.s_kw').addClass('active');
        $('.s_kw').removeClass('inactive');
        $('.s_le').addClass('inactive');
        $('.s_le').removeClass('active');
        $('.p_kw').addClass('p_active');
        $('.p_le').removeClass('p_active');
    })

    $('.le').click(function() {
        $('.s_le').addClass('active');
        $('.s_le').removeClass('inactive');
        $('.s_kw').addClass('inactive');
        $('.s_kw').removeClass('active');
        $('.p_le').addClass('p_active');
        $('.p_kw').removeClass('p_active');
    })
	
	$('#type').change(function(){

		$('.sum').html('0');
		$('.hatosagi').html('0');
		$('.torzskonyv').html('0');
		$('.forgalmi').html('0');
		$('.vagyon').html('0');

		$('.s_le').addClass('active');
       	$('.s_le').removeClass('inactive');
        $('.s_kw').addClass('inactive');
        $('.s_kw').removeClass('active');
        $('.p_le').addClass('p_active');
        $('.p_kw').removeClass('p_active');

        $('.le').prop('checked', true);
        $('.kw').prop('checked', false);

        $('.error_color').removeClass('validation-error');
		$('#sum').removeClass('invisible');
		$('#error').addClass('invisible');

		if($('#type option:selected').text() == 'Személygépjármű')
		{
			$('#motorkerekpar').addClass('invisible');
			$('#quad').addClass('invisible');
			$('#kisteherauto').addClass('invisible');;
			$('#tehergepkocsi').addClass('invisible');
			$('#autobusz').addClass('invisible');
			$('#potkocsi').addClass('invisible');
			$('#szemelygepjarmu').removeClass('invisible');
			
			$('#types').val('szemelygepjarmu');
		}

		
		if($('#type option:selected').text() == 'Motorkerékpár')
		{
			$('#szemelygepjarmu').addClass('invisible');
			$('#quad').addClass('invisible');
			$('#kisteherauto').addClass('invisible');
			$('#tehergepkocsi').addClass('invisible');
			$('#autobusz').addClass('invisible');
			$('#potkocsi').addClass('invisible');
			$('#motorkerekpar').removeClass('invisible');
			
			$('#types').val('motorkerekpar');
		}
		
		if($('#type option:selected').text() == 'Quad (négykerekű segédmotoros kerékpár)')
		{
			$('#szemelygepjarmu').addClass('invisible');
			$('#motorkerekpar').addClass('invisible');
			$('#kisteherauto').addClass('invisible');
			$('#tehergepkocsi').addClass('invisible');
			$('#autobusz').addClass('invisible');
			$('#potkocsi').addClass('invisible');
			$('#quad').removeClass('invisible');
			
			$('#types').val('quad');
		}

		
		if($('#type option:selected').text() == 'Kisteherautó (3,5t össztömegig)')
		{
			$('#szemelygepjarmu').addClass('invisible');
			$('#motorkerekpar').addClass('invisible');
			$('#quad').addClass('invisible');
			$('#tehergepkocsi').addClass('invisible');
			$('#autobusz').addClass('invisible');
			$('#potkocsi').addClass('invisible');
			$('#kisteherauto').removeClass('invisible');
			
			$('#types').val('kisteherauto');
		}
		

		if($('#type option:selected').text() == 'Tehergépkocsi')
		{
			$('#szemelygepjarmu').addClass('invisible');
			$('#motorkerekpar').addClass('invisible');
			$('#quad').addClass('invisible');
			$('#kisteherauto').addClass('invisible');
			$('#autobusz').addClass('invisible');
			$('#potkocsi').addClass('invisible');
			$('#tehergepkocsi').removeClass('invisible');
			
			$('#types').val('tehergepkocsi');
		}
		
		if($('#type option:selected').text() == 'Autóbusz')
		{
			$('#szemelygepjarmu').addClass('invisible');
			$('#motorkerekpar').addClass('invisible');
			$('#quad').addClass('invisible');
			$('#kisteherauto').addClass('invisible');
			$('#tehergepkocsi').addClass('invisible');
			$('#potkocsi').addClass('invisible');
			$('#autobusz').removeClass('invisible');
			
			$('#types').val('autobusz');
		}
		
		if($('#type option:selected').text() == 'Pótkocsi')
		{
			$('#szemelygepjarmu').addClass('invisible');
			$('#motorkerekpar').addClass('invisible');
			$('#quad').addClass('invisible');
			$('#kisteherauto').addClass('invisible');
			$('#tehergepkocsi').addClass('invisible');
			$('#autobusz').addClass('invisible');
			$('#potkocsi').removeClass('invisible');
			
			$('#types').val('potkocsi');
		}
		
	});
	

	$('.power').keydown(function (e) {
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
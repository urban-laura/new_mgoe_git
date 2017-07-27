$(document).ready(function(){
	
	$('#type').change(function(){
		
		$('.sum-value').html('0');
		$('.month-value').html('0');
		
		$('.error_color').removeClass('validation-error');
		$('#sum').removeClass('invisible');
		
		if($('#type option:selected').text() == 'Benzin')
		{
			$('#dizel').addClass('invisible');	
			$('#hibrid').addClass('invisible');
			$('#elektromos').addClass('invisible');
			$('#benzin').removeClass('invisible');
			$('#submit').removeClass('invisible');

			$('#fuel').val('benzin');
		}
	
		if($('#type option:selected').text() == 'Dízel')
		{
			$('#benzin').addClass('invisible');	
			$('#hibrid').addClass('invisible');
			$('#elektromos').addClass('invisible');
			$('#dizel').removeClass('invisible');
			$('#submit').removeClass('invisible');

			$('#fuel').val('dizel');
		}
	
		if($('#type option:selected').text() == 'Hibrid')
		{
			$('#benzin').addClass('invisible');
			$('#dizel').addClass('invisible');	
			$('#elektromos').addClass('invisible');
			$('#hibrid').removeClass('invisible');
			$('#submit').removeClass('invisible');

			$('#fuel').val('hibrid');
		}

		if($('#type option:selected').text() == 'Elektromos')
		{	
			$('#benzin').addClass('invisible');	
			$('#dizel').addClass('invisible');
			$('#hibrid').addClass('invisible');	
			$('#submit').addClass('invisible');
			$('#elektromos').removeClass('invisible');

			$('#fuel').val('elektromos');
		}
	})

})//ready

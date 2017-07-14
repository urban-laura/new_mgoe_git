$(document).ready(function(){
	
	
	$('#button_benzin').click(function(){
		$('#dizel').addClass('invisible');	
		$('#hibrid').addClass('invisible');
		$('#elektromos').addClass('invisible');
		$('#error_b').addClass('invisible');
		$('#error_d').addClass('invisible');
		$('#error_h').addClass('invisible');
		$('#sum').addClass('invisible');
		$('#benzin').removeClass('invisible');
		$('#submit').removeClass('invisible');
		$('#button_benzin').addClass('active');
		$('#button_dizel').removeClass('active');
		$('#button_hibrid').removeClass('active');
		$('#button_elektromos').removeClass('active');

		$('#fuel').val('benzin');
	})
	
	$('#button_dizel').click(function(){
		$('#benzin').addClass('invisible');	
		$('#hibrid').addClass('invisible');
		$('#elektromos').addClass('invisible');
		$('#error_b').addClass('invisible');
		$('#error_d').addClass('invisible');
		$('#error_h').addClass('invisible');
		$('#sum').addClass('invisible');
		$('#dizel').removeClass('invisible');
		$('#submit').removeClass('invisible');
		$('#button_dizel').addClass('active');
		$('#button_benzin').removeClass('active');
		$('#button_hibrid').removeClass('active');
		$('#button_elektromos').removeClass('active');

		$('#fuel').val('dizel');
	})
	
	$('#button_hibrid').click(function(){	
		$('#benzin').addClass('invisible');
		$('#dizel').addClass('invisible');	
		$('#elektromos').addClass('invisible');
		$('#error_b').addClass('invisible');
		$('#error_d').addClass('invisible');
		$('#error_h').addClass('invisible');
		$('#sum').addClass('invisible');
		$('#hibrid').removeClass('invisible');
		$('#submit').removeClass('invisible');
		$('#button_hibrid').addClass('active');
		$('#button_benzin').removeClass('active');
		$('#button_dizel').removeClass('active');
		$('#button_elektromos').removeClass('active');

		$('#fuel').val('hibrid');
	})

	$('#button_elektromos').click(function(){	
		$('#benzin').addClass('invisible');	
		$('#dizel').addClass('invisible');
		$('#hibrid').addClass('invisible');	
		$('#submit').addClass('invisible');
		$('#sum').addClass('invisible');
		$('#elektromos').removeClass('invisible');
		$('#button_elektromos').addClass('active');
		$('#button_benzin').removeClass('active');
		$('#button_hibrid').removeClass('active');
		$('#button_dizel').removeClass('active');

		$('#fuel').val('elektromos');
	})

})//ready

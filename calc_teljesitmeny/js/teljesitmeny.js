$(document).ready(function(){

    $('.slectOne').on('change', function() {
         $('.slectOne').not(this).prop('checked', false);
    })

     $('.kw').click(function() {
        $('#kw').addClass('active');
        $('#kw').removeClass('inactive');
        $('#le').addClass('inactive');
        $('#le').removeClass('active');
        $('#p_kw').addClass('p_active');
        $('#p_le').removeClass('p_active');
    })

    $('.le').click(function() {
        $('#le').addClass('active');
        $('#le').removeClass('inactive');
        $('#kw').addClass('inactive');
        $('#kw').removeClass('active');
        $('#p_le').addClass('p_active');
        $('#p_kw').removeClass('p_active');
    })

	 $('#power').keydown(function (e) {
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
    })
	
})//ready
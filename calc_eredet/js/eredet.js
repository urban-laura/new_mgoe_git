$(document).ready(function(){
	
	$('#hatosagi_dijak').change(function(){
		
		if($('#hatosagi_dijak option:selected').text() == '-Válasszon-')
		{
			$('#szemelygepjarmuvek').hide();
			$('#motorkerekparok').hide();
			$('#kisteherautok').hide();
			$('#tehergepkocsi').hide();
			$('#autobuszok').hide();
			$('#mezogazdasagi').hide();
			$('#potkocsi').hide();
		}
		
		if($('#hatosagi_dijak option:selected').text() == 'Személygépjármű')
		{
			$('#motorkerekparok').hide();
			$('#kisteherautok').hide();
			$('#tehergepkocsi').hide();
			$('#autobuszok').hide();
			$('#mezogazdasagi').hide();
			$('#potkocsi').hide();
			$('#szemelygepjarmuvek').show();
		}
		
		if($('#hatosagi_dijak option:selected').text() == 'Motorkerékpár')
		{
			$('#szemelygepjarmuvek').hide();
			$('#kisteherautok').hide();
			$('#tehergepkocsi').hide();
			$('#autobuszok').hide();
			$('#mezogazdasagi').hide();
			$('#potkocsi').hide();
			$('#motorkerekparok').show();
		}
		
		if($('#hatosagi_dijak option:selected').text() == 'Kisteherautó (3,5t össztömegig)')
		{
			$('#szemelygepjarmuvek').hide();
			$('#motorkerekparok').hide();
			$('#tehergepkocsi').hide();
			$('#autobuszok').hide();
			$('#mezogazdasagi').hide();
			$('#potkocsi').hide();
			$('#kisteherautok').show();
		}
		
		if($('#hatosagi_dijak option:selected').text() == 'Tehergépkocsi')
		{
			$('#szemelygepjarmuvek').hide();
			$('#motorkerekparok').hide();
			$('#kisteherautok').hide();
			$('#autobuszok').hide();
			$('#mezogazdasagi').hide();
			$('#potkocsi').hide();
			$('#tehergepkocsi').show();
		}
		
		if($('#hatosagi_dijak option:selected').text() == 'Autóbusz')
		{
			$('#szemelygepjarmuvek').hide();
			$('#motorkerekparok').hide();
			$('#kisteherautok').hide();
			$('#tehergepkocsi').hide();
			$('#mezogazdasagi').hide();
			$('#potkocsi').hide();
			$('#autobuszok').show();
		}
		
		if($('#hatosagi_dijak option:selected').text() == 'Mezőgazdasági vontató, lassú jármű')
		{
			$('#szemelygepjarmuvek').hide();
			$('#motorkerekparok').hide();
			$('#kisteherautok').hide();
			$('#tehergepkocsi').hide();
			$('#autobuszok').hide();
			$('#potkocsi').hide();
			$('#mezogazdasagi').show();
		}
		
		if($('#hatosagi_dijak option:selected').text() == 'Pótkocsi')
		{
			$('#szemelygepjarmuvek').hide();
			$('#motorkerekparok').hide();
			$('#kisteherautok').hide();
			$('#tehergepkocsi').hide();
			$('#autobuszok').hide();
			$('#mezogazdasagi').hide();
			$('#potkocsi').show();
		}
	
	})//change
	
	
})//ready
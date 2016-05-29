$(document).ready(function(){$(".datepicker").datepicker({ dateFormat: 'yy-mm-dd' });});


$(document).ready(function(){
	$("#brand").change(function(){		
			
			$('#regNumber').load("../config/searchDetails.php#","regNumber=" + $("#brand").val());
			$('#power').load("../config/searchDetails.php#","power=" + $("#brand").val());
			$('#color').load("../config/searchDetails.php#","color=" + $("#brand").val());
			$('#engine').load("../config/searchDetails.php#","engine=" + $("#brand").val());
			$('#model').load("../config/searchDetails.php#","model=" + $("#brand").val());
			
	});});

$(document).ready(function(){
$('#model').change(function(){
	if($("#regNumber").val()!=""){
		}	
	$('#power').load("../config/searchDetails.php","model_power="+ encodeURIComponent($("#model").val())+"&brand="+$("#brand").val());
});});


$(document).ready(function(){
$('#model').change(function(){
	if($("#regNumber").val()!=""){
	
		$("#res").append("<p>sds</p>");
		return false;
		}	
	$('#regNumber').load("../config/searchDetails.php","model_reg="+ $("#model").val()+"&brand="+$("#brand").val());
});});


$(document).ready(function(){
$('#model').change(function(){
	if($("#regNumber").val()!=""){

		}	
	$('#color').load("../config/searchDetails.php","model_color="+ $("#model").val()+"&brand="+$("#brand").val());
});});

$(document).ready(function(){
$('#model').change(function(){
	if($("#regNumber").val()!=""){
	
		}	
	$('#engine').load("../config/searchDetails.php","model_engine="+ $("#model").val()+"&brand="+$("#brand").val());
});});
$(document).ready(function(){
$('#model').change(function(){
	if($("#regNumber").val()==""){
		return false;
		}	


});});

/*..........................................................*/

$(document).ready(function(){
$('#regNumber').change(function(){
		if($('#regNumber').val()==''){
			$('#model').load("../config/searchDetails.php#","model=" + $("#brand").val());
			return false;
				
		}
			$('#power').load("../config/searchDetails.php","reg_power=" + $("#regNumber").val()+"&brand="+$("#brand").val());
			$('#color').load("../config/searchDetails.php","reg_color=" + $("#regNumber").val()+"&brand="+$("#brand").val());
			$('#engine').load("../config/searchDetails.php","reg_engine=" + $("#regNumber").val()+"&brand="+$("#brand").val());
			$('#model').load("../config/searchDetails.php","reg_model=" + $("#regNumber").val()+"&brand="+$("#brand").val());
});});
/*.............................................................*/
$(document).ready(function(){
$("#Search").submit(function(event){
			event.preventDefault();
			
			$('.resultTable').load("../config/searchDetails.php","powerQ="+$("#power").val()+"&colorQ="+$("#color").val()+"&engineQ="+$("#engine").val()+"&modelQ="+
				$("#model").val()+"&brandQ="+$("#brand").val()+"&regNumberQ="+$("#regNumber").val()+"&from="+$("#From").val()+"&to="+$("#To").val()+"&isRented="+$("input:checked").val());
				}
			
)
});
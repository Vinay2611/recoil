$(function() {
    
	$("#departure_date").datepicker({
			  dateFormat: 'dd/mm/yy', 
			  changeMonth: true,
			  onClose: function(selected) {
				$("#return_date").datepicker( "option", "minDate", selected);
			  }
	});
		
	$("#return_date").datepicker({
			  dateFormat: 'dd/mm/yy', 
			  changeMonth: true,
			  onClose: function(selected) {
			   $("#departure_date").datepicker("option", "maxDate", selected);
	}
	});		
 });
 
 
 //Change divs
  $(function() {
	   $("input[name='type']").click(function() {
	  
         if($(this).attr('id') == "type1") {
			$("#airportTransferDiv").show('fast'); 
			$("#localTransferDiv").hide('fast');
			$("#dayuseTransferDiv").hide('fast');
		    $("input[name='travel_type']").prop("checked", false);
			$("#arrivalDateDiv").css('display','none'); 
			$("#departureDateDiv").css('display','none');
		 }
		 
		 
		 if($(this).attr('id') == "type2") {
			$("#airportTransferDiv").hide('fast'); 
			$("#localTransferDiv").show('fast');
			$("#dayuseTransferDiv").hide('fast');
		 }
		 
		 if($(this).attr('id') == "type3") {
			$("#airportTransferDiv").hide('fast'); 
			$("#localTransferDiv").hide('fast');
			$("#dayuseTransferDiv").show('fast'); 			 
		 }
	  });	
	  
	  
	  $("input[name='travel_type']").click(function() {
	  
         if($(this).attr('id') == "travel_type1") {
			$("#arrivalDateDiv").toggle('fast'); 
		 } 
		 
		 if($(this).attr('id') == "travel_type2") {
			$("#departureDateDiv").toggle('fast');
		 }
		 
		 
	  });  
  });
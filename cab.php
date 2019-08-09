<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Shobiz : Cab Booking</title>
<link rel="stylesheet" href="css/nav.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="js/datepicker/jquery-ui.js" type="text/javascript"></script>
<link rel="stylesheet" href="js/datepicker/jquery-ui.css">
<link rel="stylesheet" href="css/flip-switch.css">
<link rel="stylesheet" href="css/cab.css">
<style>
    .bs-example{
        margin: 20px;        
    }
	.error {
	color:rgba(231,8,11,1.00);
	}
</style>
<script type="text/javascript">
function IsEmail(email) {
var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if(!regex.test(email)) {
return false;
} else{
return true;
  }
}

 function ValidatePhone() {
	    var phoneRegExp = /^((\+)?[1-9]{1,2})?([-\s\.])?((\(\d{1,4}\))|\d{1,4})(([-\s\.])?[0-9]{1,12}){1,2}$/;
        var phoneVal = $("#phone").val();
        var numbers = phoneVal.split("").length;
	    if(10 <= numbers && numbers <= 20 && phoneRegExp.test(phoneVal)) {
		$('#msg').html("valid phone number.");		            
        } else {
		$('#msg').html("Please enter valid phone number.");
		return false;
		}
        }


   $(function() {
   $('#form1').submit(function(){
    var first_name = $('#first_name').val();
	var last_name = $('#last_name').val();
	var sb_number = $('#sb_number').val();
	var type = $("input[name='type']:checked").val();
	var travel_type = $("input[name='travel_type']:checked").val();
	


	
	
	var valid = true;
	if(first_name == ''){
	$('#reqfirstMsg').html("Please enter your firstname.");
	valid=false;
	} else {
	$('#reqfirstMsg').html("");
	}
	
	if(last_name == ''){
	$('#reqlastMsg').html("Please enter your lastname.");
	valid=false;
	} else {
	$('#reqlastMsg').html("");
	}
	
	if(sb_number == ''){
	$('#sbMsg').html("Please enter your lastname.");
 	valid=false;
	} else {
	$('#sbMsg').html("");
	}
	

	if((type == '') || (type == undefined)) {
	$('#typeMsg').html("Please select travel type.");
 	valid = false;
	} else {
	$('#typeMsg').html("");
	}
	
	if(type == 'Airport Transfer') {
	
	 if((travel_type == '') || (travel_type == undefined))  {
	  $('#travelTypeMsg').html("Please select travel type.");
 	  valid=false;
	 } else {
     $('#travelTypeMsg').html("");
	 }
	 
	 
	 if(travel_type == 'Pick up' ) {
	  
	  if($('#airportCarArrPreference').val() == ''){
	  $('#airportCarArrMsg').html("Please enter your car preference.");
 	  valid=false;
	  } else {
	  $('#airportCarArrMsg').html("");
	  }
	  
	  
	  if($('#arrival_date').val() == ''){
	  $('#adMsg').html("Please select arrival date.");
 	  valid=false;
	  } else {
	  $('#adMsg').html("");
	  }
	  
	  if($('#arrival_time').val() == ''){
	  $('#atMsg').html("Please enter arrival time.");
 	  valid=false;
	  } else {
	  $('#atMsg').html("");
	  }
	  
	  if($('#arrival_flight_detail').val() == ''){
	  $('#afdMsg').html("Please enter flight details.");
 	  valid=false;
	  } else {
	  $('#afdMsg').html("");
	  }
	  
	 }
	 
	  if(travel_type == 'Drop') {
	   
	  if($('#airportCarDepPreference').val() == ''){
	  $('#airportCarDepMsg').html("Please enter your car preference.");
 	  valid=false;
	  } else {
	  $('#airportCarDepMsg').html("");
	  }
	   
	   
	   if($('#departure_date').val() == ''){
	   $('#ddMsg').html("Please select departure date.");
 	   valid=false;
	   } else {
	  $('#ddMsg').html("");
	  }
	   
	   if($('#departure_time').val() == ''){
	   $('#dtMsg').html("Please select departure time.");
 	   valid=false;
	   } else {
	  $('#dtMsg').html("");
	  }
	   
	   if($('#departure_flight_detail').val() == ''){
	   $('#dfdMsg').html("Please enter departure flight details.");
 	   valid=false;
	   } else {
	  $('#dfdMsg').html("");
	  }
	 
	  }
	 
	
	}
	
   if(type == 'Local Transportation') {
	
	  if($('#car_preference').val() == ''){
	   $('#ltCarpMsg').html("Please enter your car preference.");
 	   valid=false;
	   } else {
	  $('#ltCarpMsg').html("");
	  }
	  
	  if($('#local_transfer_date').val() == ''){
	   $('#ltTransferMsg').html("Please enter your car preference.");
 	   valid=false;
	   } else {
	  $('#ltTransferMsg').html("");
	  }
	  
	  if($('#pickup_location').val() == ''){
	   $('#pickupMsg').html("Please enter your car preference.");
 	   valid=false;
	   } else {
	  $('#pickupMsg').html("");
	  }
	  
	  if($('#time_to_report').val() == ''){
	   $('#ltRtdMsg').html("Please enter your car preference.");
 	   valid=false;
	   } else {
	  $('#ltRtdMsg').html("");
	  }
	  
	  if($('#guest_contact_details').val() == ''){
	   $('#ltGcdMsg').html("Please enter contact details.");
 	   valid=false;
	   } else {
	  $('#ltGcdMsg').html("");
	  }
	  
	  if($('#drop_location_details').val() == ''){
	   $('#ltDldMsg').html("Please enter contact details.");
 	   valid=false;
	   } else {
	  $('#ltDldMsg').html("");
	  }
	  
   }
   
   
   
   if(type == 'Day Use') {
	
	  if($('#day_car_preference').val() == ''){
	   $('#duCarpMsg').html("Please enter your car preference.");
 	   valid=false;
	   } else {
	  $('#duCarpMsg').html("");
	  }
	  
	  if($('#date_transfer_date').val() == ''){
	   $('#duDate').html("Please select transfer date.");
 	   valid=false;
	   } else {
	  $('#duDate').html("");
	  }
	  
	  if($('#pickup_location_address').val() == ''){
	   $('#duPickuplocation').html("Please enter pickup location.");
 	   valid=false;
	   } else {
	  $('#duPickuplocation').html("");
	  }
	  
	  if($('#day_report_time_driver').val() == ''){
	   $('#duRTforDriverMsg').html("Please enter reporting time for driver.");
 	   valid=false;
	   } else {
	  $('#duRTforDriverMsg').html("");
	  }
	  
	  if($('#day_guest_contact_details').val() == ''){
	   $('#duGCD').html("Please enter contact details.");
 	   valid=false;
	   } else {
	  $('#duGCD').html("");
	  }
   }
	  
   
   
	//alert(valid);
    if(valid == true) {
    $.post('cab_booking_process.php', $('#form1').serialize(), function(data) {
    //alert(data);
	//return false;
	if(data == 1) {
     location.href = "cab_thank_you.php";
	} else {
     alert("Unable to submit your details");	
	}
    }); 
    }
 return false; 
    });
  
});


 
  
   $(function() {
	   
	$('#arrival_time').timepicker({
    timeFormat: 'h:mm p',
    interval: 15,
    minTime: '1:00am',
    maxTime: '12:00pm',
    defaultTime: '10',
    startTime: '01:00am',
    dynamic: false,
    dropdown: true,
    scrollbar: true
    });
	
	$('#departure_time').timepicker({
    timeFormat: 'h:mm p',
    interval: 15,
    minTime: '1:00am',
    maxTime: '12:00pm',
    defaultTime: '10',
    startTime: '01:00am',
    dynamic: false,
    dropdown: true,
    scrollbar: true
    });
	
	$('#time_to_report').timepicker({
    timeFormat: 'h:mm p',
    interval: 15,
    minTime: '1:00am',
    maxTime: '12:00pm',
    defaultTime: '10',
    startTime: '01:00am',
    dynamic: false,
    dropdown: true,
    scrollbar: true
    });
	
	$('#day_report_time_driver').timepicker({
    timeFormat: 'h:mm p',
    interval: 15,
    minTime: '1:00am',
    maxTime: '12:00pm',
    defaultTime: '10',
    startTime: '01:00am',
    dynamic: false,
    dropdown: true,
    scrollbar: true
    });
	   
    
	$("#arrival_date").datepicker({
			  dateFormat: 'dd/mm/yy', 
			  changeMonth: true,
			  onClose: function(selected) {
				$("#departure_date").datepicker( "option", "minDate", selected);
			  }
	});
		
	$("#departure_date").datepicker({
			  dateFormat: 'dd/mm/yy', 
			  changeMonth: true,
			  onClose: function(selected) {
			   $("#arrival_date").datepicker("option", "maxDate", selected);
	}
	});		
	
	$("#local_transfer_date").datepicker({
			  dateFormat: 'dd/mm/yy', 
			  changeMonth: true
	});	
	
	$("#date_transfer_date").datepicker({
			  dateFormat: 'dd/mm/yy', 
			  changeMonth: true
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
 
</script>
</head>
<body>
<div class="container">
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#myNavbar">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
         <div class="navbar-left logo"> 
           <img src="images/shobiz_logo.png" border="0">
          </div>
        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="#intro">Home</a></li>
   				<!--<li><a href="#about">About</a></li>
   				<li><a href="#portfolio">Menu</a></li>
    			<li><a href="#contact">Reserve</a></li>-->
            </ul>
        </div>
    </div>
</nav>
<div class="bs-example">
    <form name="form1" id="form1" method="post">
        <div class="form-group">
            <label for="inputEmail">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your first name">
            <span id="reqfirstMsg" class="error"></span>
        </div>
        <div class="form-group">
            <label for="inputEmail">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your last name">
            <span id="reqlastMsg" class="error"></span>
        </div> <!-- Add a phone number later if names are duplicate -->
         <div class="form-group">
            <label for="inputPassword">SB Number</label>
            <input type="text" class="form-control" id="sb_number" name="sb_number"  placeholder="Enter your SB Number" >
            <span id="sbMsg" class="error"></span>
        </div>
        <div class="form-group">
         <div><label for="inputPassword">Transfer Type</label></div>
        <label class="radio-inline"><input type="radio" name="type" id="type1" value="Airport Transfer" > Airport Transfers</label>
        <label class="radio-inline"><input type="radio" name="type" id="type2" value="Local Transportation"> Local Transportation</label>
        <label class="radio-inline"><input type="radio" name="type" id="type3" value="Day Use"> Day Use</label>
         <div id="typeMsg" class="error"></div>
        </div>
        
        <div id="airportTransferDiv" style="display:none; border:rgba(86,78,78,1.00) solid 0px;">
        <div class="form-group">
         <div><label for="inputPassword">Travel Type</label></div>
        <label class="radio-inline"><input type="checkbox" name="travel_type" id="travel_type1" value="Pick up" checked> Pick up</label>
        <label class="radio-inline"><input type="checkbox" name="travel_type" id="travel_type2" value="Drop"> Drop</label>
         <div id="travelTypeMsg" class="error"></div>
        </div>  
        
        
        <div id="arrivalDateDiv" style="display:none;">
        <div class="form-group">
            <label for="inputPassword">Car Preference</label>
            <input type="text" class="form-control" id="airportCarArrPreference" name="airportCarArrPreference" autocomplete="off"  placeholder="5 Seater">
            <span id="airportCarArrMsg" class="error"></span>
        </div>
        <div class="form-group">
            <label for="inputPassword">Arrival Date</label>
            <input type="text" class="form-control" id="arrival_date" name="arrival_date" autocomplete="off"  placeholder="Arrival Date">
            <span id="adMsg" class="error"></span>
        </div>
        <div class="form-group">
            <label for="inputPassword">Arrival Time</label>
            <input type="text" class="form-control time" id="arrival_time" name="arrival_time" autocomplete="off" placeholder="Arrival Time">
           <span id="atMsg" class="error"></span>
        </div> 
        
        <div class="form-group">
            <label for="inputPassword">Arrival Flight Details</label>
            <input type="text" class="form-control" id="arrival_flight_detail" name="arrival_flight_detail" autocomplete="off" placeholder="Enter Flight details (SG167)" >
           <span id="afdMsg" class="error"></span>
        </div>
        </div>
        
        <div id="departureDateDiv" style="display:none;">
        <div class="form-group">
            <label for="inputPassword">Car Preference</label>
            <input type="text" class="form-control" id="airportCarDepPreference" name="airportCarDepPreference" autocomplete="off"  placeholder="5 Seater">
            <span id="airportCarDepMsg" class="error"></span>
        </div>
        <div class="form-group">
            <label for="inputPassword">Departure Date</label>
            <input type="text" class="form-control" id="departure_date" name="departure_date" autocomplete="off"  placeholder="Departure Date">
            <span id="ddMsg" class="error"></span>
        </div>
        <div class="form-group">
            <label for="inputPassword">Departure Time</label>
            <input type="text" class="form-control time" id="departure_time" name="departure_time" autocomplete="off" placeholder="Departure Time">
           <span id="dtMsg" class="error"></span>
        </div> 
        
        <div class="form-group">
            <label for="inputPassword">Departure Flight Details</label>
            <input type="text" class="form-control" id="departure_flight_detail" name="departure_flight_detail" autocomplete="off" placeholder="Departure Flight Detail">
           <span id="dfdMsg" class="error"></span>
        </div>
        </div>
       
         </div>
        
        
        <div id="localTransferDiv" style="display:none;border:rgba(86,78,78,1.00) solid 0px;">
        <div class="form-group">
            <label for="inputPassword">Car Preference</label>
            <input type="text" class="form-control" id="car_preference" name="car_preference" autocomplete="off"  placeholder="5 Seater">
            <span id="ltCarpMsg" class="error"></span>
        </div>
         <div class="form-group">
            <label for="inputPassword">Date</label>
            <input type="text" class="form-control" id="local_transfer_date" name="local_transfer_date" autocomplete="off"  placeholder="Local Transfer Date">
            <span id="ltTransferMsg"></span>
        </div>
        
        <div class="form-group">
            <label for="inputPassword">Pickup Location Address</label>
            <input type="text" class="form-control" id="pickup_location" name="pickup_location" autocomplete="off"  placeholder="Pickup Location">
            <span id="ltpickupMsg" class="error"></span>
        </div>
        
         <div class="form-group">
            <label for="inputPassword">Reporting Time For Driver</label>
            <input type="text" class="form-control time" id="time_to_report" name="time_to_report" autocomplete="off" placeholder="Enter reporting time for driver">
            <span id="ltRtdMsg" class="error"></span>
        </div>
        
         <div class="form-group">
            <label for="inputPassword">Guest Contact Details</label>
            <input type="text" class="form-control" id="guest_contact_details" name="guest_contact_details" autocomplete="off" placeholder="Guest Contact Details">
            <span id="ltGcdMsg" class="error"></span>
        </div>
        
         <div class="form-group">
            <label for="inputPassword">Drop Location Details</label>
            <input type="text" class="form-control" id="drop_location_details" name="drop_location_details" autocomplete="off" placeholder="Drop Location Details">
            <span id="ltDldMsg" class="error"></span>
        </div>
        </div>
        
        <div id="dayuseTransferDiv" style="display:none; border:rgba(14,10,10,1.00) solid 0px;">
        <div class="form-group">
            <label for="inputPassword">Car Preference</label>
            <input type="text" class="form-control" id="day_car_preference" name="day_car_preference" autocomplete="off"  placeholder="5 Seater">
            <span id="duCarpMsg" class="error"></span>
        </div>
        
        <div class="form-group">
            <label for="inputPassword">Date</label>
            <input type="text" class="form-control" id="date_transfer_date" name="date_transfer_date" autocomplete="off"  placeholder="Date Transfer Date">
            <span id="duDate" class="error"></span>
        </div>
        
        <div class="form-group">
            <label for="inputPassword">Pickup Location Address</label>
            <input type="text" class="form-control" id="pickup_location_address" name="pickup_location_address" autocomplete="off"  placeholder="Pickup Location Address">
            <span id="duPickuplocation" class="error"></span>
        </div>
        
        <div class="form-group">
            <label for="inputPassword">Reporting Time for driver</label>
            <input type="text" class="form-control time" id="day_report_time_driver" name="day_report_time_driver" autocomplete="off"  placeholder="Reporting time for driver">
            <span id="duRTforDriverMsg" class="error"></span>
        </div>
        
         <div class="form-group">
            <label for="inputPassword">Guest Contact Details</label>
            <input type="text" class="form-control" id="day_guest_contact_details" name="day_guest_contact_details" autocomplete="off"  placeholder="Guest Contact Details">
            <span id="duGCD" class="error"></span>
        </div>
        </div>
        <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
</div>
</div>
</body>
</html>                            
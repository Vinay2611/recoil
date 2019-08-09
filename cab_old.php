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
<script src="js/datepicker/jquery-ui.js" type="text/javascript"></script>
<link rel="stylesheet" href="js/datepicker/jquery-ui.css">
<link rel="stylesheet" href="css/flip-switch.css">
<style>
    .bs-example{
        margin: 20px;        
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
    var requestor_name = $('#requestor_name').val();
	var sb_number = $('#sb_number').val();
	var leaving_from = $('#leaving_from').val();
	var leaving_to = $('#leaving_to').val();
	
	var departure_date = $('#departure_date').val();
	var return_date = $('#return_date').val();
    var travel_type = $("input[name='travel_type']:checked").val();
	var type = $("input[name='type']:checked").val();
	
	
	
	var valid = true;
	if(requestor_name == ''){
	$('#msg1').html("Please enter your firstname.");
	valid=false;
	}
	
	if(sb_number == ''){
	$('#msg2').html("Please enter your lastname.");
 	valid=false;
	}
	
	if(travel_type == ''){
	$('#msgTravel').html("Please select travel type.");
 	valid = false;
	}
	
	if(type == ''){
	$('#msgType').html("Please select type.");
 	valid = false;
	}
	
	if(leaving_from == ''){
	$('#msg3').html("Please enter your lastname.");
 	valid=false;
	}
	
	if(leaving_to == ''){
	$('#msg4').html("Please enter your lastname.");
 	valid=false;
	}
	
	if(departure_date == ''){
	$('#msg5').html("Please enter your lastname.");
 	valid=false;
	}
	
	if(return_date == ''){
	$('#msg6').html("Please enter your lastname.");
 	valid=false;
	}

	
    if(valid == true) {
    $.post('cab_booking_process.php', $('#form1').serialize(), function(data) {
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
  } );

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
            <label for="inputEmail">Requestor Name</label>
            <input type="text" class="form-control" id="requestor_name" name="requestor_name" placeholder="Enter your full name" required>
            <span id="msg1"></span>
        </div>
         <div class="form-group">
            <label for="inputPassword">SB Number</label>
            <input type="text" class="form-control" id="sb_number" name="sb_number"  placeholder="Enter your SB Number" required>
            <span id="msg2"></span>
        </div>
        <div class="form-group">
         <div><label for="inputPassword">Travel Type</label></div>
        <label class="radio-inline"><input type="radio" name="travel_type" id="travel_type1" value="Pick up" checked> Pick up</label>
        <label class="radio-inline"><input type="radio" name="travel_type" id="travel_type2" value="Drop"> Drop</label>
         <span id="msgTravel"></span>
        </div>   
        <div class="form-group">
         <div><label for="inputPassword">Type</label></div>
        <label class="radio-inline"><input type="radio" name="type" id="type1" value="Fullday" required> Full Day</label>
        <label class="radio-inline"><input type="radio" name="type" id="type2" value="Outstation"> Outstation</label>
         <span id="msgType"></span>
        </div>  
         <div class="form-group">
            <label for="inputPassword">Leaving from</label>
            <input type="text" class="form-control" id="leaving_from" name="leaving_from"  placeholder="Enter from location" required>
            <span id="msg3"></span>
        </div>
        <div class="form-group">
            <label for="inputPassword">To</label>
            <input type="text" class="form-control" id="leaving_to" name="leaving_to"  placeholder="Enter to location" required>
             <span id="msg4"></span>
        </div>  
        
         <div class="form-group">
            <label for="inputPassword">Departure Date</label>
            <input type="text" class="form-control" id="departure_date" name="departure_date" autocomplete="off"  placeholder="Departure Date" required>
            <span id="msg5"></span>
        </div>
        <div class="form-group">
            <label for="inputPassword">Return Date</label>
            <input type="text" class="form-control" id="return_date" name="return_date" autocomplete="off" placeholder="Return Date" required>
           <span id="msg6"></span>
        </div>   
        <div class="form-group">
            <label for="inputPassword">Travel Details:</label><br>
            <textarea class="form-control" name="travel_details" id="travel_details" cols="45" rows="4" placeholder="Enter description of your work trip"></textarea>
            <span id="msg7"></span>
        </div>      
        <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
</div>
</div>
</body>
</html>                            
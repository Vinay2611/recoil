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
     alert("Your have sent your details successfully.");
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
    <div class="container">

    <h3>Thank you, We have received your request.</h3>
   
    </div>
</div>
</div>
</body>
</html>                            
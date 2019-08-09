<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Shobiz : Cab Booking</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
	
	
	var valid = true;
	if(requestor_name == ''){
	$('#msg').html("Please enter your firstname.");
	valid=false;
	}
	
	if(sb_number == ''){
	$('#msg').html("Please enter your lastname.");
 	valid=false;
	}
	
	if(leaving_from == ''){
	$('#msg').html("Please enter your lastname.");
 	valid=false;
	}
	
	if(leaving_to == ''){
	$('#msg').html("Please enter your lastname.");
 	valid=false;
	}
	
	if(departure_date == ''){
	$('#msg').html("Please enter your lastname.");
 	valid=false;
	}
	
	if(return_date == ''){
	$('#msg').html("Please enter your lastname.");
 	valid=false;
	}

	
    if(valid == true) {
   $.post('submit.php', $('#form1').serialize(), function(data) {
   $('#msg').html(data);
   }); 
  }

    });
  
});
</script>
</head>
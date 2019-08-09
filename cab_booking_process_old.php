<?php
include("config.php");

/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/

if(isset($_POST['sb_number'])) {
$requestor_id = substr($_POST['sb_number'],4).date('dmy'); 
$requestor_name = $_POST['requestor_name'];
$sb_number = $_POST['sb_number'];
$leaving_from = $_POST['leaving_from'];
$leaving_to = $_POST['leaving_to'];
$departure_date = $_POST['departure_date'];
$return_date = $_POST['return_date'];
$travel_details = $_POST['travel_details'];
$travel_type = $_POST['travel_type'];
$type = $_POST['type'];

  //echo "INSERT INTO shobiz_travel_request SET request_id='".$requestor_id."',requestor_name='".$requestor_name."',sb_number='".$sb_number."',leaving_from='".$leaving_from."',leaving_to='".$leaving_to."',departure_date='".$departure_date."',return_date='".$return_date."',travel_details='".$travel_details."'";
    $status = "";
    $insSql = $db->query("INSERT INTO shobiz_travel_request SET request_id='".$requestor_id."',requestor_name='".$requestor_name."',sb_number='".$sb_number."',leaving_from='".$leaving_from."',leaving_to='".$leaving_to."',departure_date='".$departure_date."',return_date='".$return_date."',travel_type='".$travel_type."',type='".$type."',travel_details='".$travel_details."'");
	if($insSql) {
	 $status = 1;	
	} else {
	 $status = 0;	
	}
   echo $status;
}
?>
<?php
include("config.php");
if(isset($_POST['sb_number'])) {
$postData = $_POST;
$requestor_id = substr($_POST['sb_number'],4).date('dmy'); 
$status = "";
 $insSql = $db->query("INSERT INTO `shobiz_travel_request` SET `request_id` = '".$requestor_id."', `first_name` = '".$postData['first_name']."',`last_name` = '".$postData['last_name']."', `sb_number` = '".$postData['sb_number']."', `type` = '".$postData['type']."', `travel_type` = '".$postData['travel_type']."', `airportCarArrPreference` = '".$postData['airportCarArrPreference']."', `arrival_date` = '".$postData['arrival_date']."', `arrival_time` = '".$postData['arrival_time']."', `arrival_flight_detail` = '".$postData['arrival_flight_detail']."',`airportCarDepPreference` = '".$postData['airportCarDepPreference']."',`departure_date` = '".$postData['departure_date']."', `departure_time` = '".$postData['departure_time']."', `departure_flight_detail` = '".$postData['departure_flight_detail']."', `local_transfer_date` = '".$postData['local_transfer_date']."', `pickup_location` = '".$postData['pickup_location']."', `time_to_report` = '".$postData['time_to_report']."', `guest_contact_details` = '".$postData['guest_contact_details']."', `drop_location_details` = '".$postData['drop_location_details']."', `day_car_preference` = '".$postData['day_car_preference']."', `date_transfer_date` = '".$postData['day_car_preference']."', `pickup_location_address` = '".$postData['pickup_location_address']."', `day_report_time_driver` = '".$postData['day_report_time_driver']."', `day_guest_contact_details` = '".$postData['day_guest_contact_details']."'");
	if($insSql) {
	 $status = 1;	
	} else {
	 $status = 0;	
	}
   echo $status;
}
?>
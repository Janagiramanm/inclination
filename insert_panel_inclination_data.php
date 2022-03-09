
<?php

include('Connection/connection.php'); // database connection 
$inputJSON = file_get_contents('php://input');
$_POST= json_decode($inputJSON,true);


$solar_panel_id=$_POST['solar_panel_id'];
$solar_panel_name=$_POST['solar_panel_name'];
$inclination_angle_1=$_POST['inclination_angle_1'];
$inclination_angle_2=$_POST['inclination_angle_2'];
$updater_empl_id=$_POST['updater_empl_id'];
$location=$_POST['location'];
$time=date("Y-m-d h:i");


$insertdata=mysqli_query($conn,"INSERT INTO `solar_panel_inclination_data`(`solar_panel_id`, `solar_panel_name`, `panel_inclination_angle_1`, `panel_inclination_angle_2`, `updater_empl_id`, `time`, `location`) VALUES ('$solar_panel_id','$solar_panel_name','$inclination_angle_1','$inclination_angle_2','$updater_empl_id','$time','$location')");


if(mysqli_affected_rows($conn)>0)

{
	$result["status"]="success";
	$result['message']="Data inserted Successfully";

	$update="UPDATE `solar_panel_system_information` SET `no_of_visits`=no_of_visits + 1 WHERE `solar_panel_id`='$solar_panel_id'";

	$update_data=mysqli_query($conn,$update);





}
else
{
	
	$result["status"]="failure";
	$result['message']="Data not inserted";
}


echo json_encode($result);


?>
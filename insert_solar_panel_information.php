
<?php

include('Connection/connection.php'); // database connection 
$inputJSON = file_get_contents('php://input');
$_POST= json_decode($inputJSON,true);


$solar_panel_name=$_POST['solar_panel_name'];
$address=$_POST['address'];
$install_angle_1=$_POST['install_angle_1'];
$install_angle_2=$_POST['install_angle_2'];

$time=date("Y-m-d h:i");


$insertdata=mysqli_query($conn,"INSERT INTO `solar_panel_system_information`(`solar_panel_name`, `installation_address`, `time`, `installation_angle_1`, `installation_angle_2`, `no_of_visits`) VALUES ('$solar_panel_name','$address','$time','$install_angle_1','$install_angle_2','0')");

if(mysqli_affected_rows($conn)>0)

{
	$result["status"]="success";
	$result['message']="Data inserted Successfully";


}
else
{
	
	$result["status"]="failure";
	$result['message']="Data not inserted";
}


echo json_encode($result);


?>
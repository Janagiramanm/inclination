<?php

include('Connection/connection.php'); // database connection 
$inputJSON = file_get_contents('php://input');
$_POST= json_decode($inputJSON,true);


if(!$_POST['empl_id']=="")
{

$empl_id=$_POST['empl_id'];
$solar_panel_id=$_POST['solar_panel_id'];


$systemdata=mysqli_query($conn,"SELECT * FROM `solar_panel_inclination_data`  where `solar_panel_id`=$solar_panel_id ");

$numrows=mysqli_num_rows($systemdata);

$data=array();


$statusarray=array();
$userdata=array();

if($numrows>0)
{

	$statusarray['status']="success";
	$statusarray['message']="Data exist";
	$statusarray['info']=array();


while($rows=mysqli_fetch_assoc($systemdata))
{
	

	$userdata["solar_panel_id"]=$rows['solar_panel_id'];
	$userdata["solar_panel_name"]=$rows['solar_panel_name'];
	$userdata["panel_inclination_angle_1"]=$rows['panel_inclination_angle_1'];
	$userdata["panel_inclination_angle_2"]=$rows['panel_inclination_angle_2'];
	$userdata["updater_empl_id"]=$rows['updater_empl_id'];
	$userdata["time"]=$rows['time'];

	array_push($statusarray['info'], $userdata);

}


}
else
{
	$statusarray['status']="failure";
	$statusarray['message']="No data available";
	$statusarray['data']=array();
}

}
else {
	$statusarray['status']="failure";
	$statusarray['message']="Unauthorised";
	$statusarray['data']=array();
	
	
}

$jsondata=json_encode($statusarray, JSON_PRETTY_PRINT);

echo $jsondata;


?>
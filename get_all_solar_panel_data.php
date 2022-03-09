
<?php

include('Connection/connection.php'); // database connection 
$inputJSON = file_get_contents('php://input');
$_POST= json_decode($inputJSON,true);


if(!$_POST['empl_id']=="")
{

$empl_id=$_POST['empl_id'];


$systemdata=mysqli_query($conn,"SELECT * FROM `solar_panel_system_information`");

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
	$userdata["installation_address"]=$rows['installation_address'];
	$userdata["installation_angle_1"]=$rows['installation_angle_1'];
	$userdata["installation_angle_2"]=$rows['installation_angle_2'];
	$userdata["no_of_visits"]=$rows['no_of_visits'];

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
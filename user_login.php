
<?php

include('Connection/connection.php'); // database connection 
$inputJSON = file_get_contents('php://input');
$_POST= json_decode($inputJSON,true);



$mobile=$_POST['mobile'];
$password=$_POST['password'];


$checkdata=mysqli_query($conn,"SELECT * FROM `user_registration` WHERE `mobile`='$mobile' && `password`='$password' ");


$numrows=mysqli_num_rows($checkdata);

$statusarray=array();
$userdata=array();

if($numrows>0)
{
	$statusarray['status']="success";
	$statusarray["message"]="Login Successfull";

	$statusarray["data"]=array();

	

while($rows=mysqli_fetch_assoc($checkdata))
{
	
	$userdata["name"]=$rows['name'];
	$userdata["mobile"]=$rows['mobile'];
	$userdata["empl_id"]=$rows['empl_id'];
	$userdata['message']="Login Successfull";

	array_push($statusarray["data"],$userdata);

echo json_encode($statusarray);
die();


}



}
else
{
    $statusarray['status']="failure";
	$statusarray["message"]="invalid credentials";
	$statusarray["data"]=array();

	
}



echo json_encode($statusarray);


?>
<?php  
include('Connection/connection.php'); // database connection 



?>

<html >

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  position: center;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body >

<h2>    Insert Solar Panel Data</h2>

<form method="post" action = "" >

	<div class="container">
 
  <label for="lname">Solar Panel Name</label><br>
  <input type="text" placeholder="Solar Panel Name" id="solar_panel_name" name="solar_panel_name" value=""required><br><br>

   <label for="lname">Solar Panel Installation Location</label><br>
  <input type="text" placeholder="Solar Panel Installation Location" id="location" name="location" value=""required><br><br>

   <label for="lname">Solar Panel Installation Angle 1</label><br>
  <input type="text" placeholder="Solar Panel Installation Angle 1" id="install_angle_1" name="install_angle_1" value=""required><br><br>

   <label for="lname">Solar Panel Installation Angle 2</label><br>
  <input type="text" placeholder="Solar Panel Installation Angle 2" id="install_angle_2" name="install_angle_2" value="" required><br><br>

   <button name="click" class="click">Submit</button>

</div>
</form> 


</body>
</html>

<?php 

if(isset($_POST['click']))
{
	if($_POST['solar_panel_name']=="" || $_POST['location']==""||$_POST['install_angle_1'] =="" || $_POST['install_angle_2']=="" )
	
	{


		print_r("please fill all the data");
		exit();

	}
	else 
	{

$solar_panel_name=$_POST['solar_panel_name'];
$address=$_POST['location'];
$install_angle_1=$_POST['install_angle_1'];
$install_angle_2=$_POST['install_angle_2'];

$time=date("Y-m-d h:i");


$insertdata=mysqli_query($conn,"INSERT INTO `solar_panel_system_information`(`solar_panel_name`, `installation_address`, `time`, `installation_angle_1`, `installation_angle_2`, `no_of_visits`) VALUES ('$solar_panel_name','$address','$time','$install_angle_1','$install_angle_2','0')");


if(mysqli_affected_rows($conn)>0)

{
	$result["status"]="success";
	$result['message']="Data inserted Successfully";

	echo '<script>alert("Data inserted Successfully")</script>';


}
else
{
	
	$result["status"]="failure";
	$result['message']="Data not inserted";
}


//echo json_encode($result);

}
}
 ?>
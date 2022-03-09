
<?php
date_default_timezone_set('Asia/Kolkata');
$dbuser="root";
$dbpass="indiaNetiapps231$$";
$dbname="inclination";  //the name of the database
$host="localhost";

$conn = mysqli_connect($host,$dbuser,$dbpass,$dbname);
if (mysqli_connect_errno())
  {
 echo "Failing to connect ";
  }
  else{
    // echo"connected...";
  }
//$conn->close();



?>

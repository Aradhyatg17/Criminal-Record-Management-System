<?php
// Connecting to the Database
$server = "localhost";
$username = "root";
$password = "";
$database = "criminal_record_management";

// Create a connection
$con = mysqli_connect($server, $username, $password,$database);
// Die if connection was not successful
if (!$con){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$cno=$_GET['cn'];
$query = "DELETE FROM criminal_info WHERE Criminal_ID='$cno'";

$data=mysqli_query($con,$query);

if($data)
{
     echo "<font color='green'>Record Deleted from Database";
}
else
{
     echo "<font color='red'>Failed to Delete Record from Database";
}
?>

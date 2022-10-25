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

$jno=$_GET['jn'];
$query = "DELETE FROM jail_details WHERE Jail_Number='$jno'";

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

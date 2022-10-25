<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Criminal Record Management System</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th>Criminal_ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Date_of_Birth</th>
        <th>Height</th>
        <th>Blood_Group</th>
        <th>Crime_Committed</th>
        <th>Prior_Arrest</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Jail_Number</th>
        <th>FIR_Number</th>
        <th>Operation</th>
      </tr>



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

$sql = "SELECT * FROM `criminal_info`";
$result = mysqli_query($con, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
// Display the rows returned by the sql query
if($num> 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // We can fetch in a better way using the while loop
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        // echo $row['Criminal_ID'] .  " ". $row['Name'] ." ". $row['Age'] ." ".
        // $row['Gender'] ." ". $row['Date_of_Birth'] ." ". $row['Height'] ." ".
        // $row['Blood_Group'] ." ". $row['Crime_Committed'] ." ".
        // $row['Prior_Arrest'] ." ". $row['Address'] ." ". $row['Phone'] ." ".
        // $row['Jail_Number'] ." ". $row['FIR_Number'];
        // echo "<br>";

        echo "
        <tr>
        <td>".$row['Criminal_ID']."</td>
        <td>".$row['Name']."</td>
        <td>".$row['Age']."</td>
        <td>".$row['Gender']."</td>
        <td>".$row['Date_of_Birth']."</td>
        <td>".$row['Height']."</td>
        <td>".$row['Blood_Group']."</td>
        <td>".$row['Crime_Committed']."</td>
        <td>".$row['Prior_Arrest']."</td>
        <td>".$row['Address']."</td>
        <td>".$row['Phone']."</td>
        <td>".$row['Jail_Number']."</td>
        <td>".$row['FIR_Number']."</td>
        <td><a href = 'delete_criminal_record.php?cn=$row[Criminal_ID]'>Delete</td>
        </td>
        </tr>
        ";
    }


}
else
{
        echo "No records found";
}
?>

    </table>
  </body>
</html>

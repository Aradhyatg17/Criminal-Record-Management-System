<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Criminal Record Management System</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th>Police_ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Date_of_Birth</th>
        <th>Phone</th>
        <th>Address</th>
        <th>No_of_Arrest</th>
        <th>Police_Station</th>
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

$sql = "SELECT * FROM `police_info`";
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
        <td>".$row['Police_ID']."</td>
        <td>".$row['Name']."</td>
        <td>".$row['Age']."</td>
        <td>".$row['Gender']."</td>
        <td>".$row['Date_of_Birth']."</td>
        <td>".$row['Address']."</td>
        <td>".$row['Phone']."</td>
        <td>".$row['No_of_Arrest']."</td>
        <td>".$row['Police_Station']."</td>
        <td><a href = 'update_police_record.php?pid=$row[Police_ID] &
        nm=$row[Name] & ag=$row[Age] & gn=$row[Gender] &
        db=$row[Date_of_Birth] & ad=$row[Address] &
        ph=$row[Phone] & na=$row[No_of_Arrest] &
        ps=$row[Police_Station]'>Update</td>
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

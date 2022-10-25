<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Criminal Record Management System</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th>Jail_Number</th>
        <th>Jail_Name</th>
        <th>No_of_Prisoners</th>
        <th>Level_of_Jail</th>
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

$sql = "SELECT * FROM `jail_details`";
$result = mysqli_query($con, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
// Display the rows returned by the sql query
if($num> 0){

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
        <td>".$row['Jail_Number']."</td>
        <td>".$row['Jail_Name']."</td>
        <td>".$row['No_of_Prisoners']."</td>
        <td>".$row['Level_of_Jail']."</td>
        <td><a href = 'delete_jail_record.php?jn=$row[Jail_Number]'>Delete</td>
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

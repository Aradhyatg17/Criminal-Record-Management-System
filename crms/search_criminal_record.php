
<!DOCTYPE html>
<html>
  <head>
    <title>Criminal Record Management System</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label {
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #ffa69e;
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("/uploads/media/default/0001/02/234656e7acbca4625305dd37e7344af8eff32383.jpeg");
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2);
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #ffa69e;
      }
      .item:hover p, .item:hover i, .question1:hover p, .question1 label:hover, input:hover::placeholder {
      color: #ffa69e;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0 #ffa69e;
      color: #ffa69e;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #ffa69e;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #ffa69e;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #ffa69e;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }

      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio1 {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question1 span {
      margin-left: 30px;
      }
      .question1-answer label {
      display: block;
      }
      label.radio1:before1 {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before1, label.radio1:hover:before1 {
      border: 2px solid #ffa69e;
      }
      label.radio1:after1 {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #ffa69e;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after1 {
      opacity: 1;
      }

      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background: #ffa69e;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #3e2f5b;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="search_criminal_record.php" method="post">
        <div class="banner">
          <h1 style="color:#3e2f5b;">Criminal Record Management System</h1>
        </div>
        <p><b>Search Criminal Record</b></p>
        <div class="item">
          <label for="id">Enter Criminal ID<span>*</span></label>
          <input id="id" type="text" name="id" required/>
        </div>

        <div class="btn-block">
          <input type="submit" name="submit" value="Submit">
          <!-- <button type="submit" href='search_criminal_record.php?id=$input[Enter Criminal ID]'>SUBMIT</button> -->
        </div>
      </form>
    </div>

  </body>
</html>


<?php
if(isset($_POST["id"])){
$servername = "localhost";
$username = "root";
$password = "";
$database = "criminal_record_management";
$connection = mysqli_connect($servername,$username,$password,$database );


if (!$connection){
    die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
        echo"connected";
        echo "</br>";
    }


    $id = $_POST['id'];
    // echo"$id";
    $sql="SELECT * FROM criminal_info where Criminal_ID=$id";
    if($connection->query($sql)==True){

        // echo'yes ';
        }
        else{
        echo"error: $query_run<br> $connection->error";
        }
    $query_run = mysqli_query($connection, $sql);
    // echo"hello";

    // echo"$mysqli_num_rows($query_run)";



       while($row = mysqli_fetch_assoc($query_run))
       {

?>
<table border="1" cellspacing="3">
   <tr>

       <td><?php echo $row['Criminal_ID']; ?></td>
       <td><?php echo $row['Name']; ?></td>
       <td><?php echo $row['Age']; ?></td>
       <td><?php echo $row['Gender']; ?></td>
       <td><?php echo $row['Date_of_Birth']; ?></td>
       <td><?php echo $row['Height']; ?></td>
       <td><?php echo $row['Blood_Group']; ?></td>
       <td><?php echo $row['Crime_Committed']; ?></td>
       <td><?php echo $row['Prior_Arrest']; ?></td>
       <td><?php echo $row['Address']; ?></td>
       <td><?php echo $row['Phone']; ?></td>
       <td><?php echo $row['Jail_Number']; ?></td>
       <td><?php echo $row['FIR_Number']; ?></td>
   </tr>
</table>
<?php
       }

    // $stmt->$conn->prepare($sql);
    // $stmt->bindParam(":id_in",$id_in);
    // $stmt->execute();

    // $conn->close();
   $connection->close();
    }
    else{
        // echo"wrong id";
    }


?>

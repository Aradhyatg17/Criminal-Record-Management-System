<?php

  if(isset($_POST['Name_of_Complainer'])){
      // Set connection variables
      $server = "localhost";
      $username = "root";
      $password = "";
      $database="criminal_record_management";

      // Create a database connection
      $con = mysqli_connect($server, $username, $password,$database);

      // Check for connection success
      if(!$con){
          die("connection to this database failed due to" . mysqli_connect_error());
      }
      echo "Success connecting to the db";

      // Collect post variables
      $fir_number = $_POST['FIR_Number'];
      $name_of_complainer = $_POST['Name_of_Complainer'];
      $name_of_accused = $_POST['Name_of_Accused'];
      $incident_desc = $_POST['Incident_Desc'];
      $date_of_fir_filing = $_POST['Date_of_FIR_Filing'];
      $police_id = $_POST['Police_ID'];

      $sql = "INSERT INTO fir (`FIR_Number`, `Name_of_Complainer`,
        `Name_of_Accused`, `Incident_Desc`, `Date_of_FIR_Filing`, `Police_ID`) VALUES ('$fir_number','$name_of_complainer','$name_of_accused', '$incident_desc' ,'$date_of_fir_filing', '$police_id');";

      if($con->query($sql) == true){
        echo "Successfully inserted";}
        else{
          echo"error: $sql<br> $con->error";
          }

      $con->close();
     }
   ?>


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
         <form action="fir_details.php" method="post">
           <div class="banner">
             <h1 style="color:#3e2f5b;">Criminal Record Management System</h1>
           </div>
           <p><b>FIR Details</b></p>
           <div class="item">
             <label for="fir_number">FIR Number<span>*</span></label>
             <input id="fir_number" type="text" name="FIR_Number" required/>
           </div>
           <div class="item">
             <label for="name_of_complainer">Name of Complainer/Victim<span>*</span></label>
             <input id="name_of_complainer" type="text" name="Name_of_Complainer" required/>
           </div>
           <div class="item">
             <label for="name_of_accused">Name of Accused<span>*</span></label>
             <input id="name_of_accused" type="text" name="Name_of_Accused" required/>
           </div>
           <div class="item">
             <label for="incident_desc">Description of Incident<span>*</span></label>
             <input id="incident_desc" type="text" name="Incident_Desc" required/>
           </div>
           <div class="item">
             <label for="date_of_fir_filing">Date of FIR Filing<span>*</span></label>
             <input id="date_of_fir_filing" type="date" name="Date_of_FIR_Filing" required/>
             <i class="fas fa-calendar-alt"></i>
           </div>
           <div class="item">
             <label for="police_id">Police ID<span>*</span></label>
             <input id="police_id" type="text" name="Police_ID" required/>
           </div>

           <div class="btn-block">
             <input type="submit" name="" value="Submit">
             <!-- <button type="submit" href="/">SUBMIT</button> -->
           </div>

         </form>
       </div>
     </body>
   </html>

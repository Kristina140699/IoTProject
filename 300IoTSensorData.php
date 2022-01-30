<html>
<head>
<!-- <style>
      body{background-image: url("patterns.jpg");
        width: 100%;
        
  
  background-attachment: fixed;
  }
  .bgColor{
    background-color:#fff;
    margin:30px;
    padding: 2px;
  }
     .bg{
       margin: 5px;     
       padding: 10px;}

       a{text-decoration: none;}
    </style> -->
</head>
    <body>
    <!-- <div style="background-color:rgb(255, 255, 255, 0.6);
       width:88%; margin:20px;padding: 15px;">
       <div class="bg" > -->


<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="iotsensordata";
$conn=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn){
    die('Could not connect:'.mysql_error());
}

echo'Connected succesfully!';

$b1 = $_GET["Temperature"];
$b2 = $_GET["Humidity"];

$sql="INSERT INTO humiditytemperature(Temperature, Humidity) VALUES ('$temp','$hum')";
$result = mysqli_query($conn, $sql);

echo "Inserted!<br>"

?>
<!-- </div></div> -->
</body></html>
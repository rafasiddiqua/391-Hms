<?php
   $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $password = $_POST['password'];
    $number = $_POST['number'];
    $DoctorName = $_POST['DoctorName'];

//database connection
   $conn = new mysqli('localhost', 'root', '','hms');
   if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }else{
mysql_select_db("cms", $con);
$result = mysql_query("SELECT firstname FROM signup WHERE HMS IN (n-1)"); 

$results = array();
while($row = mysqli_fetch_assoc($query)){
     $results[] = $row;
}

 mysql_close($con);
 ?>
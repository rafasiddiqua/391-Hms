<?php
   $Date = $_POST['date'];
    $Fees = $_POST['fees'];
   $Contactno = $_POST['contactno'];
   $Medicine = $_POST['medicine'];
    $Time = $_POST['time'];
    
//database connection
   $conn = new mysqli('localhost', 'root', '','hms');
   if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }else{
    	$stmt = $conn->prepare("insert into doctor_info(date, fees, contactno, medicine, time) values(?, ?, ?, ?, ?)");
    	$stmt->bind_param("iiisi", $Date, $Fees, $Contactno, $Medicine,  $Time);
    	$stmt->execute();

      
    	echo "Doctors Information Updated";
      echo "<script> location.href='medicineinfo.html'; </script>";

    	$stmt->close();
    	$conn->close();
    }
 ?>
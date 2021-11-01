<?php
   $Name = $_POST['name'];
    $Email = $_POST['email'];
   $Contactno = $_POST['contactno'];
   $Degicnation = $_POST['degicnation'];
    $Fees = $_POST['fees'];
    $AppointmentDate = $_POST['appointment'];
    
//database connection
   $conn = new mysqli('localhost', 'root', '','hms');
   if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }else{
    	$stmt = $conn->prepare("insert into doctor_info(name, email, contactno, drgicnation, fees, appointment) values(?, ?, ?, ?, ?, ?)");
    	$stmt->bind_param("ssisii", $Name, $Email, $Contactno, $Degicnation,  $Fees, $AppointmentDate);
    	$stmt->execute();

      
    	echo "Doctors Information Updated";
      echo "<script> location.href='Appointmentinformation.html'; </script>";

    	$stmt->close();
    	$conn->close();
    }
 ?>
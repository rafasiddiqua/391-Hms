<?php
   $email = $_POST['email'];
   $password = $_POST['password'];
   

//database connection
   $conn = new mysqli('localhost', 'root', '','hms');
   if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }else{
    	$stmt = $conn->prepare("insert into signin(email, password) values(?, ?)");
    	$stmt->bind_param("ss", $email, $password);
    	$stmt->execute();
      
    	echo "Login Successful";
      echo "<script> location.href='loginindex.html'; </script>";

    	$stmt->close();
    	$conn->close();
    }
 ?>
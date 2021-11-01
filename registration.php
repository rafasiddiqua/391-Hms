<?php
   $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $password = $_POST['password'];
    $number = $_POST['number'];

//database connection
   $conn = new mysqli('localhost', 'root', '','hms');
   if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }else{
    	$stmt = $conn->prepare("insert into signup(firstName, lastName, email, gender, password, number) values(?, ?, ?, ?, ?, ?)");
    	$stmt->bind_param("sssssi", $firstName, $lastName, $email, $gender, $password, $number);
    	$stmt->execute();
      
    	echo "Registration is successful. Thanks for the ragistration. Please Check Your Email, We have sent an account activation link click the link to activate your account";
      echo "<script> location.href='signin.html'; </script>";

    	$stmt->close();
    	$conn->close();
    }
 ?>
<?php
   $Name = $_POST['name'];
    $Email = $_POST['email'];
   $Contactno = $_POST['contactno'];
   $Fathername = $_POST['fathername'];
    $Fathercontactno = $_POST['fathercontactno'];
    $Mothername = $_POST['Mothername'];
    $Mothercontactno = $_POST['Mothercontactno'];
    $LGname = $_POST['LGname'];
    $LGcno = $_POST['LGcno'];
    $Bloodgroup = $_POST['Bloodgroup'];
    $Dateofbirth = $_POST['Dateofbirth'];
    $Placeofbirth = $_POST['Placeofbirth'];
    $Gender = $_POST['Gender'];
    $Typesofcitizen = $_POST['Typesofcitizen'];
    $Age = $_POST['Age'];
    $Religion = $_POST['Religion'];
    $Profession = $_POST['Profession'];
    $Maritalstatus = $_POST['Maritalstatus'];

//database connection
   $conn = new mysqli('localhost', 'root', '','hms');
   if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }else{
    	$stmt = $conn->prepare("insert into personal_info(name, email, contactno, fathername, fathercontactno, Mothername,  Mothercontactno, LGname, LGcno,  Bloodgroup, Dateofbirth, Placeofbirth, Gender, Typesofcitizen, Age, Religion, Profession, Maritalstatus) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    	$stmt->bind_param("ssisisisisisiisssssisss", $Name, $Email, $Contactno, $Fathername,  $Fathercontactno, $Mothername,  $Mothercontactno, $LGname, $LGcno, $Bloodgroup, $Dateofbirth, $Placeofbirth, $Gender, $Typesofcitizen, $Age, $Religion, $Profession, $Maritalstatus);
    	$stmt->execute();

      
    	echo "Personal Information Updated";
      echo "<script> location.href='Doctorinformation.html'; </script>";

    	$stmt->close();
    	$conn->close();
    }
 ?>
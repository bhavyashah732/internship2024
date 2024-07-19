<?php
    $empid=$_POST['empid'];
    $firstName=$_POST['firstName'];
    $lastname=$_POST['lastName'];   
    $email=$_POST['email']; 
    $password=$_POST['password']; 
    $gender=$_POST['gender']; 
    $dob=$_POST['dob']; 
    $department=$_POST['department']; 
    $address=$_POST['address']; 
    $city=$_POST['city']; 
    $country=$_POST['country']; 
    $mobileno=$_POST['mobileno']; 

    //Database connection


$conn = new mysqli('localhost','root','','payroll ms');
if($conn->connect_error)
{
    die('Connection Failed  : '.$conn->connect_error)

else
{
    $stmt = $conn->prepare("insert into registration(empid , firstname , lastname , email , password , gender , dob , department , address , city , country , mobileno
     values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("sssssssssssi",$empid , $firstname , $lastname , $email , $password , $gender , $dob , $department , $address , $city , $country , $mobileno);
     $stmt->execute();
     $stmt->close();
     $conn->close();
}
}
?>
/*


    $sql="INSERT INTO tblemployees(EmpId,FirstName,LastName,EmailId,Password,Gender,Dob,Department,Address,City,Country,Phonenumber,Status) VALUES(:empid,:fname,:lname,:email,:password,:gender,:dob,:department,:address,:city,:country,:mobileno,:status)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':empid',$empid,PDO::PARAM_STR);
    $query->bindParam(':fname',$fname,PDO::PARAM_STR);
    $query->bindParam(':lname',$lname,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':password',$password,PDO::PARAM_STR);
    $query->bindParam(':gender',$gender,PDO::PARAM_STR);
    $query->bindParam(':dob',$dob,PDO::PARAM_STR);
    $query->bindParam(':department',$department,PDO::PARAM_STR);
    $query->bindParam(':address',$address,PDO::PARAM_STR);
    $query->bindParam(':city',$city,PDO::PARAM_STR);
    $query->bindParam(':country',$country,PDO::PARAM_STR);
    $query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
    $query->bindParam(':status',$status,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId){
    $msg="Record has been added Successfully";
    } else {
    $error="ERROR";
    }




<?php
include 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO memberlist 
    (username,password,name,phone,email)
    VALUES
    ('$username','$password','$name','$phone','$email')";

 $result = mysqli_query($condb,$sql) or die("Error in sql : $sql".mysqli_error($sql));
 mysqli_close($condb);

if($result){
    echo 'Insert Succesfully';
}else{
    echo 'Error !!';
}
?>

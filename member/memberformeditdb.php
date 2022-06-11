<?php
include 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    $sql = "UPDATE  memberlist SET 

    username='$username',
    password='$password',
    name='$name',
    phone='$phone',
    email='$email'

    WHERE id = $id ";
    

 $result = mysqli_query($condb,$sql) or die("Error in sql : $sql".mysqli_error($sql));
 mysqli_close($condb);

if($result){
    echo "<script type='text/javascript'>";
    echo "alert('Update Succesfully');";
    echo "window.location = 'memberlist.php';";
    echo "</script>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('Error !!');";
    echo "window.location = 'memberlist.php';";
    echo "</script>";
}
?>
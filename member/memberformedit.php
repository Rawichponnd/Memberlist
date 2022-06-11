<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include 'connect.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM memberlist WHERE id = $id";
    $result = mysqli_query($condb,$query);
    $row = mysqli_fetch_array($result);
    
    ?>
    <h1>แก้ไขข้อมูล</h1>
    <form action="memberformeditdb.php" method="post">
        id
        <input type="number" name="id" value="<?php echo $row['id'];?>" readonly>
        <br>
        Username
        <input type="text" name="username" placeholder="username" 
        required value="<?php echo $row['username'];?>">
        <br>
        Password
        <input type="password" name="password" placeholder="password" 
        required value="<?php echo $row['password'];?>">
        <br>
        Name
        <input type="text" name="name" placeholder="name" 
        required value="<?php echo $row['name'];?>">
        <br>
        Phone
        <input type="text" name="phone" placeholder="phone" 
        required value="<?php echo $row['phone'];?>">
        <br>
        Email
        <input type="email" name="email" placeholder="email" 
        required value="<?php echo $row['email'];?>">
        <br>
        <button type="submit">SAVE</button>
    </form>
</body>
</html>
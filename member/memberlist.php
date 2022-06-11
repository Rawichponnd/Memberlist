<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memberlist</title>
</head>
<body>
<?php
include 'connect.php';
$query = "SELECT * FROM memberlist";
$result = mysqli_query($condb,$query);
?>
<table border=1>
    <caption>List member</caption>
    <thead>
        <tr>
            <th>id</th>
            <th>username</th>
            <th>password</th>
            <th>name</th>
            <th>phone</th>
            <th>email</th>
            <th>edit</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($result as $row) { ?>  
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['password'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><a href="memberformedit.php?id=<?php echo $row['id'];?>">
                edit</a></td>
        </tr>
        <?php }?>
    </tbody>
</table>
<?php mysqli_close($condb);?>
</body>
</html>
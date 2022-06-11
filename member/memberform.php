<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add data</h1>
    <form action="memberadd.php" method="post">
        Username
        <input type="text" name="username" placeholder="username" required>
        <br>
        Password
        <input type="password" name="password" placeholder="password" required>
        <br>
        Name
        <input type="text" name="name" placeholder="name" required>
        <br>
        Phone
        <input type="text" name="phone" placeholder="phone" required>
        <br>
        Email
        <input type="email" name="email" placeholder="email" required>
        <br>
        <button type="submit">SAVE</button>
    </form>
</body>
</html>
<?php
include 'db.php';

$error = "";

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin
            WHERE username='$username'
            AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        header("Location: dashboard.php");
        exit();
    }
    else
    {
        $error = "Invalid Username or Password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    <h1>Admin Login</h1>
</div>

<div class="container">

<form action="dashboard.php">

<label>Username</label><br>
<input type="text" name="username"><br><br>

<label>Password</label><br>
<input type="password" name="password"><br><br>

<button type="submit">
Login
</button>

</form>

</div>

</body>
</html>
<?php
include 'db.php';

$message = "";

if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO admin(username,password)
            VALUES('$username','$password')";

    if(mysqli_query($conn,$sql))
    {
        $message = "Admin Registered Successfully!";
    }
    else
    {
        $message = "Username already exists!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    <h1>Register Admin</h1>
</div>

<div class="container">

<h3><?php echo $message; ?></h3>

<form method="POST">

    <input type="text" name="username"
           placeholder="Username" required><br><br>

    <input type="password" name="password"
           placeholder="Password" required><br><br>

    <button type="submit" name="register">
        Register
    </button>

</form>

<br>
<a href="login.php">Back to Login</a>

</div>

</body>
</html>
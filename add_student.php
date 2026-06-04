<?php
include 'db.php';

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $roll = $_POST['roll_no'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];

    $sql = "INSERT INTO students(name,roll_no,course,semester)
            VALUES('$name','$roll','$course','$semester')";

    mysqli_query($conn,$sql);

    echo "Student Added Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
<h1>Add Student</h1>
</div>

<div class="container">

<form method="POST">

<input type="text" name="name" placeholder="Student Name"><br><br>

<input type="text" name="roll_no" placeholder="Roll Number"><br><br>

<input type="text" name="course" placeholder="Course"><br><br>

<input type="text" name="semester" placeholder="Semester"><br><br>

<button type="submit" name="submit">
Add Student
</button>

</form>

</div>

</body>
</html>
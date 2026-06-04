<?php
include 'db.php';

if(isset($_POST['save']))
{
    $date = date('Y-m-d');

    foreach($_POST['attendance'] as $student_id => $status)
    {
        mysqli_query($conn,
        "INSERT INTO attendance(student_id,attendance_date,status)
         VALUES('$student_id','$date','$status')");
    }

    echo "Attendance Saved Successfully!";
}

$students = mysqli_query($conn,"SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
<title>Mark Attendance</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
<h1>Mark Attendance</h1>
</div>

<div class="container">

<form method="POST">

<table border="1" cellpadding="10" align="center">

<tr>
<th>Name</th>
<th>Present</th>
<th>Absent</th>
</tr>

<?php while($row=mysqli_fetch_assoc($students)){ ?>

<tr>

<td><?php echo $row['name']; ?></td>

<td>
<input type="radio"
name="attendance[<?php echo $row['id']; ?>]"
value="Present" checked>
</td>

<td>
<input type="radio"
name="attendance[<?php echo $row['id']; ?>]"
value="Absent">
</td>

</tr>

<?php } ?>

</table>

<br>

<button type="submit" name="save">
Save Attendance
</button>

</form>

</div>

</body>
</html>
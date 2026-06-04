<?php
include 'db.php';

$result = mysqli_query($conn,"
SELECT students.name,
       attendance.attendance_date,
       attendance.status
FROM attendance
JOIN students
ON attendance.student_id = students.id
");
?>

<!DOCTYPE html>
<html>
<head>
<title>Attendance Report</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
<h1>Attendance Report</h1>
</div>

<div class="container">

<table border="1" cellpadding="10" align="center">

<tr>
<th>Student Name</th>
<th>Date</th>
<th>Status</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['attendance_date']; ?></td>
<td><?php echo $row['status']; ?></td>
</tr>
<?php
}
?>

</table>

</div>

</body>
</html>
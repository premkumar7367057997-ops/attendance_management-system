<?php
include 'db.php';

$result = mysqli_query($conn,"SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
<title>View Students</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
<h1>Student List</h1>
</div>

<div class="container">

<table border="1" cellpadding="10" align="center">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Roll No</th>
    <th>Course</th>
    <th>Semester</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['roll_no']; ?></td>
    <td><?php echo $row['course']; ?></td>
    <td><?php echo $row['semester']; ?></td>
</tr>
<?php
}
?>

</table>

</div>

</body>
</html>
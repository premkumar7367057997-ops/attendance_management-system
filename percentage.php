<?php
include 'db.php';

$sql = "
SELECT
s.name,

COUNT(a.id) AS total_classes,

SUM(CASE WHEN a.status='Present' THEN 1 ELSE 0 END) AS present_classes

FROM students s

LEFT JOIN attendance a
ON s.id = a.student_id

GROUP BY s.id
";

$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Attendance Percentage</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
<h1>Attendance Percentage</h1>
</div>

<div class="container">

<table border="1" cellpadding="10" align="center">

<tr>
<th>Student Name</th>
<th>Total Classes</th>
<th>Present</th>
<th>Percentage</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
$total = $row['total_classes'];
$present = $row['present_classes'];

$percentage = ($total > 0)
? round(($present/$total)*100,2)
: 0;
?>

<tr>

<td><?php echo $row['name']; ?></td>

<td><?php echo $total; ?></td>

<td><?php echo $present; ?></td>

<td><?php echo $percentage; ?>%</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>
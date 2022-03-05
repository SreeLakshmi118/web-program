<html>
<body>
<table>
<tr><th>student id</th>
<th> first name</th>
<th>last name</th>
<th>phone no</th>
<th> course</th>
<th>semester</th>
<?php
include('connection.php');
$sql="SELECT * FROM tbl_student";
$result=mysqli_query($link,$sql);
if($result)
{
while($row=mysqli_fetch_row($result))
{
?>
<tr><td>
<?php echo$row[0];
?>
</td>
<td>
<?php echo$row[1];
?>
</td>
<td>
<?php echo$row[2];
?>
</td>
<td>
<?php echo$row[3];
?>
</td>
<td>
<?php echo$row[4];
?>
</td>
<td>
<?php echo$row[5];
?>
</td></tr>
<?php
}
}
?>
</table>
</body>
</html>


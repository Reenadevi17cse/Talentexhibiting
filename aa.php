<?php
$q = intval($_GET['search']);

$con = mysqli_connect('localhost','root','','project');
if (!$con)
	{
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"details.accdb");
$sql="SELECT * FROM table1 WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Name</th>
<th>Rollno</th>
<th>Talent</th>

</tr>";
while($row = mysql_fetch_array($result,[MYSQLI_BOTH]))
{
    echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Rollno'] . "</td>";
    echo "<td>" . $row['Talent'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

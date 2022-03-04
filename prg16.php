<html>
<body>
<h2> Legends of Cricket</h2>

<?php
$con=mysqli_connect("localhost","root","", "Legends");
$qry="SELECT * FROM Cricket";
$res=mysqli_query($con,$qry);

echo "<table border='1px'>
      <tr><th>Name</th><th>Runs</th><th>100s</th><th>50s</th></tr>"; 
while( $row=mysqli_fetch_array($res))
{
echo"<tr>
     <td>$row[0]</td>
     <td>$row[1]</td>
     <td>$row[2]</td>
     <td>$row[3]</td>
     </tr>";
}
echo"</table>";
?>

</body> 
</html>
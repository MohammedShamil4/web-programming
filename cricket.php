<html>
<center>
<body bgcolor="pink"><br>

<?php
$name=["Virat Kohli","Rohit Sharma","Shikar Dhawan","KL Rahul","Rishab Pant","Hardic Pandya","R Jadeja","R Ashwin","B Kumar","J Bhumrha","M Shami"];
echo "<h4> <u><b>CRICKET TEAM PLAYERERS NAME</b></u></h4>
<table border='1px'>
<tr> <th>Sl No</th> <th>NAME</th> </tr>";
for($i=0;$i<11;$i++)
{
$sl=$i+1;
echo " <tr> <th>$sl</th> <th>$name[$i]</th> </tr>";
}
echo "</table>";
?>
</body>
</html>
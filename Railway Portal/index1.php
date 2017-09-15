<html>
<head>
<style type="text/css">
table
{
margin-left:590px;
margin-top:200px;
}
input
{
border-radius:20px;
height:30px;	
color:blue;	
}
th
{
	color:#fff;
}
</style>
</head>
<?php
 include 'includes/connection.php';

$query="SELECT * FROM contact_us";

$result=mysql_query($query); 
echo "<table border='10'>";
echo "<tr bgcolor='red'><th>POST</th><th>NAME</th><th>PHONE NO</th></tr>";
while($person=mysql_fetch_array($result))
{
echo "<tr bgcolor='yellow'><td>";
echo $person['POST'];
echo "</td><td>";
echo $person['NAME'];
echo "</td><td>";
echo $person['PHONE NO'];
echo "</td></tr>";
}
echo "</table>";
?>
<body bgcolor="blue">


</body>
<hr/>


<center>
<form action="http://localhost/project/center.html">
<input type="submit"value="BACK">
</form>
</center>


</html>
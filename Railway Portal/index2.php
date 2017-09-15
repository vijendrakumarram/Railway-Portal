<html>
<head>
<style type="text/css">
table
{
margin-left:470px;
margin-top:200px;
}

input
{
border-radius:10px;
height:25px;
margin-left:-55px;	
}
#vi1
{
	color:#fff;
}

</style>
</head>
<?php

 include 'includes/connection.php';

$query="SELECT * FROM indian_railway_portal";

$result=mysql_query($query); 
echo "<table border='10'>";
echo "<tr bgcolor='red'><th id='vi1'>TRAIN NAME</th><th id='vi1'>TRAIN NO.</th><th id='vi1'>AVAILABLE SEAT</th><th id='vi1'>DATE</th></tr>";
while($person=mysql_fetch_array($result))
{
echo "<tr bgcolor='yellow'><td>";
echo $person['train_name'];
echo "</td><td>";
echo $person['train_no'];
echo "</td><td>";
echo $person['available_seat'];
echo "</td><td>";
echo $person['date'];
echo "</td></tr>";
}
echo "</table>";
?>
<body bgcolor="blue">


</body>
<hr/>


<center>
<form action="http://localhost/project/center.html">
<input type="submit"value="BACK"/>
</form>
</center>


</html>
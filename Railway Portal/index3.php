<html>

<center>

<h1>ENTER TRAIN NUMBER</h1><hr/>

<form action="http://localhost/project/index3.php" method="POST">
<p><input type="text" name="search"/></p>
<p><input type="submit" value="SEARCH"/></p>
<hr/>
</form>

<form action="http://localhost/project/center.html">
<p><input type="submit" value="BACK"/></p><hr/>
</form>

</center>    
               
<?php
mysql_connect("localhost","root","") or die("could not connect");

mysql_select_db("mysql_tut") or die("could not find db");
$output='';
 if(isset($_POST['search']))
 {
$searchq=$_POST['search'];	 
$searchq=preg_replace("#[^0-9a-z]#i","",$searchq);	
$query=mysql_query("SELECT * FROM indian_railway_portal WHERE train_no='$searchq'") or die ("could not search");
 $count=mysql_num_rows($query);
 if($count==0)
 {
	 $output= '<center><h3>There was no search results!</h3></center>';
 }
 else
 {
	while($row=mysql_fetch_array($query))
	{
		$tna=$row['train_name'];
		$tno=$row['train_no'];
		$as=$row['available_seat'];
		$da=$row['date'];
		
	
	/*$output='<table border="10">
	<tr><th>TRAIN NAME</th><th>TRAIN NUMBER</th><th>AVAILABLE SEAT</th><th>DATE</th></tr>
	<tr>
	<td>$tna</td>
	<td>$tno</td>
	<td>'$as'</td>
	<td>'$da'</td>
	</tr>
	</table>';*/
	
	
	echo "<table border='10'>";
	echo "<tr bgcolor='red'><th>TRAIN NAME</th><th>TRAIN NUMBER</th><th>AVAILABLE SEAT</th><th>DATE</th></tr>";
	echo "<tr bgcolor='yellow'><td>";
	echo $tna;
	echo "</td><td>";
	echo $tno;
	echo "</td><td>";
	echo $as;
	echo "</td><td>";
	echo $da;
	echo "</td></tr>";
	echo "</table>";
	

	
	}
	 
 }
 }

?>

<head>
<style type="text/css">
h1{
	margin-top:100;
	color:#fff;
}
h1:hover
{
	margin-top:100;
	color:gray;
}

input
{
	border-radius:10px;
	color:blue;
	
}

table
{
	margin-left:480px;
	
}

center
{
color:#fff;	
}
center:hover
{
color:gray;	
}
th
{
	color:#fff;
}

</style>
</head>
<body bgcolor='blue'>

<?php
print("$output");

?>
</body>
</html>
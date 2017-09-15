<html>

<center>

<h1>ENTER USER NAME</h1><hr/>

<form action="http://localhost/project/bkt1.php" method="POST">
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
$query=mysql_query("SELECT * FROM book_train3 WHERE user='$searchq'") or die ("could not search");
 $count=mysql_num_rows($query);
 if($count==0)
 {
	 $output= '<center><h3>There was no search results!</h3></center>';
 }
 else
 {
	while($row=mysql_fetch_array($query))
	{
		$us=$row['user'];
		$pas=$row['pass'];
		$da=$row['3'];
		$tna=$row['4'];
		$tno=$row['5'];
		$sb=$row['6'];
		
	echo "<table border='10'>";
	echo "<tr bgcolor='red'><th>USER NAME</th><th>PASSWORD</th><th>DATE</th><th>TRAIN NAME</th><th>TRAIN NUMBER</th><th>SEAT BOOKED</th></tr>";
	echo "<tr bgcolor='yellow'><td>";
	echo $us;
	echo "</td><td>";
	echo $pas;
	echo "</td><td>";
	echo $da;
	echo "</td><td>";
	echo $tna;
	echo "</td><td>";
	echo $tno;
	echo "</td><td>";
	echo $sb;
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
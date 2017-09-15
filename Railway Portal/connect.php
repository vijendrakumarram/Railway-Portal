<?php
$inputuser=$_POST['user'];
$inputpass=$_POST['pass'];

$user="root";
$password="";
$database="tutorial";

$connect=mysql_connect("localhost",$user,$password);
@mysql_select_db($database) or ("Database not found");

$query="SELECT *FROM users WHERE user='$inputuser'";
$querypass="SELECT *FROM users WHERE password='$inputpass'";

$result=mysql_query($query);
$resultpass=mysql_query($querypass);

$row=mysql_fetch_array($result);
$rowpass=mysql_fetch_array($resultpass);

$serveruser=$row["user"];
$serverpass=$row["password"];


if($serveruser&&$serverpass)
{
	if(!$result&&!$resultpass)
	{
		die("User name or password is invalid");
	}
	echo "<br><center>Database Output</b></center><br><br>";
     mysql_close();
	 
	 /*echo $inputpass;
	 echo $serverpass;*/
	 
	 if($inputuser==$serveruser&&$inputpass==$serverpass)
	 {
		 header('Location:http://localhost/project/Home.php');
		 
	 }
	 
     else
	 {
		 
		header('Location:Fail.php');
	 }
	}
	     else
	 {
		 
		header('Location:empty.php');
	 }
?>
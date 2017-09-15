

<?php

$userreg=$_POST['user'];
$passreg=$_POST['pass'];

$taken="false";
$database="tutorial";
$password="";
$username="root";



if($userreg&&$passreg)
{
$con=mysql_connect('localhost',$username,$password) or die("Unable to log into database");
@mysql_select_db($database,$con) or die("Unable to connect");

mysql_query("INSERT INTO users VALUES('$userreg','$passreg')") or die("Strange error");

echo "Account Created";
mysql_close($con);
header("Location:http://localhost/project/signup.html");

}
else
{
	echo "
	<head>
	     <style type='text/css'>
		 input 
		 {
			 border-radius:20px;
			 height:35px;
			color:blue;
		 }
		 h1{
			 color:#fff;
		   }
		   h1:hover
		   {
			color:gray;   
		   }
		   
		   
		 </style>
		 </head>
	<body bgcolor='blue'><center><br/><br/><h1>You Need To Both Username And Password</h1>
	       <form action='http://localhost/project/signup.html'>
		   <input type='submit' value='TRY AGAIN'>
	</form>
	     </center></body>";
}
?>









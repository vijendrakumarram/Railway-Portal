<?php

$userreg=$_POST['user'];
$passreg=$_POST['pass'];
$da=$_POST['3'];
$tna=$_POST['4'];
$tno=$_POST['5'];
$ts=$_POST['6'];



$taken="false";
$database="mysql_tut";
$password="";
$username="root";



if($userreg&&$passreg&&$da&&$tna&&$tno&&$ts)
{
$con=mysql_connect('localhost',$username,$password) or die("Unable to log into database");
@mysql_select_db($database,$con) or die("Unable to connect");

mysql_query("INSERT INTO book_train3 VALUES('$userreg','$passreg','$da','$tna','$tno','$ts')") or die("Strange error");

echo "Account Created";

mysql_close($con);
header("Location:booktrain.html");

}
else{
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
	<body bgcolor='blue'><center><br/><br/><h1>PLEASE FILL THE BLANKS</h1>
	       <form action='http://localhost/project/booktrain.html'>
		   <input type='submit' value='TRY AGAIN'>
	</form>
	     </center></body>";
}
?>
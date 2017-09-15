<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<style type="text/css">
body{
background-color:red;
}

.navigation
{
margin-top:-25;
}
.navigation li
{
display:inline-block;
}
.navigation a:hover {
  background: #314b60;
  box-shadow: inset 0 0 10px 1px rgba(0, 0, 0, .10);
}
.navigation a {
  background: brown;
  background: linear-gradient(#49708f, #293f50);
  border-right: 1px solid rgba(0, 0, 0, .3);
  color: #fff;
  padding: 12px 20px;
  text-decoration: none;
}
.navigation ul {
  font: bold 11px "Helvetica Neue", Helvetica, Arial, sans-serif;
  margin: 50px 400px;
  padding: 0;
   text-transform: uppercase;
}
.navigation li:first-child a {
  border-radius: 4px 0 0 4px;
}
.navigation li:last-child a {
  border-right: 0;
  border-radius: 0 4px 4px 0;
}

h3
{
color:blue;

}
a u{
color:blue;
}
a u p
{
text-align:right;
}

div
{
display:inline-block;
  background: #314b60;
  box-shadow: inset 0 0 10px 1px rgba(0, 0, 0, .3);
}
img
{
margin-left:14;

}
marquee
{
margin-top:-5;
}
</style>



</head>
<body background="">
<center>
<nav class="navigation">
  <ul>  
    <li><a href="http://localhost/project/booktrain.html">BOOK TRAINS</a></li>
	<li><a href="http://localhost/project/index2.php">TRAINS</a></li>
    <li><a href="http://localhost/project/index3.php">SEARCH TRAINS</a></li>
    <li><a href="http://localhost/project/bkt1.php">PNR STATUS</a></li>
    <li><a href="http://localhost/project/index1.php">CONTAC US</a></li>
  </ul>
</nav>
<hr>


<nav class="navigation">
<ul>
<li><a href="http://localhost/project/index.html">LOG IN</a></li>
<li><a href="http://localhost/project/signup.html">SIGN UP</a></li>
<?php
$time=time();
$actual_time = date('H:i:s',$time);
echo 'TIME'.$actual_time;
?>
</ul>
</nav>
</center>

<hr><marquee>
<img  src="56.jpg" height="250" border="3" width="340">
<img src="57.png" height="250" border="3" width="340">
<img src="58.png" height="250" border="3" width="340">
<img src="59.png" height="250" border="3" width="340">
</marquee><hr>


</body></html>
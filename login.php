<?php
$dbemail="donurusonyeddy873@gmail.com";
$dbnewpassword="momdad@#12345";
$email=$_GET["email"];
$newpassword=$_GET["newpassword"];



if($dbemail==$email)
{
	echo "email is present in our data base";
}
else
{
	echo "email is not present in our database";
	exit();
}
if($dbpassword==$newpassword)
{
	echo"<br>";
 echo "password is matched with your provided account";
}
else
{
	echo "password is not matched with your provided account";

exit();
}
  
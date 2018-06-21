

<?php


$id = 1;

$name =$_POST['name']; 

$dob =$_POST['dob'];
$statrname =$_POST['st'];
$city =$_POST['ct'];
$add =$_POST['add'];
$phone =$_POST['pno'];
$md ="mbbs";
$sex =$_POST['sex'];

$uname =$_POST['ml'];
$password =$_POST['pass'];


$dbhost='localhost:3306';
$dbuser='root';
$dbpass="";
$db='wdc';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(! $conn)
{
die('COULD NOT CONNECT:'.mysql_error());
}
//echo "CONNECTED succesfully<br>";
$sql="insert into doctor  values ($id,'$name','$dob','$statrname','$city','$add','$phone','$md','$sex','$uname','$password')";
mysql_select_db('wdc');
$retval=mysql_query($sql,$conn);
if(! $retval)
{
die('cannot create:'.mysql_error());
}
else{



	
	include("mainhome.php");
	
    
}



?>



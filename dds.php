<!DOCTYPE html>

<html>
<head>
<title>d_reg_data.php</title>
</head>
<body>

<?php

$id = 1;

$name =$_POST['name']; 

$dob =$_POST['dob'];
$statrname =$_POST['st'];
$city =$_POST['ct'];
$add =$_POST['add'];
$phone =$_POST['pno'];

$sex =$_POST['sex'];

$uname =$_POST['ml'];
$password =$_POST['pass'];


$dbhost='localhost';
$dbuser='root';
$dbpass="";
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(! $conn)
{
die('COULD NOT CONNECT:'.mysql_error());
}
echo "CONNECTED succesfully<br>";
$sql="insert into patient  values ('$name','$dob','$statrname','$city','$add','$phone','$sex','$uname','$password')";
mysql_select_db('wdc');
$retval=mysql_query($sql,$conn);
if(! $retval)
{
die('cannot create:'.mysql_error());
}
echo "CONNECTED SUCCESFULLY";
?>
<html>
<body bgcolor="orange">

<center>
<table style="color:blue">
<tr>
<td>User Name : </td> <td><input type="text"name="name"size="30"></td></tr>
<tr>
<td>Password : </td> <td><input type="password"name="pass"size="30"></td></tr>
<tr>
<td><center><input type="submit"value="Submit"></center></td>
<td><center><input type="Reset"value="Reset"></center></td></tr>
</table>
</center>
</body>
</html>
<?php
mysql_close($conn);
?>


</body>
</html>

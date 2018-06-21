
	
	   <?php
	   
	  $id= $_POST['id'];
	  $mail =$_POST['mail'];
	   $pro = "problem";
$sol =$_POST['sol'];


$dbhost='localhost';
$dbuser='root';
$dbpass="";
$db='wdc';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(! $conn)
{
die('COULD NOT CONNECT:'.mysql_error());
}
//echo "CONNECTED succesfully<br>";
$sql="insert into patient_sol  values ($id,'$mail','$pro','$sol')";
mysql_select_db('wdc');
$retval=mysql_query($sql,$conn);
if(! $retval)
{
die('cannot create:'.mysql_error());
}
else{

include("userhome1.php"); 	

}
mysql_close($conn);
?>
	   
	    
	   
	   
		  


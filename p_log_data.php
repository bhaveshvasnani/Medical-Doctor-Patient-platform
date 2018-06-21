<!DOCTYPE html>

<html>
<head>
<title>d_reg_data.php</title>
</head>
<body>

<?php



$uname =$_POST['ml'];
$password =$_POST['pass'];


$dbhost='localhost';
$dbuser='root';
$dbpass="";
$db='wdc';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$db);
//echo "CONNECTED SUCCESFULLY";
$sql1="SELECT * FROM patient where mailid='$uname' &&  password = '$password' ";

$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
//echo "data set";
        echo "<tr><td>".$row['mailid']."</td><td>";
		
    }
    //echo "</table>";
} else {
    //echo "0 results";
}
$conn->close();


?>


</body>
</html>

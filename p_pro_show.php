<?php

$dbhost='localhost';
$dbuser='root';
$dbpass="";
$db='wdc';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$db);

$sql1="SELECT * FROM patient_pro ";

$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

        $_SESSION['mail']=$row['mail'];
        $_SESSION['pro']=$row['problem'];

    }
   	
} else {

}
$conn->close();
?>
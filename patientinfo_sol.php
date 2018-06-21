<html>
<html>
<style>
<?php   session_start();?>
input[type=text], select {
    width: 50%;
    padding: 12px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] ,[type=reset] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
input[type=reset]:hover {
    background-color: #45a049;
}
.div12 {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding:10px;
	width:95%;
	margin-top:
	
}
table{
	width:80%;
	
	
	
	

}
td{
	
	border-left:2px solid red;
	
	padding:0px;
	margin:0px
}.log{

width:200px;

margin-left:400px
}
</style>
<body>
<center><?php


$mail=$_SESSION['m'];


$dbhost='localhost:3306';
$dbuser='root';
$dbpass="";
$db='wdc';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$db);

$sql1="SELECT * FROM patient_sol where mail='$mail'  ";

$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

        $_SESSION['pro']=$row['problem'];
		  $_SESSION['sol']=$row['solution'];
		  
		 
		
    }
     	
} else {
	

}
$conn->close();



		
 			
		
	
		?>
	   

<div class="div12"> <h3>All Patient Information</h3>
<div class="log"> <?php  echo $_SESSION['name'];?> </div> <div class="log"><form action="logout1.php" method="POST">
  
    <input type="submit" value="Logout"></form></div>  

  <table>
  <tr><td><h>id</h></td><td><h>Patient Problems</h></td><td><h>Solution</h></td></tr>
  
  <tr><td><h>id</h></td><td><h><?php   echo $_SESSION['pro'];?></h></td><td><a href=""><h><?php   echo $_SESSION['sol'];?></h></a></td></tr>
  </table>

 
</div>  </center>




</body>
</html>
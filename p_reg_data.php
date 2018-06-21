
<html>
<head>
<title>medical</title>
<style type="text/css">
	#d1{
		width:50%;
		height:100%;
		background-color:white;
		}
	#d2{
		width:100%;
		height:200px;
		background-color:white;
		margin-top:0px;
		position:relative;
		}
	
	#d3{
		width:100%;
		height:10px;
		background-color:white;
		margin:0px;
		}
	#d5{
		padding:0px;
		}
	#div{
		width:100%;
		height:100px;
		margin:0px;
		background-color:white;
		}
	ul{
		list-style-type:none;
		
		}
	li{
		float:left;
		display:table;
		
		}
	a:link,a:visited{
		background-color:#E5E5E5;
		color:black;
		text-align:center;
		text-decoration:none;
		display:table;
		padding:10px 20px;
		font-size:15px;
	    }
	a:hover,a:active{
		color:white;
		background-color:#7F7F7F;
		}
	
	#d4{
		background-color:white;
		height:100px;
		width:100%;
		margin-top:20%;
		border-radius:0px 0px 20px 20px;
		border-top-style:solid;
		}
	.homeimage{
		 position:relative;
		 width:100%;
		 height:200px;
		 align:left;
	     } 
	.facebook{ 
		position:absolute;
		top:100px;
		right:10px; 
		width:30px;
		height:30px;
		} 
		
	.gmail{
		position:absolute;
		top:130px;
		right:30px;
		width:30px;
		height:30px;
		}
	.instagram{
		position:absolute;
		top:100px;
		right:80px;
		width:30px;
		height:30px;
		}
	.linkedin{
		position:absolute;
		top:130px;
		right:60px;
		width:30px;
		height:30px;
		}
	.twitter{
		position:absolute;
		top:90px;
		right:45px;
		width:30px;
		height:30px;
		}
		#d7{
		background-color:red;
		height:30px;
		width:150px;
		border-radius:30px;
		margin-top:-70px;
		margin-left:500px
		
		}
		.l1{
			width:100px;
			height:50px
			
		}
	.l2{
			width:100px;
			height:50px;
			align:left;
			
		}
		#log{
			
			margin-top:-35px
		}
</style>
</head>
<body>
	<center>
	   <div id="d1">
	   <div id="d3"></div>
	   <div id="d2">
		   <img src="images/homeimage.jpg" class="homeimage"/>
	       <img src="images/facebook.jpg" class="facebook"/>
	       <img src="images/gmail.jpg" class="gmail"/>
	       <img src="images/instagram.jpg" class="instagram"/>
	        <img src="images/twitter.jpg" class="twitter"/>
	         <img src="images/linkedin.jpg" class="linkedin"/>
	    </div>
	   
	   <div id="div">
		<ul>
			 <li><a href="home.php">Home</a></li>
			 <li><a href="location.php">Location</a></li>
			 
		     <li><a href="contact_us.php">Contact Us</a></li>
		     <li><a href="about_us.php">About us</a></li>
		</ul>
	  </div><div id="log">
	  
	   </div>
	   <div id="d5">
	   
<?php
session_start();

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


$dbhost='localhost:3306';
$dbuser='root';
$dbpass="";
$db='wdc';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(! $conn)
{
die('COULD NOT CONNECT:'.mysql_error());
}

$sql="insert into patient  values ($id,'$name','$dob','$statrname','$city','$add','$phone','$sex','$uname','$password')";
mysql_select_db('wdc');
$retval=mysql_query($sql,$conn);
if(! $retval)
{
die('cannot create:'.mysql_error());
}
else{

$conn = new mysqli($dbhost,$dbuser,$dbpass,$db);

$sql1="SELECT * FROM patient where mailid='$uname' &&  password = '$password' ";

$result = $conn->query($sql1);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {

		$_SESSION['name']=$row['name'];
		  $_SESSION['m']=$row['mailid'];
		
    }
   include ('patientuse.php');
} else {
   
}
$conn->close();
}

?>
   </div>
           
	   <div id="d4">
		   <div id="d6">
	    &copy; Copyright 2017 All Rights Reserved www.docterite.in
	</div>
	   </div>
	    
	  </div>
	  
</center>
</body>
</html>




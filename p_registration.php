
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
			 <li><a href="register.php">Register</a></li>
		     <li><a href="login.php">Login</a></li>
		     <li><a href="contact_us.php">Contact Us</a></li>
		     <li><a href="about_us.php">About us</a></li>
		</ul>
	   </div>
	   <div id="d5">
	   <h>Patient's Registeration</h>
	   

<style>
input[type=text], select,input[type=password], input[type=date],input[type=number]{
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
	
}
table{
	width:100%;
	
		padding-left:30px;
	font-size:20px
	

}
td{
	padding-left:40px;
}
body{
	
	font-size:30px
}
</style>
<form action="p_reg_data.php" method="POST">
<center><h2>Please enter your details to register with us</h2>

<table border="0"height="600"width="500">
<tr>
<td>Name : </td> <td><input type="text"name="name"size="25"></td></tr>
<tr>
<td>Date Of Birth <br>(DD-MM-YY) : </td> <td><input type="Date"name="dob"size="25"></td></tr>
<tr>
<td>State Name : </td> <td><input type="text"name="st"size="25"></td></tr>
<tr><td>City : </td> <td><input type="text"name="ct"size="25"></td></tr>
<tr><td>Address: </td> <td><input type="text"name="add"size="25"></td></tr>
<tr><td>PhoneNo : </td> <td><input type="number"name="pno"size="25"></td></tr>



<tr>
<td>Sex : </td> <td>Male : <input type="radio"name="sex"value="Male">Female : <input type="radio"name="sex"value="Female"></td>
</tr>




<tr>
<td>E-mail : </td> <td><input type="text"name="ml"size="30"></td></tr>
<tr>
<td>Password : </td> <td><input type="password"name="pass"size="30"></td></tr>

<td><center><input type="submit"value="Submit"></center></td>
<td><input type="Reset"value="Reset"></td>

</table>
</center>
</form>
</div>
	   <div id="d4">
	    <div id="d6">
	   <h6> &copy; Copyright 2017 All Rights Reserved www.docterite.in </h6>
	</div></div>
	   
	   </div>
</center></body>
</html> 

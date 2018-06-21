<html>
<html>
<style>
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
<center>


<div class="div12"> <h3>All Patient Information</h3>
<div class="log"> <?php  echo $_SESSION['dnm'];?> </div> <div class="log"><form action="logout1.php" method="POST">
  
    <input type="submit" value="Logout"></form></div>  
  
  <table>
  <tr><td><h>id</h></td><td><h>Name</h></td><td><h>Patient Problems</h></td><td><h>Solution</h></td></tr>
  
  <?php
  
  include("p_pro_show.php");
  
  ?>
  <tr><td><h><?php echo $_SESSION['mail'];?></h></td><td><h><?php echo $_SESSION['pro'];?></h></td><td><h>Patient Problems</h></td><td><a href="sol_form.php"><h>Solution</h></a></td></tr>
  </table>

 
</div>  </center>




</body>
</html>
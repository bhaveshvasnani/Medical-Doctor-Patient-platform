

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
	
}
table{
	width:80%;
	
	
	

}.log{

width:200px;

margin-left:400px
}
</style>
<body>
<center>


<div class="div12"> <h3>Patient Login Form</h3>
<div class="log"> <?php  echo $_SESSION['name'];?> </div> <div class="log"><form action="logout1.php" method="POST">
  
    <input type="submit" value="Logout"></form></div> 
  <form action="p_pro_form_data.php" method="POST">
  <table><tr><td>
    Id</td>
    <td><input type="text" id="fname" name="id" placeholder="Your name..">
	</td></tr>
	<tr><td>
    User_Name</td><td>
    <input type="text" name="m"  value="<?php  echo $_SESSION['m'];?> ">
	</td></tr>
	<tr><td>
    <label for="country">Problems</label>
    </td><td>
	<textarea rows="7" cols="30"  name="pro">

</textarea></td></tr>
  <tr><td >
    <input type="submit" value="Submit"></td><td >
    <input type="reset" value="Reset"></td></tr></table>

  </form>
</div>  </center>


</body>
</html>

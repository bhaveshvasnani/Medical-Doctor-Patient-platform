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
	
	
	

}
</style>
<body>
<center>


<div class="div12"> <h3>Doctor Login Form</h3>
  <form action="final_send.php" method="POST">
  <table><tr><td>
    <label for="fname">Id</label></td>
    <td><input type="text" id="fname" name="id" placeholder="Your name..">
	</td></tr>
	<tr><td>
    <label for="lname">Name</label></td><td>
    <input type="text"  name="mail"  value="<?php echo $_SESSION['mail'];?>"placeholder="Your last name..">
	</td></tr>
	<tr><td>
    <label for="country">Solution</label>
    </td><td>
	<textarea rows="7" cols="30"  name="sol">

</textarea></td></tr>
  <tr><td >
    <input type="submit" value="Submit"></td><td >
    <input type="reset" value="Reset"></td></tr></table>

  </form>
</div>  </center>


</body>
</html>

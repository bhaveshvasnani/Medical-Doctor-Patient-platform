<html>

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
	width:50%;
	
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
<body>
<center><h2>Please enter your details to register with us</h2>

<table border="0"height="600"width="500">
<tr>
<td>Name : </td> <td><input type="text"name="User_name"size="25"></td></tr>
<tr>
<td>Date Of Birth <br>(DD-MM-YY) : </td> <td><input type="Date"name="dob"size="25"></td></tr>
<tr>
<td>State Name : </td> <td><input type="text"name="state"size="25"></td></tr>
<tr><td>City : </td> <td><input type="text"name="city"size="25"></td></tr>
<tr><td>Addres: : </td> <td><input type="text"name="add"size="25"></td></tr>
<tr><td>PhoneNo : </td> <td><input type="number"name="pno"size="25"></td></tr>



<tr>
<td>Sex : </td> <td>Male : <input type="radio"name="sex"value="Male">Female : <input type="radio"name="sex"value="Female"></td>
</tr>

<tr>
<td>Medical Degrees : </td> <td>
<select >
    <option name="md" value="Master of Clinical Medicine (MCM)" selected>Master of Clinical Medicine (MCM)</option>
    <option name="md" value="Master of Medical Science (MMSc, MMedSc)">Master of Medical Science (MMSc, MMedSc)</option>
    <option name="md" value="Master of Medicine (MM, MMed)">Master of Medicine (MM, MMed)</option>
    <option name="md" value="Master of Philosophy (MPhil)">Master of Philosophy (MPhil)</option>
    <option name="md" value="Master of Surgery" >Master of Surgery </option>

    <option name="md" value="Doctor of Clinical Medicine (DCM)">Doctor of Clinical Medicine (DCM)</option>
    <option name="md" value="Doctor of Clinical Surgery (DClinSurg)" >Doctor of Clinical Surgery (DClinSurg)</option>
    <option name="md" value="Doctor of Medical Science (DMSc, DMedSc)">Doctor of Medical Science (DMSc, DMedSc)</option>
    <option name="md"value="Doctor of Philosophy (PhD, DPhil)">Doctor of Philosophy (PhD, DPhil)</option>
    <option name="md"value="Doctor of Surgery (DS, DSurg)">Doctor of Surgery (DS, DSurg)</option>


</select>

    </td>
<tr>
<td>User Name : </td> <td><input type="text"name="Use"size="30"></td></tr>
<tr>
<td>Password : </td> <td><input type="password"name="User_password"size="30"></td></tr>
<tr>
<td><center><input type="submit"value="Submit"></center></td>
<td><input type="Reset"value="Reset"></td>
</tr>
</table>
</center>
</body>

</html>

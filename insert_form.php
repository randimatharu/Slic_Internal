<?php 
//connect server
	$username="root";
	$password="";
	$hostname="localhost";
	$con=mysqli_connect($hostname,$username,$password);
	
//connect database
	$database=mysqli_select_db($con,"students");
	
//select table 
	$sql="SELECT * FROM student";
	
//get result for all table data
	$result=mysqli_query($con,$sql);

	
//close server
	mysqli_close($con);
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert Student</title>
</head>

<body>

<form method="post" action="#" name="form" style="text-align:center" >
<h1>Add Student</h1>
<table align="center" >
<tr>
<td>St ID</td>
<td><input type="text" name="sid" /></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" name="name" /></td>
</tr>
<tr>
<td>Age</td>
<td><input type="text" name="age" /></td>
</tr>
<tr>
<td>Address</td>
<td><textarea name="address"></textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="save" value="Save"/><input type="reset" name="reset" /></td>
</tr>

</table>

</form>
<a href="updateForm.php">Update Data</a>


</body>

</html>
<?php
if(isset($_REQUEST["sid"])){
	
	$sid=$_REQUEST["sid"];
	$name=$_REQUEST["name"];
	$age=$_REQUEST["age"];
	$address=$_REQUEST["address"];
	
	$con=mysqli_connect("localhost","root","");
	
	
	$database=mysqli_select_db($con,"students");
	
	
	$sql="INSERT INTO student(sid,name,age,address) VALUES('$sid','$name',$age,'$address')";
	
	$result=mysqli_query($con,$sql);
	
//print 
	echo "Number Of records Inserted: $result<br/>";
//CLOSE CONNECTION
	mysqli_close($con);
	
}
?>
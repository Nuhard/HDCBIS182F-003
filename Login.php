<html>
<head>
<title>Login</title>
</head>
<body>
<form name="frmLogin" method="post" action="#">
User Name:- <input type="text" name="txtName" /><br /><br />
Password:- <input type="text" name="txtPw" /><br /><br />
Type:- <select name="cmbType">
	<option value="Admin">Admin</option>
	<option value="User">User</option>
	</select><br /><br />
<input type="submit" name="btnLog" value="Loging" />
<input type="reset" name="btnCls" value="Clear" />
	
</form>
</body>
</html>

<?php
if(isset($_POST["txtName"]))
{
	$un=$_POST["txtName"];
	$pw=$_POST["txtPw"];
	$type=$_POST["cmbType"];
}
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"student");
	$sql="select * from log";
	$result=mysqli_query($con,$sql);
	$flag=0;
	while ($row=mysqli_fetch_array($result))
	{
		if($un==$row[1] && $pw==[2] && $type==[3])
		{
			$flag=1;
		}
	}
	if($flag==1)
	{
		session_start();
		$_SESSION["Uname"]=$un;
		$_SESSION["Utype"]=$type;
		$_SESSION["LAT"]=time();
		header("Location:welcome.php");
	}
	else
	{
		echo "Invalid Username or Password";
	}
	mysqli_close();

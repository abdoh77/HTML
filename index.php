<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body background = "loginPage.jpg" >


<div id = "main-wrapper">
		<center>
			<h2>Login Form</h2>
			
		
	
		<form action="" method="post">
	<table align="center">
		<tr>
			<td>username:</td>
			<td><input type="text" name="username" placeholder="enter your username"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name ="password" placeholder="enter your password"></td>
		</tr>
		<tr>
			<td></td>

			<td><input type="submit" name="submit" value="submit" ></td> 
			
		</tr>
	</table>
</form>
</center> 
</div>
</body>

<div class="col-md-6 col-md-offset-3" align="center">
<?php
if(isset($_POST['submit'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];
	if($user=="admin" && $pass=="admin"){
		echo("username and password matched");
		header('Location: Homepage.php');
	}else{
		echo("Error ! please enter correct data!");
	}
}
?>
</div>
</html>


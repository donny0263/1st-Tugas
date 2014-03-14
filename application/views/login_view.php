<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
	<h2><b>Login</b></h2>
	<form action="<?php echo base_url(); ?>index.php/login/proseslogin" method="post">
	<table>

		<tr>
			<td>Username :</td>
			<td><input type="text" name="username"></td>
		</tr>

		<tr>
			<td>Password :</td>	
			<td><input type="password" name="password"></td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Login"></td>
		</tr>

	</table>
	</form>

	<?php 
		if (isset($error)) 
		{
			echo "<b><span style='color:red;'>$error</span></b>";
		} 

		if (isset($logout)) 
		{
			echo "<b><span style='color:red;'>$logout</span></b>";
		}
	?>

</center>
</body>
</html>
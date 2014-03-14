<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Login Admin :
<form method="post" action="<?php echo site_url("c_admin"); ?>">
	Username : <input type="text" name="username">
	Password : <input type="text" name="password">
	<input type="submit" name="Login" id="Login" value="Login">
</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
	<?php 
		if(isset($welcome)) echo "<h2><span style='color:red;'>$welcome</span></h2>";
		echo "<br/>";
		echo anchor("login/logout", 'Logout'); 
	?>
</center>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Belajar 1</title>
	<<?php
	 	session_start() 
	?>
</head>
<body>
	<form method="post">
		<input type="text" name="text1">
		<input type="text" name="text2">
		<br/>
		<input type="submit" name="hasil" value="hasil">
		<input type="submit" name="logout" value="logout">
	<<?php 
		if (isset($_POST['logout'])) {
			session_destroy();
			session_unset();
			echo "<script>document.location.href = 'apaaja.php'</script>";
		}
	?>
	</form>
</body>
</html>
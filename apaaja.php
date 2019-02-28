<!DOCTYPE html>
<html>
<head>
	<title>lol</title>
</head>
<body>
	<form method="post">
		<input type="text" name="username">
		<br/>
		<input type="password" name="password">
		<br/>
		<input type="submit" name="login" value="login">
		<<?php
			if (isset($_POST['login'])) {
				if ($_POST['username'] == "RPL" && $_POST['password'] == "123") {
					echo "<script>alert('Berhasil Login');document.location.href = 'index.php'</script>";
				}else{
					echo "<script>alert('Gagal Login');document.location.href = 'apaaja.php'</script>";
				}
			}
		?>
	</form>
</body>
</html>
		 ?>
	</form>
</body>
</html>
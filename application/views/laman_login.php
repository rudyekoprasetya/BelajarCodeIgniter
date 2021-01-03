<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul; ?></title>
</head>
<body>
	<h1><?php echo $judul; ?></h1>
	<form method="post" action="<?php echo site_url('login/cek'); ?>">
	<table border="1">
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit">LOGIN</button></td>
		</tr>
	</table>
	</form>
</body>
</html>
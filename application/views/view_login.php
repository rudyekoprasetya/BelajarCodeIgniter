<?php echo form_open('login/cek'); ?>
<title> LOGIN ADMINISTRATOR </title>
<html>
<body>
<form>
<table border="2">
<tr><td>USERNAME</td><td><input type="text" name="username"></td></tr>
<tr><td>PASSWORD</td><td><input type="password" name="password"></td></tr>
<tr><td></td><td><input type="submit" name='login' value='LOGIN'>
</table>
</form>
</body>
</html>
<?php echo form_close(); ?>
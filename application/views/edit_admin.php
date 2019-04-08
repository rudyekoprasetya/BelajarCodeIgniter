<head>
	<title>belajar Code Igniter</title>
</head>
<h2><?php echo $isi; ?></h2>
<?php echo form_open('admin/admin_submit'); ?>

<table border="10">
<?php foreach($data->result_array()as $row) {?>
<tr><td>ID</td><td><input type="text" name="id" value="<?php echo $row['id_admin']; ?>"></td></tr>
<tr><td>USERNAME</td><td><input type="text" name="username" value="<?php echo $row['username']; ?>"></td></tr>
<tr><td>PASSWORD</td><td><input type="password" name="password" ></td></tr>
<tr><td></td><td><input type="submit" name='simpan' value='Apply'>
<input type="reset" name='Batal' value='Batal'></td></tr>
<?php } ?>
</table>

<?php echo form_close(); ?>
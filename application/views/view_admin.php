<div align="right"> <?php echo anchor("pengurus","[Data Pengurus]");?></div></td></tr> 
<div align="right"> <?php echo anchor("admin","[Data Admin]");?></div></td></tr> 
<div align="right"> <?php echo anchor("login/logout","[Logout]");?></div></td></tr>
<?php echo form_open('pengurus/simpan'); ?>
<?php echo form_open('admin/simpan'); ?>
<html>
<body>
<form>
<table border="10">
<tr><td>ID</td><td><input type="text" name="id"></td></tr>
<tr><td>USERNAME</td><td><input type="text" name="username"></td></tr>
<tr><td>PASSWORD</td><td><input type="text" name="password"></td></tr>
<tr><td></td><td><input type="submit" name='simpan' value='simpan'>
<input type="reset" name='Batal' value='batal'></td></tr>
</table>
</form>
</body>
</html>
<?php echo form_close(); ?>


<br>
<hr>
<br>





<table border=10>
<tr>
<th>ID</th>
<th>USERNAME</th>
<th>PASSWORD</th>
<th>AKSI</th>
</tr>
<?php
foreach($data->result_array()as $row){
?>
<tr>
	<td><?php echo $row['id']; ?></td>
	<td><?php echo $row['username']; ?></td>
	<td><?php echo "@$#%@##$@%"; ?></td>
	<th><?php echo anchor("admin/edit_admin/$row[id]","EDIT");?> | <?php echo anchor("admin/delete/$row[id]","DELETE");?></th>
</tr>
<?php } ?>
</table>
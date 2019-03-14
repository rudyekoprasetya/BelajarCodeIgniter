<div align="right"> <?php echo anchor("pengurus","[Data Pengurus]");?></div></td></tr> 
<div align="right"> <?php echo anchor("admin","[Data Admin]");?></div></td></tr> 
<div align="right"> <?php echo anchor("login/logout","[Logout]");?></div></td></tr>
<html>
<body>
<?php echo form_open('pengurus/simpan'); ?>
<table border="10">
<tr><td>ID</td><td><input type="text" name="id"></td></tr>
<tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
<tr><td>JENIS KELAMIN</td>
<td><input type="radio" name="gender" value="L">Laki Laki
<input type="radio" name="gender" value="P"> Perempuan
<tr><td>ALAMAT</td><td><textarea name="alamat"></textarea></td></tr>
<tr><td>GAJI</td><td><input type="text" name="gaji"></td></tr>
<tr><td></td><td><input type="submit" name='simpan' value='simpan'>
<input type="reset" name='Batal' value='batal'></td></tr>
</table>
</body>
</html>
<?php echo form_close(); ?>


<br>
<hr>
<br>





<table border=10>
<tr>
<th>NO</th>
<th>ID</th>
<th>NAMA</th>
<th>JENIS KELAMIN</th>
<th>ALAMAT</th>
<th>GAJI</th>
<th>AKSI</th>
</tr>
<?php
$no=0;
foreach($data->result_array()as $row){
$no++;
?>
<tr>
	<td><?php echo $no; ?></td>
	<td><?php echo $row['id']; ?></td>
	<td><?php echo $row['nama']; ?></td>
	<td><?php echo $row['gender']; ?></td>
	<td><?php echo $row['alamat']; ?></td>
	<td><?php echo $row['gaji']; ?></td>
	<td><a href="<?php echo site_url('pengurus/edit/'.$row['id']); ?>">EDIT</a> | <a href="<?php echo site_url('pengurus/hapus/'.$row['id']); ?>" onclick="return confirm('ciyus mau hapus?');">DELETE</a> </td>
</tr>
<?php } ?>
</table>



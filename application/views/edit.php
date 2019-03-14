
<h2><?php echo $isi; ?></h2>
<?php echo form_open('pengurus/edit_submit'); ?>

<table border="10">
<?php foreach($data->result_array()as $row) {?>
<tr><td>ID</td><td><input type="text" name="id" value="<?php echo $row['id']; ?>" readonly></td></tr>
<tr><td>NAMA</td><td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td></tr>
<tr><td>JENIS KELAMIN</td><td><input type="radio" name="gender" value="L" <?php if 
(!(strcmp($row['gender'],"L"))) {echo "CHECKED";} ?>>Laki Laki
					<input type="radio" name="gender" value="P" <?php if 
(!(strcmp($row['gender'],"P"))) {echo "CHECKED";} ?>> Perempuan

<tr><td>ALAMAT</td><td><textarea name="alamat"><?php echo $row['alamat']; ?></textarea></td></tr>
<tr><td>GAJI</td><td><input type="text" name="gaji" value="<?php echo $row['gaji']; ?>"></td></tr>
<tr><td></td><td><input type="submit" name='simpan' value='Apply'>
<input type="reset" name='Batal' value='batal'></td></tr>
<?php } ?>
</table>

<?php echo form_close(); ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul; ?></title>
</head>
<body>
<p>
	<a href="<?php echo site_url('login/logout'); ?>">[Logout]</a> 
	<a href="<?php echo site_url('cetakpdf'); ?>" target="_blank">[Cetak PDF]</a> 
	<a href="<?php echo site_url('cetakxls'); ?>" target="_blank">[Cetak Excel]</a> 
</p>
	<h1><?php echo $judul ?></h1>

	<table border="2">
		<tr>
			<th>ID</th>
			<th>NAMA</th>
			<th>ALAMAT</th>
			<th>GENDER</th>
			<th>GAJI</th>
			<th></th>
		</tr>
<?php foreach ($isi->result_array() as $row) { ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['alamat']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $row['gaji']; ?></td>
			<td>
				<a href="<?php echo site_url('pengurus/edit/'.$row['id']); ?>">EDIT</a> | 
				<a href="<?php echo site_url('pengurus/hapus/'.$row['id']); ?>">DELETE</a>
			</td>
		</tr>
<?php } ?>
	</table>
<hr>
<h1>Input Data</h1>
<form action="<?php echo site_url('pengurus/simpan'); ?>" method="post">
<table>
	<tr>
		<td>ID</td>
		<td><input type="text" name="id"></td>
	</tr>	
	<tr>
		<td>NAMA</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>ALAMAT</td>
		<td><textarea name="alamat"></textarea></td>
	</tr>	
	<tr>
		<td>GENDER</td>
		<td>
			<select name="gender">
				<option value="L">LAKI-LAKI</option>
				<option value="P">PEREMPUAN</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>GAJI</td>
		<td><input type="number" name="gaji"></td>
	</tr>
	<tr>
		<td></td>
		<td>
			<button type="submit">SIMPAN</button> 
			<button type="reset">BATAL</button>
		</td>
	</tr>
</table>
</form>

</body>
</html>
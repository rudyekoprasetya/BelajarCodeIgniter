<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul; ?></title>
</head>
<body>
	<h1><?php echo $judul ?></h1>
<?php foreach ($isi->result_array() as $row) {?>
	<form action="<?php echo site_url('pengurus/ubah'); ?>" method="post">
	<table>
		<tr>
			<td>ID</td>
			<td><input type="text" name="id" value="<?php echo $row['id']; ?>"></td>
		</tr>	
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
		</tr>
		<tr>
			<td>ALAMAT</td>
			<td><textarea name="alamat"><?php echo $row['alamat']; ?></textarea></td>
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
			<td><input type="number" name="gaji" value="<?php echo $row['gaji']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit">UBAH</button> 
				<button type="reset">BATAL</button>
			</td>
		</tr>
	</table>
	</form>
<?php } ?>
</body>
</html>
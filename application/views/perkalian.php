<?php echo form_open('hitung/perkalian');?>
<?php echo form_input('angka1',$angka1); ?> X
<?php echo form_input('angka2',$angka2); ?>
<br>
<?php echo form_submit('submit','HITUNG'); ?>
<?php echo form_close();?>
<br>
hasil : <?php echo $hasil;?>
<li><?php echo anchor('hitung','Kembali');?></li>

<!--bandingkan dengan bawah
<hr>

<form method="post" action="<?php echo site_url('hitung/perkalian'); ?>">
<input type="text" name="angka1" value="<?php echo angka1; ?>"> X 
<input type="text" name="angka2" value="<?php echo angka1; ?>">
<br>
<input type="submit" name="submit" value="HITUNG">
</form>

hasil: <?php echo $hasil;?>
<li><a href="<?php echo site_url('hitung'); ?>">Kembali</a></li>-->
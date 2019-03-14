<?php echo form_open('hitung/pengurangan');?>
<?php echo form_input('angka1',$angka1); ?> -
<?php echo form_input('angka2',$angka2); ?>
<br>
<?php echo form_submit('submit','HITUNG'); ?>
<?php echo form_close();?>
<br>
hasil : <?php echo $hasil;?>
<li><?php echo anchor('hitung','Kembali');?></li>
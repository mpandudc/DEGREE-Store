<div class="page-header">
	<h3>Edit Angoota</h3>
</div>


<?php validation_errors('<p style="color:red;">','</p>');?>

<?php
	if($this->session->flashdata())
	{
		echo "<div class='alert alert-danger alert-massage'>";
		echo $this->session->flashdata('alert');
		echo "</div>";
	}
?>


<?php foreach($customer as $c){ ?>
<form action="<?php echo base_url().'admin/update_customer' ?>" method="post" enctype="multipart/form-data">
<div class="panel panel-default">
<div class="panel-body">

<div class="form-group">
	<label>Nama*</label>
	<input type="hidden" name="id" value="<?php echo $c->id_customer; ?>">
	<input type="text" name="nama_customer" class="form-control" value="<?php echo $c->nama_customer;?>">
	<?php echo form_error('nama_customer'); ?>
</div>

<div class="form-group">
	<label>Jenis Kelamin</label>
	<select name="gender" class="form-control">
		<option <?php if($c->gender == "Laki-Laki"){echo "selected='selected'";} echo $c->gender; ?> value="Laki-Laki">Laki-Laki</option>
		<option <?php if($c->gender == "Perempuan"){echo "selected='selected'";} echo $c->gender; ?> value="Perempuan">Perempuan</option>
	</select>
	<?php echo form_error('gender'); ?>
</div>
	
<div class="form-group">
	<label>Nomor Telepon*</label>
	<input type="text" name="no_tlpn" class="form-control" value="<?php echo $c->no_tlpn;?>">
	<?php echo form_error('no_tlpn'); ?>
</div>
	
<div class="form-group">
	<label>Alamat*</label>
	<input type="text" name="alamat" class="form-control" value="<?php echo $c->alamat;?>">
	<?php echo form_error('alamat'); ?>
</div>
	
<div class="form-group">
	<label>Email*</label>
	<input type="text" name="email" class="form-control" value="<?php echo $c->email;?>">
	<?php echo form_error('email'); ?>
</div>
<div class="form_group">
	<input type="submit" value="Simpan" class="btn btn-primary btn-block">
</div>
</div>
</div>
</form>
<?php } ?>
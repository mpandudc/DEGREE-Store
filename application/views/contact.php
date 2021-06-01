<div class="page-header">
<title>Contact Us | DEGREE</title>
</div>

<div class="row">
<div class="col-lg-6 form-contact">
		<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-tittle" style="font-size: 18px; font-weight: bold"<b><i class="glyphicon glyphicon-envelope"></i>&nbsp;&nbsp; Fill this form </h3>
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

<form action="<?php echo base_url().'index/contact_act' ?>" method="post" enctype="multipart/form-data">
<div class="panel panel-default">
<div class="panel-body">	
<div class="form-group">
	<label>Name*</label>
	<input type="text" name="nama_customer" class="form-control">
	<?php echo form_error('nama_customer'); ?>
</div>

<div class="form-group">
	<label>Gender</label>
	<select name="gender" class="form-control">
		<option value=""></option>
		<option value="Laki-Laki">Male</option>
		<option value="Perempuan">Female</option>
	</select>
	<?php echo form_error('gender'); ?>
</div>
	
<div class="form-group">
	<label>Number*</label>
	<input type="text" name="no_tlpn" class="form-control">
	<?php echo form_error('no_tlpn'); ?>
</div>
	
<div class="form-group">
	<label>Address*</label>
	<textarea name="alamat" class="form-control"></textarea>
	<?php echo form_error('alamat'); ?>
</div>
	
<div class="form-group">
	<label>Email*</label>
	<input type="text" name="email" class="form-control">
	<?php echo form_error('email'); ?>
</div>

<div class="form-group">
	<label>Message*</label>
	<textarea name="pesan" class="form-control"></textarea>
	<?php echo form_error('pesan'); ?>
</div>
	
<div class="form_group">
	<input type="submit" value="Submit" class="btn btn-primary btn-block">
</div>
</div>
</div>
</form>
</div>
</div>



<div class="col-lg-6 list-contact">
		<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-tittle" style="font-size: 18px; font-weight: bold"<b><i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp; Contact Us </h3>
			</div>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable">
		<thead>
			<tr>
				<th class="text-center">Name</th>
				<th class="text-center">Number</th>
				<th class="text-center">Email</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($admin as $a){
			?>
			<tr>
				<td align="center"><?php echo $a->nama_admin ?></td>
				<td align="center"><?php echo $a->no_tlpn ?></td>
				<td align="center"><?php echo $a->email ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
</div>
</div>
</div>
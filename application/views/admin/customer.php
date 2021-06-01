<div class="page-header">
	<h3>Customer</h3>
</div>

<a href="<?php echo base_url().'admin/tambah_customer';?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Customer Baru</a>
<br>
<br>

<div>
	<table class="table table-bordered table-striped table-hover" id="table-datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>No Telepon</th>
				<th>Alamat</th>
				<th>Email</th>
				<th>Pesan</th>
				<th>Pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;
				foreach($customer as $a){
			?>
			<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $a->nama_customer ?></td>
				<td><?php echo $a->gender ?></td>
				<td><?php echo $a->no_tlpn ?></td>
				<td><?php echo $a->alamat ?></td>
				<td><?php echo $a->email ?></td>
				<td><?php echo $a->pesan ?></td>
				<td nowrap="nowrap">
					<a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_customer/'.$a->id_customer;?>"><span class="glyphicon glyphicon-zoom-in"></span></a>
					<a class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/hapus_customer/'.$a->id_customer;?>"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<style>


</style>
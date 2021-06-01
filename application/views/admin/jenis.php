<div class="page-header">
	<h3>Jenis</h3>
</div>

<a href="<?php echo base_url().'admin/tambah_jenis';?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Tambah Kategori</a>
<br>
<br>

<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable">
		<thead>
			<tr>
				<th class="text-center">No</th>
				<th class="text-center">Jenis</th>
				<th class="text-center">Pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;
				foreach($jenis as $j){
			?>
			<tr>
				<td align="center"><?php echo $no++;?></td>
				<td align="center"><?php echo $j->nama_jenis ?></td>
			</td>
			<td align="center" nowrap="nowrap">
				<a class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/hapus_jenis/'.$j->id_jenis;?>"><span class="glyphicon glyphicon-remove"></span></a>
			</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>


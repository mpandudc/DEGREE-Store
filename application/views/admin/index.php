<div class="page-header">
	<h3>Dashboard</h3>
</div>
<div class="row">
	<div class="col-lg-3 col-md-6 dashboard">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="glyphicon glyphicon-folder-open"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<font size="18"><b><?php echo $this->m_degree->get_data('gear')->num_rows();?></b></font>
						</div>
						<div><b>Jumlah Product Yang Terdaftar</b></div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url().'admin/gear'?>">
				<div class="panel-footer">
					<span class="pull-left"> Lihat Detail </span>
					<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
				<div class="clearfix"></div>
			</div>
		</a>
	</div>
</div>

	<div class="col-lg-3 col-md-6 dashboard">
		<div class="panel panel-success">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="glyphicon glyphicon-user"></i>
						</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<font size="18"><b><?php echo $this->m_degree->get_data('customer')->num_rows();?></b></font>
						</div>
						<div><b>Jumlah Customer Yang Terdaftar</b></div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url().'admin/customer'?>">
				<div class="panel-footer">
					<span class="pull-left"> Lihat Detail </span>
					<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
				<div class="clearfix"></div>
			</div>
		</a>
	</div>
</div>


	<div class="col-lg-3 col-md-6 dashboard">
		<div class="pane panel-danger">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="glyphicon glyphicon-ok"></i>
						</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<font size="18"><b><?php echo $this->m_degree->get_data('pembelian')->num_rows();?></b></font>
						</div>
						<div><b>Jumlah Pembelian Yang Selesai</b></div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url().'admin/pembelian'?>">
				<div class="panel-footer">
					<span class="pull-left"> Lihat Detail </span>
					<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
				<div class="clearfix"></div>
			</div>
		</a>
	</div>
</div>
</div>

<hr>

<div class="row ">
	<div class="col-lg-4 dashboard-bawah">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-tittle" style="font-size: 18px; font-weight: bold"<b><i class="glyphicon glyphicon-random arrow-right"></i>&nbsp;&nbsp;Status Product </h3>
			</div>
			<div class="panel-body">
				<div class="list-group">
					<?php foreach($gear as $m){ ?>
						<a href="#" class="list-group-item">
							<span class="badge"><?php if($m->status_gear == 1){echo "Tersedia";}else{echo "Stok Habis";}?></span>
							<img src="<?php echo base_url('assets/glyphicon/mouse.png');?>" width="20" height="16"/>&nbsp;&nbsp;<?php echo $m->nama_gear;?>
						</a>
					<?php } ?>
				</div>
			<div class="text-right">
				<a href="<?php echo base_url().'admin/gear'?>">Lihat Semua gear<i class="glyphicon glyphicon-arrow-right"></i></a>
			</div>
		</div>
	</div>
</div>

	<div class="col-lg-4 dashboard-bawah">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-tittle" style="font-size: 18px; font-weight: bold"<b><i class="glyphicon glyphicon-user o"></i> Customer Terbaru </h3>
		</div>
			<div class="panel-body">
				<div class="list-group">
					<?php foreach($customer as $c){ ?>
						<a href="#" class="list-group-item">
							<span class="badge"><?php echo $c->gender; ?></span>
							<i class="glyphicon glyphicon-user"></i><?php echo $c->nama_customer;?>
						</a>
					<?php } ?>
				</div>
			<div class="text-right">
				<a href="<?php echo base_url().'admin/customer'?>">Lihat Semua customer<i class="glyphicon glyphicon-arrow-right"></i></a>
			</div>
		</div>
	</div>
</div>

</div>
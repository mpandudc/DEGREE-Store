<?php 
	if(! isset($_SESSION['status'])){
		redirect(base_url().'login?pesan=belumlogin');}
?>
<!doctype html>
<html>
<head>
<title>Dasboard - DEGREE</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css.map')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/datatable/datatables.css'?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/footer-ind2906.css'?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap-3.2.0/dist/css/bootstrap.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome-4.1.0/css/font-awesome.min.css')?>">
<!-- include summernote css/js-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/dist/summernote.css'?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/style.css')?>">

<link href="<?php echo base_url().'assets/images/logo.ico'?>" rel="shortcut icon" />
</head>
<body>
	<nav class="main-nav navbar-fixed-top navbar-default" role="navigation">
		<div class="container">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
			  	<a class="navbar-brand" href="<?php echo base_url().'admin'; ?>"><img src="<?php echo base_url().'assets/images/logo-black.png'?>" alt=""></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-examplenavbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo base_url().'admin/tulis_informasi'; ?>"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Post</a></li>
					<li><a href="<?php echo base_url().'admin/informasi'; ?>"><span class="glyphicon glyphicon-tasks"></span>&nbsp;&nbsp;Informasi</a></li>
					<li><a href="<?php echo base_url().'admin/jenis'; ?>"><span class="glyphicon glyphicon-th"></span>&nbsp;&nbsp;Kategori </a></li>
					<li><a href="<?php echo base_url().'admin/gear'; ?>"><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;Product </a></li>
					<li><a href="<?php echo base_url().'admin/customer'; ?>"><span class="glyphicon glyphicon-user"></span> Data Customer </a></li>
					<li><a href="<?php echo base_url().'admin/pembelian'; ?>"><span class="glyphicon glyphicon-sort"></span> Pembelian </a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"><?php echo " Hallo, <b>".$this->session->userdata('nama');?></b><span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url().'admin/ganti_password'; ?>"><i class="glyphicon glyphicon-lock"></i> Ganti Password</a></li>
							<li><a href="<?php echo base_url().'admin/logout'; ?>"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<br>
	<br>
<div class="container">


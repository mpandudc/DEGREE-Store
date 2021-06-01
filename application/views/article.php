<div class="page-header">
<title>Article | DEGREE</title>
</div>

<div class="row">
<div class="col-lg-12">
		<div class="panel panel-default article">
				<div class="panel-heading">
					<h3 class="panel-tittle text-uppercase"><i class="glyphicon glyphicon-list-alt"></i>&nbsp;&nbsp; Product Article</h3>
			</div>
				<div class="panel-body">
					<div class="list-group" style="font-size: 15px;">
					<?php foreach($article as $r){ ?>
					<a href="<?php echo base_url().'index/articles/'.$r->id_article;?>" class="list-group-item">
						<span class="badge"><?php echo date('d/m/Y',strtotime($r->tgl_terbit)); ?></span>
						<i></i><?php echo $r->title;?>
					</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
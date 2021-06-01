<?php
	foreach($article as $r){
		?>
<div class="page-header" value="<?php echo $r->id_article;?>">
<title><?php echo $r->title;?> | DEGREE</title>
</div>
<div class="row articles">
	<div class="col-lg-12">
<h3><?php echo $r->title;?></h3>
<hr>
<br>
	<div class="content" value="<?php echo $r->id_article;?>"><?php echo $r->content;?></div>
<hr>
<p value="<?php echo date('d/m/Y',strtotime($r->id_article)); ?>"><?php echo date('d/m/Y',strtotime($r->tgl_terbit)); ?></p>
<hr/>
<p value="<?php echo $r->id_article; ?>">Author: <?php echo $r->penerbit; ?></p>
<hr>
<?php } ?>
	<a href="<?php echo base_url().'index/article'; ?>"><p><< Back</p></a>
</div>
</div>
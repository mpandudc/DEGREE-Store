<title>Gaming Gear | Degree</title>

<!-- Product Grid-->
<section class="page-section bg-light" id="product">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Product</h2>
          <h3 class="section-subheading text-muted">The Quality for gaming gear sold below is Guaranteed to boost your performance. <br>The Specification is 100% correct so you can rest assured and just buy the item you want for the best price you can paid.</h3>
        </div>
        <div class="row">
		<?php foreach($gear as $m){?>
			<div class="col-lg-4 col-sm-6 mb-4">
            <div class="product-item">
              <a class="product-link" data-bs-toggle="modal" href="#gear<?php echo $m->id_gear;?>">
                <div class="product-hover">
                  <div class="product-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                </div>
                <img class="img-fluid img-product" src="<?php echo base_url().'assets/images/product_img/'.$m->gambar; ?>" alt=""/>
              </a>
              <div class="product-caption">
                <div class="product-caption-heading"><?php echo $m->nama_gear;?></div>
                <div class="product-caption-subheading text-muted">Rp. <?php echo number_format($m->hrg_beli,2);?></div>
              </div>
            </div>
          </div>

          <div class="product-modal modal fade" id="gear<?php echo $m->id_gear;?>">
          <div class="modal-dialog">
            <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url().'assets/images/close-icon.svg'?>" alt="Close modal" /></div>
            <div class="container">
              <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase"><?php echo $m->nama_gear;?></h2>
                <p class="item-intro text-muted">Rp. <?php echo number_format($m->hrg_beli,2);?>.</p>
                <img class="img-fluid d-block mx-auto" src="<?php echo base_url().'assets/images/product_img/'.$m->gambar; ?>" alt="..." />
                <p>
                  Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                  cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!
                </p>
                <ul class="list-inline">
                  <li>
                  <strong>ID Gear :</strong>
                  <?php echo $m->id_gear;?>
                  </li>
                  <li>
                  <strong>Kode Gear :</strong>
                  <?php echo $m->kd_gear;?>
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-times me-1"></i>
                  Close Product
                </button>
                </div>
              </div>
              </div>
            </div>
            </div>
          </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </section>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url().'assets/images/gear-1.jpg'?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>beautiful with Corsair...</h5>
        <p>Setup 1.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url().'assets/images/gear-2.jpg'?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>worth bundle with Logitech..</h5>
        <p>Setup 2.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url().'assets/images/gear-3.jpg'?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>elegant with Razer...</h5>
        <p>Setup 3.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="page-section bg-light" id="partner">
<div class="container text-center">    
	<h4>The Quality for gaming gear sold below is Guaranteed to boost your performance</h4>
	<h4>The Specification is 100% correct so you can rest assured and just buy the item you want for the best price you can paid. </h4>
  <br><br>
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Follow Us</h5>
        <p class="card-text">for more updated information.</p>
        <a href="https://www.youtube.com/?hl=id&gl=ID" class="btn btn-primary">Click here</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Our newest article</h5>
        <p class="card-text">Read newest article today.</p>
        <a href="<?php echo base_url().'index/article'; ?>" class="btn btn-primary">Click here</a>
      </div>
    </div>
  </div>
</div>
</div><br>
</section>

<section class="page-section bg-dark" id="partner">
<div class="container text-center">    
  <h3 style="color: white;">Our Partners</h3>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <img src="<?php echo base_url().'assets\upload\Steelseries-logo.png'?>" class="img-responsive" style="width:100px" alt="Image">
    </div>
    <div class="col-sm-2"> 
      <img src="<?php echo base_url().'assets\upload\Logitech_logo_gaming.png'?>" class="img-responsive" style="width:100px" alt="Image">
    </div>
    <div class="col-sm-2"> 
      <img src="<?php echo base_url().'assets\upload\razer.png'?>" class="img-responsive" style="width:100px" alt="Image">
    </div>
    <div class="col-sm-2"> 
      <img src="<?php echo base_url().'assets\upload\logo-msi.png'?>" class="img-responsive" style="width:100px" alt="Image">
    </div> 
    <div class="col-sm-2"> 
      <img src="<?php echo base_url().'assets\upload\corsair.png'?>" class="img-responsive" style="width:100px" alt="Image">
    </div>     
    <div class="col-sm-2"> 
      <img src="<?php echo base_url().'assets\upload\rog.png'?>" class="img-responsive" style="width:100px" alt="Image">
    </div> 
  </div>
</div><br>
</div>
    </section>
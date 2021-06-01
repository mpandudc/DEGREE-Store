<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css'?>">
  <!--Favicon-->
  <link href="<?php echo base_url().'assets/images/logo.ico'?>" rel="shortcut icon" />
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
      padding: 20px 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    .carousel-inner p {
		color: white;
	}
	.carousel-inner h3 {
		color: white;
		font-size: 30px;
		font-family: "Bebas Neue", cursive;
	}
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:250px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>
<div class="jumbotron" style="text-transform: uppercase;">
  <div class="container">    
    <p><b>Gaming Gear <br>solution </b>for your <br><b>best performance</b></p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url().''; ?>"><img src="<?php echo base_url().'assets/images/logo.png'?>" alt=""></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right text-uppercase">
	  	<li><a href="<?php echo base_url().''; ?>"> Home </a></li>
      <li><a href="<?php echo base_url().'index/product'; ?>">&nbsp;&nbsp;Product </a></li>
      <li><a href="<?php echo base_url().'index/article'; ?>">&nbsp;&nbsp;Article </a></li>
      <li><a href="<?php echo base_url().'index/contact'; ?>">Contact Us </a></li>
      </ul>
    </div>
  </div>
</nav>

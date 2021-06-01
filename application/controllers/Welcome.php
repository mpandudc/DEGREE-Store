<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Welcome extends CI_Controller{
	function __construct(){
		parent::__construct();
}
public function index(){
	$this->load->view("header-home");
	$this->load->view("index");
	$this->load->view("footer");
}

 }
?>
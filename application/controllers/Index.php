<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Index extends CI_Controller{
	function __construct(){
		parent::__construct();
}

function article(){
	$data['article'] = $this->db->query("select * from article order by id_article asc limit 10")->result();
	
$this->load->view("header");
$this->load->view("article",$data);
$this->load->view("footer");
}
function articles($id){
$where = array('id_article' => $id);
	$data['article'] = $this->m_degree->edit_data($where,'article')->result();

$this->load->view("header");
$this->load->view("articles",$data);
$this->load->view("footer");
}

public function product(){
	$data['gear'] = $this->m_degree->get_data('gear')->result();
	$this->load->view("header-product");
	$this->load->view("product",$data);
	$this->load->view("footer");
}
public function contact(){
	$data['admin'] = $this->m_degree->get_data('admin')->result();
	$this->load->view("header");
	$this->load->view("contact",$data);
	$this->load->view("footer");
}

function contact_act(){
	$nama_customer = $this->input->post('nama_customer');
	$gender = $this->input->post('gender');
	$no_tlpn = $this->input->post('no_tlpn');
	$alamat = $this->input->post('alamat');
	$email = $this->input->post('email');
	$pesan = $this->input->post('pesan');
	$this->form_validation->set_rules('nama_customer','Nama','required');
	$this->form_validation->set_rules('no_tlpn','Nomor Telepon','required|numeric');
	$this->form_validation->set_rules('alamat','Alamat','required');
	$this->form_validation->set_rules('email','Email','required');
	$this->form_validation->set_rules('pesan','Pesan','required');
	if($this->form_validation->run() !=FALSE){
		
		$data = array(
		'nama_customer' => $nama_customer,
		'gender' => $gender,
		'no_tlpn' => $no_tlpn,
		'alamat' => $alamat,
		'email' => $email,
		'pesan' => $pesan,
		);
		$this->m_degree->insert_data($data,'customer');
		redirect(base_url().'index/contact');
}else{
	$data['admin'] = $this->m_degree->get_data('admin')->result();
	$this->load->view("header");
	$this->load->view("contact",$data);
	$this->load->view("footer");
	}
}

 }
?>
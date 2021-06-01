<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
//Cek Login
function login(){
		if($this->session->set_userdata('login') != "login")
			redirect(base_url().'login?pesan=belumlogin');
	}
}
	
function index(){
	$data['pembelian'] = $this->db->query("select * from beli order by id_beli desc limit 10")->result();
	$data['customer'] = $this->db->query("select * from customer order by id_customer desc limit 10")->result();
	$data['gear'] = $this->db->query("select * from gear order by id_gear desc limit 10")->result();
	
$this->load->view("admin/header");
$this->load->view("admin/index",$data);
$this->load->view("admin/footer");
}

function jenis(){
	$data['jenis'] = $this->m_degree->get_data('jenis')->result();
	$this->load->view("admin/header");
	$this->load->view("admin/jenis",$data);
	$this->load->view("admin/footer");
}

function tambah_jenis(){
	$this->load->view("admin/header");
	$this->load->view("admin/tambah_jenis");
	$this->load->view("admin/footer");
}

function tambah_jenis_act(){
	$nama_jenis = $this->input->post('nama_jenis');
	$this->form_validation->set_rules('nama_jenis','Jenis gear','required');
	if($this->form_validation->run() !=FALSE){
		
		$data = array(
		'nama_jenis' => $nama_jenis);
		
		$this->m_degree->insert_data($data,'jenis');
		redirect(base_url().'admin/jenis');
}else{
	$this->load->view("admin/header");
	$this->load->view("admin/tambah_jenis");
	$this->load->view("admin/footer");
	}
}

function hapus_jenis($id){
	$this->db->where('id_jenis',$id);
	$this->db->delete('jenis');
	redirect(base_url().'admin/jenis');
}	

function gear(){
	$data['gear'] = $this->m_degree->get_data('gear')->result();
	$this->load->view("admin/header");
	$this->load->view("admin/gear",$data);
	$this->load->view("admin/footer");
}
	
function tambah_gear(){
	$data['jenis'] = $this->m_degree->get_data('jenis')->result();
	$this->load->view("admin/header");
	$this->load->view("admin/tambah_gear",$data);
	$this->load->view("admin/footer");
}
	
function tambah_gear_act(){
	$tgl_input = date('Y-m-d');
	$id_jenis = $this->input->post('id_jenis');
	$nama_gear = $this->input->post('nama_gear');
	$thn_gear = $this->input->post('thn_gear');
	$kd_gear = $this->input->post('kd_gear');
	$hrg_beli = $this->input->post('hrg_beli');
	$status_gear = $this->input->post('status_gear');
	$this->form_validation->set_rules('id_jenis','Jenis gear','required');
	$this->form_validation->set_rules('nama_gear','Nama gear','required');
	$this->form_validation->set_rules('status_gear','Status gear','required');
	$this->form_validation->set_rules('hrg_beli','Harga beli','required|numeric');
	if($this->form_validation->run() !=FALSE){
		//configurasi upload gambar
			$config['upload_path'] = './assets/images/product_img/';
			$config['allowed_types'] = 'jpg|png|jpeg|gif';
			$config['max_size'] = '2048';
			$config['file_name'] = 'gambar'.'time';
		
	$this->load->library('upload',$config);
		
		if($this->upload->do_upload('gambar')){
			$gambar=$this->upload->data();
			
			$data = array(
				'id_jenis' => $id_jenis,
				'nama_gear' => $nama_gear,
				'thn_gear' => $thn_gear,
				'kd_gear' => $kd_gear,
				'gambar' => $gambar['file_name'],
				'tgl_input' => $tgl_input,
				'hrg_beli' => $hrg_beli,
				'status_gear' => $status_gear
				);
			
			$this->m_degree->insert_data($data,'gear');
			redirect(base_url().'admin/gear');
		}else{
			if($this->session->set_flashdata('alert','Anda Belum Memilih Foto'));
		}
	}else{
	$data['jenis'] = $this->m_degree->get_data('jenis')->result();
	$this->load->view("admin/header");
	$this->load->view("admin/tambah_gear",$data);
	$this->load->view("admin/footer");
	}
}

function edit_gear($id){
$where = array('id_gear' => $id);
	$data['gear'] = $this->db->query("select * from gear M, jenis J where M.id_jenis=J.id_jenis and M.id_gear='$id'")->result();
	$data['jenis'] = $this->m_degree->get_data('jenis')->result();
	$data['gear'] = $this->m_degree->edit_data($where,'gear')->result();
	$this->load->view("admin/header");
	$this->load->view("admin/edit_gear",$data);
	$this->load->view("admin/footer");
}

function update_gear(){
	$id = $this->input->post('id');
	$id_jenis = $this->input->post('id_jenis');
	$nama_gear = $this->input->post('nama_gear');
	$thn_gear = $this->input->post('thn_gear');
	$kd_gear = $this->input->post('kd_gear');
	$hrg_beli = $this->input->post('hrg_beli');
	$status_gear = $this->input->post('status_gear');
	$this->form_validation->set_rules('id_jenis','jenis','required');
	$this->form_validation->set_rules('nama_gear','nama gear','required');
	$this->form_validation->set_rules('thn_gear','Tahun gear','required|min_length[4]');
	$this->form_validation->set_rules('kd_gear','kd_gear','required');
	
	if($this->form_validation->run() !=FALSE){
		//configurasi upload gambar
			$config['upload_path'] = './assets/images/product_img/';
			$config['allowed_types'] = 'jpg|png|jpeg|gif';
			$config['max_size'] = '2048';
			$config['file_name'] = 'gambar'.'time';
	$this->load->library('upload',$config);
		
			$where = array('id_gear' => $id);
			$data = array(
				'id_jenis' => $id_jenis,
				'nama_gear' => $nama_gear,
				'thn_gear' => $thn_gear,
				'kd_gear' => $kd_gear,
				'hrg_beli' => $hrg_beli,
				'gambar' => $gambar['file_name'],
				'tgl_input' => $tgl_input,
				'status_gear' => $status_gear
				);
		
			if($this->upload->do_upload('gambar')){
				//proses upload gambar
			$gambar=$this->upload->data();
				unlink('./assets/images/product_img/'.$this->input->post('old_pict', TRUE));
				$data['gambar'] = $gambar['file_name'];
				
				$this->m_degree->update_data($where, $data,'gear');
			}else{
				$this->m_degree->update_data($where, $data,'gear');
			}
				$this->m_degree->update_data($where, $data,'gear');
		redirect(base_url().'admin/gear?pesan=berhasil');
	}else{
		$where =array('id_gear' => $id);
	$data['gear'] = $this->db->query("select * from gear M, jenis J where M.id_jenis=J.id_jenis and M.id_gear='$id'")->result();
	$data['jenis'] = $this->m_degree->get_data('jenis')->result();
	$data['pembelian'] = $this->m_degree->edit_data($where,'pembelian')->result();
	$this->load->view("admin/header");
	$this->load->view("admin/edit_gear",$data);
	$this->load->view("admin/footer");
}
}

function hapus_gear($id){
	$this->db->where('id_gear',$id);
	$this->db->delete('gear');
	redirect(base_url().'admin/gear');
}	

function customer(){
	$data['customer'] = $this->m_degree->get_data('customer')->result();
	$this->load->view("admin/header");
	$this->load->view("admin/customer",$data);
	$this->load->view("admin/footer");
}

function tambah_customer(){
	$this->load->view("admin/header");
	$this->load->view("admin/tambah_customer");
	$this->load->view("admin/footer");
}
function tambah_customer_act(){
	$nama_customer = $this->input->post('nama_customer');
	$gender = $this->input->post('gender');
	$no_tlpn = $this->input->post('no_tlpn');
	$alamat = $this->input->post('alamat');
	$email = $this->input->post('email');
	$this->form_validation->set_rules('nama_customer','Nama','required');
	$this->form_validation->set_rules('no_tlpn','Nomor Telepon','required|numeric');
	$this->form_validation->set_rules('alamat','Alamat','required');
	$this->form_validation->set_rules('email','Email','required');
	if($this->form_validation->run() !=FALSE){
		
		$data = array(
		'nama_customer' => $nama_customer,
		'gender' => $gender,
		'no_tlpn' => $no_tlpn,
		'alamat' => $alamat,
		'email' => $email,
		);
		$this->m_degree->insert_data($data,'customer');
		redirect(base_url().'admin/customer');
}else{
	$this->load->view("admin/header");
	$this->load->view("admin/tambah_customer");
	$this->load->view("admin/footer");
	}
}

function edit_customer($id){
$where = array('id_customer' => $id);
	$data['customer'] = $this->m_degree->edit_data($where,'customer')->result();
	$this->load->view("admin/header");
	$this->load->view("admin/edit_customer",$data);
	$this->load->view("admin/footer");
}

function update_customer(){
	$id = $this->input->post('id');
	$nama_customer = $this->input->post('nama_customer');
	$gender = $this->input->post('gender');
	$no_tlpn = $this->input->post('no_tlpn');
	$alamat = $this->input->post('alamat');
	$email = $this->input->post('email');
	$this->form_validation->set_rules('nama_customer','Nama','required');
	$this->form_validation->set_rules('no_tlpn','Nomor Telepon','required|numeric');
	$this->form_validation->set_rules('alamat','Alamat','required');
	$this->form_validation->set_rules('email','Email','required');
	if($this->form_validation->run() !=FALSE){
	
		$where = array('id_customer' => $id);
			$data = array(
				'nama_customer' => $nama_customer,
				'gender' => $gender,
				'no_tlpn' => $no_tlpn,
				'alamat' => $alamat,
				'email' => $email
				);
		
				$this->m_degree->update_data($where, $data,'customer');
		redirect(base_url().'admin/update_customer');
			}else{
		redirect(base_url().'admin/customer?pesan=berhasil');
		$where =array('id_customer' => $id);
	$data['customer'] = $this->m_degree->edit_data($where,'customer')->result();
	$this->load->view("admin/header");
	$this->load->view("admin/edit_customer",$data);
	$this->load->view("admin/footer");
}
}

function hapus_customer($id){
	$this->db->where('id_customer',$id);
	$this->db->delete('customer');
	redirect(base_url().'admin/customer');
}	

function pembelian(){
	
	$data['pembelian'] = $this->db->query("SELECT * FROM beli S, gear M, customer C WHERE S.id_gear=M.id_gear and S.id_customer=C.id_customer")->result();
	
	$this->load->view("admin/header");
	$this->load->view("admin/pembelian",$data);
	$this->load->view("admin/footer");
}

function tambah_pembelian(){
	
	$w = array('status_gear'=>'1');
	$data['gear'] = $this->m_degree->edit_data($w,'gear')->result();
	$data['customer'] = $this->m_degree->get_data('customer')->result();
	$data['pembelian'] = $this->m_degree->get_data('beli')->result();

	$this->load->view("admin/header");
	$this->load->view("admin/tambah_pembelian",$data);
	$this->load->view("admin/footer");
}


function tambah_pembelian_act(){
	$tgl_pencatatan = date('Y-m-d H:i:s');
	$customer = $this->input->post('id_customer');
	$gear = $this->input->post('id_gear');
	$tgl_beli = $this->input->post('tgl_beli');
	$tgl_garansi = $this->input->post('tgl_garansi');
	$hrga_beli = $this->input->post('hrga_beli');
	$this->form_validation->set_rules('id_customer','Customer','required');
	$this->form_validation->set_rules('id_gear','gear','required');
	$this->form_validation->set_rules('tgl_beli','Tanggal beli','required');
	$this->form_validation->set_rules('tgl_garansi','Tanggal garansi','required');
	$this->form_validation->set_rules('hrga_beli','Harga beli','required');
	
	if($this->form_validation->run() !=false){
		$data = array(
			'tgl_pencatatan' => $tgl_pencatatan,
			'id_customer' => $customer,
			'id_gear' => $gear,
			'tgl_beli' => $tgl_beli,
			'tgl_garansi' => $tgl_garansi,
			'hrga_beli' => $hrga_beli,
			'tgl_pengembalian' => '0000-00-00',
			'total_hrg' => '0',
			'status_garansi' => '0',
			'status_pembelian' =>'0'
		);
		$this->m_degree->insert_data($data,'beli');
		
	$data2 = array(
			'tgl_pencatatan' => $tgl_pencatatan,
			'id_customer' => $customer,
			'id_gear' => $gear,
			'tgl_beli' => $tgl_beli,
			'tgl_garansi' => $tgl_garansi,
			'total_hrg' => '0',
			'status_pembelian' => '0'
		);
		$this->m_degree->insert_data($data2,'pembelian');
		
	$data3 = array(
			'id_gear' => $gear,
			'tgl_pengembalian' =>'0000-00-00',
			'hrga_beli' => $hrga_beli,
			'status_garansi' => '0',
			);
		$this->m_degree->insert_data($data3,'detail_beli');
		
		//update status gear yang dipinjam
		$d = array('status_gear' => '0','tgl_input' => substr($tgl_pencatatan,0,10));
		$w = array('id_gear' => $gear);
		$this->m_degree->update_data($w,$d,'gear');
		
		redirect(base_url().'admin/pembelian');
	}else{
		$w = array('status_gear' => '1');
		$data['gear'] = $this->m_degree->edit_data($w,'gear')->result();
		$data['customer'] = $this->m_degree->get_data('customer')->result();
	$this->load->view("admin/header");
	$this->load->view("admin/tambah_pembelian",$data);
	$this->load->view("admin/footer");
	}
}

	function hapus_pembelian($id){
		$this->db->where('id_beli',$id);
		$this->db->delete('pembelian');
		$w = array('id_beli' => $id);
		$data = $this->m_degree->edit_data($w,'beli')->row();
		$data = $this->m_degree->edit_data($w,'pembelian')->row();
		$data = $this->m_degree->edit_data($w,'detail_beli')->row();
		$ww = array('id_gear' => $data->id_gear);
		$data = array('status_gear' => '1');
		$this->m_degree->update_data($ww,$data,'gear');
		$this->m_degree->delete_data($w, 'beli');
		$this->m_degree->delete_data($w, 'pembelian');
		$this->m_degree->delete_data($w, 'detail_beli');
		redirect(base_url().'admin/pembelian');
	}

	function pembelian_selesai($id){
		$data['gear'] = $this->m_degree->get_data('gear')->result();
		$data['customer'] = $this->m_degree->get_data('customer')->result();
		$data['pembelian'] = $this->db->query("select * from beli s, customer c, gear m where s.id_gear 
			= m.id_gear and s.id_customer=c.id_customer and s.id_beli='$id'")->result();

		$this->load->view('admin/header');
		$this->load->view('admin/beli_selesai',$data);
		$this->load->view('admin/footer');
	}

function pembelian_selesai_act(){

	$id =  $this->input->post('id');
	$tgl_digaransikan =  $this->input->post('tgl_digaransikan');
	$tgl_garansi =  $this->input->post('tgl_garansi');
	$gear =  $this->input->post('gear');
	$hrga_beli = $this->input->post('hrga_beli');
	$this->form_validation->set_rules('tgl_digaransikan','Tanggal Di garansikan','required');
	if ($this->form_validation->run() !=false) {
			
		// menghitung harga / hari
			$tgl_pinjam = new DateTime($tgl_beli);
			$batas_garansi = new DateTime($tgl_garansi);
			$digaransikan = new DateTime($tgl_digaransikan);
			$selisih = $tgl_pinjam->diff($digaransikan)->format("%a");
			$total_hrg = (($hrga_beli*$selisih)+($hrga_beli));
			
		// update status pembelian
			$data = array('id_beli' => $id,
						  'status_pembelian' =>'1',
						  'total_hrg'=>$total_hrg,
						  'tgl_pengembalian' =>$tgl_digaransikan,
						  'status_garansi' =>'1'
						 );
			$w = array('id_beli' =>$id);
			$this->m_degree->update_data($w,$data,'beli','pembelian');

			$data2 = array(
							'id_beli' => $id,
							'id_gear' => $id,
							'tgl_pengembalian' => $tgl_digaransikan,
							'hrga_beli' => $hrga_beli,
							'status_garansi' => '1',
							);
			$this->m_degree->update_data($w,$data2,'detail_beli');
			
		// update status gear
			$data3 = array('status_gear' =>'1');
			$w3 = array('id_gear' => $gear);
			$this->m_degree->update_data($w3,$data3,'gear');
			redirect(base_url().'admin/pembelian');
			
		}else{
			
			$data['gear'] = $this->m_degree->get_data('gear')->result();
			$data['customer'] = $this->m_degree->get_data('customer')->result();
			$data['pembelian'] = $this->db->query("select * from beli s, customer c, gear m where s.id_gear 
			= m.id_gear and s.id_customer=c.id_customer and s.id_beli='$id'")->result();

$this->load->view('admin/header');
$this->load->view('admin/beli_selesai',$data);
$this->load->view('admin/footer');
		}
	}

function laporan(){
	
	$data['pembelian'] = $this->db->query("SELECT * FROM beli S, gear M, customer C WHERE S.id_gear=M.id_gear and S.id_customer=C.id_customer")->result();
	
	$this->load->view("admin/header");
	$this->load->view("admin/laporan",$data);
	$this->load->view("admin/footer");
}

//Rich Text
function tulis_informasi(){

$this->load->view("admin/header");
$this->load->view("admin/tulis_informasi");
$this->load->view("admin/footer");
}

function tulis_informasi_act(){
	$title = $this->input->post('title');
	$penerbit = $this->input->post('penerbit');
	$tgl_terbit = $this->input->post('tgl_terbit');
	$content = $this->input->post('content');
	$this->form_validation->set_rules('title','Title','required');
	$this->form_validation->set_rules('penerbit','Penerbit','required');
	$this->form_validation->set_rules('content','Content','required');
	if($this->form_validation->run() !=FALSE){
		
		$data = array(
		'title' => $title,
		'penerbit' => $penerbit,
		'tgl_terbit' => $tgl_terbit,
		'content' => $content
		);
		
		$this->m_degree->insert_data($data,'article');
		redirect(base_url().'admin/informasi');
}else{
	$this->load->view("admin/header");
	$this->load->view("admin/tulis_informasi");
	$this->load->view("admin/footer");
	}
}

function berita($id){
$where = array('id_article' => $id);
	$data['article'] = $this->m_degree->edit_data($where,'article')->result();

$this->load->view("admin/header");
$this->load->view("admin/berita",$data);
$this->load->view("admin/footer");
}

function informasi(){
	$data['article'] = $this->db->query("select * from article order by id_article asc limit 10")->result();
	
$this->load->view("admin/header");
$this->load->view("admin/informasi",$data);
$this->load->view("admin/footer");
}
//End Rich Text

function ganti_password(){
	$this->load->view("admin/header");
	$this->load->view("admin/ganti_password");
	$this->load->view("admin/footer");
}

function ganti_password_act(){
	$pass_baru = $this->input->post('pass_baru');
	$ulang_pass = $this->input->post('ulang_pass');
	
	$this->form_validation->set_rules('pass_baru','Password Baru','required|matches[ulang_pass]');
	$this->form_validation->set_rules('ulang_pass','Ulangi Password Baru','required');
	if($this->form_validation->run() !=FALSE){
		
		$data = array('password' => md5($pass_baru));
		$w = array('id_admin' => $this->session->userdata('id'));
		$this->m_degree->update_data($w,$data,'admin');
		redirect(base_url().'admin/ganti_password?pesan=berhasil');
		
	}else{	
			$this->load->view("admin/header");
			$this->load->view("admin/ganti_password");
			$this->load->view("admin/footer");
}

}	
	
function logout(){
	$this->session->sess_destroy();
	redirect(base_url().'login?pesan=logout');
}
}
?>
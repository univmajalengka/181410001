<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SI extends CI_Controller {
    function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk')!=true){
			redirect(base_url());
		}
		$this->load->model('mydb');
		$this->load->helper(array('form','url'));
	}

	public function index(){
		$data['level'] = $this->session->userdata('akses');
		$data['title'] = ''; 
        $this->load->view("header",$data);
		$this->load->view("index");
		$this->load->view("footer");
	}
	
	//Admin
	function admin(){
		$data['title'] = 'DATA ADMIN';
		$data['level']= $this->session->userdata('akses');
		$data['tbl'] = $this->mydb->v_admin();
		$this->load->view('header',$data);
		$this->load->view('_partials/t_admin',$data);
		$this->load->view('footer');
	}
	function i_admin(){
		$data['title'] = 'INPUT ADMIN';
		$data['level']= $this->session->userdata('akses');
		$this->load->view('header',$data);
		$this->load->view('_partials/i_admin',$data);
		$this->load->view('footer');
	}
	function p_i_admin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nm = $this->input->post('nama');
		$almt = $this->input->post('almt');
		$telp = $this->input->post('telp');
		$data = array('username'=>$username, 'password'=> md5($password),'nama'=>$nm,'alamat'=>$almt,'telepon'=>$telp);
		$this->mydb->input_dt($data,'admin');
		redirect('SI/admin');
	}
	function e_admin(){
		$pk = $this->uri->segment(3);
		$data['title'] = 'UPDATE ADMIN';
		$data['level']= $this->session->userdata('akses');
		$data['tbl'] = $this->mydb->s_admin($pk);
		$this->load->view('header',$data);
		$this->load->view('_partials/e_admin',$data);
		$this->load->view('footer');
	}
	function p_e_admin(){
		$pk = $this->uri->segment(3);
		$post = $this->input->post();
		$where = array('username' => $pk);
		$data = array('username' => $post['username'],'password' => md5($post['nama']),
		'nama' => $post['nama'],'alamat' => $post['almt'],'telepon' => $post['telp']);
		$this->mydb->update_dt($where,$data,'admin');
		redirect('SI/admin');
	}
	
	//Klien
	function klien(){
		$data['title'] = 'DATA KLIEN';
		$data['level']= $this->session->userdata('akses');
		$data['tbl'] = $this->mydb->v_klien();
		$this->load->view('header',$data);
		$this->load->view('_partials/t_klien',$data);
		$this->load->view('footer');
	}
	function i_klien(){
		$data['title'] = 'INPUT KLIEN';
		$data['level']= $this->session->userdata('akses');
		$this->load->view('header',$data);
		$this->load->view('_partials/i_klien',$data);
		$this->load->view('footer');
	}
	function p_i_klien(){
		$no = $this->input->post('no_ktp');
		$nm = $this->input->post('nama');
		$temp = $this->input->post('temp');
		$tgl = $this->input->post('tgl');
		$almt = $this->input->post('almt');
		$pkr = $this->input->post('pkr');
		$data = array('no_ktp'=>$no,'nama_klien'=>$nm,'tempat_lahir'=>$temp,'tanggal_lahir'=>$tgl,'alamat_klien'=>$almt,'pekerjaan'=>$pkr,'id_jenis_akta'=>'03');
		$this->mydb->input_dt($data,'klien');
		redirect('SI/klien');
	}
	function e_klien(){
		$pk = $this->uri->segment(3);
		$data['title'] = 'UPDATE DATA KLIEN';
		$data['level']= $this->session->userdata('akses');
		$data['tbl'] = $this->mydb->s_klien($pk);
		$this->load->view('header',$data);
		$this->load->view('_partials/e_klien',$data);
		$this->load->view('footer');
	}
	function p_e_klien(){
		$pk = $this->uri->segment(3);
		$no = $this->input->post('no_ktp');
		$nm = $this->input->post('nama');
		$temp = $this->input->post('temp');
		$tgl = $this->input->post('tgl');
		$almt = $this->input->post('almt');
		$pkr = $this->input->post('pkr');
		$where = array('no_ktp' => $pk);
		$data = array('no_ktp'=>$no,'nama_klien'=>$nm,'tempat_lahir'=>$temp,'tanggal_lahir'=>$tgl,'alamat_klien'=>$almt,'pekerjaan'=>$pkr);
		$this->mydb->update_dt($where,$data,'klien');
		redirect('SI/klien');
	}
	
	//Notaris
	function notaris(){
		$data['title'] = 'DATA NOTARIS';
		$data['level']= $this->session->userdata('akses');
		$data['tbl'] = $this->mydb->v_notaris();
		$this->load->view('header',$data);
		$this->load->view('_partials/t_notaris',$data);
		$this->load->view('footer');
	}
	function i_notaris(){
		$data['title'] = 'INPUT AKTA NOTARIS';
		$data['level']= $this->session->userdata('akses');
		$this->load->view('header',$data);
		$this->load->view('_partials/i_notaris',$data);
		$this->load->view('footer');
	}
	function p_i_notaris(){
		$no = $this->input->post('no_akta');
		$tgl = $this->input->post('tgl');
		$nm = $this->input->post('pihak');
		$data = array('no_akta_n'=>$no,'tgl_buat_n'=>$tgl,'nama_pihak'=>$nm,'id_jenis_akta'=>'01');
		$this->mydb->input_dt($data,'notaris');
		redirect('SI/notaris');
	}
	function e_notaris(){
		$pk = $this->uri->segment(3);
		$data['title'] = 'UPDATE NOTARIS';
		$data['level']= $this->session->userdata('akses');
		$data['tbl'] = $this->mydb->s_notaris($pk);
		$this->load->view('header',$data);
		$this->load->view('_partials/e_notaris',$data);
		$this->load->view('footer');
	}
	function p_e_notaris(){
		$pk = $this->uri->segment(3);
		$post = $this->input->post();
		$where = array('no_akta_n' => $pk);
		$data = array('no_akta_n' => $post['no_akta'],'tgl_buat_n' => $post['tgl'],'nama_pihak' => $post['pihak']);
		$this->mydb->update_dt($where,$data,'notaris');
		redirect('SI/notaris');
	}
	
	
	//PPAT
	function ppat(){
		$data['title'] = 'DATA PPAT';
		$data['level']= $this->session->userdata('akses');
		$data['tbl'] = $this->mydb->v_ppat();
		$this->load->view('header',$data);
		$this->load->view('_partials/t_ppat',$data);
		$this->load->view('footer');
	}
	function i_ppat(){
		$data['title'] = 'INPUT AKTA PPAT';
		$data['level']= $this->session->userdata('akses');
		$this->load->view('header',$data);
		$this->load->view('_partials/i_ppat',$data);
		$this->load->view('footer');
	}
	function p_i_ppat(){
		$no = $this->input->post('no_akta');
		$tgl = $this->input->post('tgl');
		$nm1 = $this->input->post('pihak1');
		$nm2 = $this->input->post('pihak2');
		$nh = $this->input->post('no_hak');
		$letak = $this->input->post('letak');
		$lt = $this->input->post('lt');
		$lb = $this->input->post('lb');
		$ht = $this->input->post('ht');
		$nop = $this->input->post('nop');
		$njop = $this->input->post('njop');
		$ssp = $this->input->post('ssp');
		$data = array('no_akta_p'=>$no,'tgl_buat_p'=>$tgl,'pihak_1'=>$nm1,'pihak_2'=>$nm2,
		'letak'=>$letak,'luas_tanah'=>$lt,'luas_bangunan'=>$lb,'harga_transaksi'=>$ht,
		'no_hak'=>$nh,'nop'=>$nop,'njop'=>$njop,'ssp'=>$ssp,
		'id_jenis_akta'=>'02');
		$this->mydb->input_dt($data,'ppat');
		redirect('SI/ppat');
	}
	function e_ppat(){
		$pk = $this->uri->segment(3);
		$data['title'] = 'UPDATE AKTA PPAT';
		$data['level']= $this->session->userdata('akses');
		$data['tbl'] = $this->mydb->s_ppat($pk);
		$this->load->view('header',$data);
		$this->load->view('_partials/e_ppat',$data);
		$this->load->view('footer');
	}
	function p_e_ppat(){
		$pk = $this->uri->segment(3);
		$no = $this->input->post('no_akta');
		$tgl = $this->input->post('tgl');
		$nm1 = $this->input->post('pihak1');
		$nm2 = $this->input->post('pihak2');
		$nh = $this->input->post('no_hak');
		$letak = $this->input->post('letak');
		$lt = $this->input->post('lt');
		$lb = $this->input->post('lb');
		$ht = $this->input->post('ht');
		$nop = $this->input->post('nop');
		$njop = $this->input->post('njop');
		$ssp = $this->input->post('ssp');
		$where = array('no_akta_p' => $pk);
		$data = array('no_akta_p'=>$no,'tgl_buat_p'=>$tgl,'pihak_1'=>$nm1,'pihak_2'=>$nm2,
		'letak'=>$letak,'luas_tanah'=>$lt,'luas_bangunan'=>$lb,'harga_transaksi'=>$ht,
		'no_hak'=>$nh,'nop'=>$nop,'njop'=>$njop,'ssp'=>$ssp);
		$this->mydb->update_dt($where,$data,'ppat');
		redirect('SI/ppat');
	}
	
	//Jenis Akta
	function jenis_akta(){
		$data['title'] = 'DATA JENIS AKTA';
		$data['level']= $this->session->userdata('akses');
		$data['tbl'] = $this->mydb->v_jenis_akta();
		$this->load->view('header',$data);
		$this->load->view('_partials/t_jenis_akta',$data);
		$this->load->view('footer');
	}
	function i_jenis_akta(){
		$data['title'] = 'INPUT JENIS AKTA';
		$data['level']= $this->session->userdata('akses');
		$this->load->view('header',$data);
		$this->load->view('_partials/i_jenis_akta',$data);
		$this->load->view('footer');
	}
	function p_i_jenis_akta(){
		$no = $this->input->post('no_akta');
		$nm = $this->input->post('nmj');
		$data = array('id_jenis_akta'=>$no,'nama_jenis'=>$nm);
		$this->mydb->input_dt($data,'jenis_akta');
		redirect('SI/jenis_akta');
	}
	function e_jenis_akta(){
		$pk = $this->uri->segment(3);
		$data['title'] = 'UPDATE JENIS AKTA';
		$data['level']= $this->session->userdata('akses');
		$data['tbl'] = $this->mydb->s_jenis_akta($pk);
		$this->load->view('header',$data);
		$this->load->view('_partials/e_jenis_akta',$data);
		$this->load->view('footer');
	}
	function p_e_jenis_akta(){
		$pk = $this->uri->segment(3);
		$post = $this->input->post();
		$where = array('id_jenis_akta' => $pk);
		$data = array('id_jenis_akta' => $post['id'],'nama_jenis' => $post['nm']);
		$this->mydb->update_dt($where,$data,'jenis_akta');
		redirect('SI/jenis_akta');
	}
	
	//Delete record
	function del(){
		$tb = $this->uri->segment(3);
		$pk = $this->uri->segment(4);
		if($tb=='admin'){
			$where = array('username' => $pk);
		}elseif($tb=='klien'){
			$where = array('no_ktp' => $pk);
		}elseif($tb=='notaris'){
			$where = array('no_akta_n' => $pk);
		}elseif($tb=='ppat'){
			$where = array('no_akta_p' => $pk);
		}
		$this->mydb->del($where,$tb);
		redirect('SI/'.$tb);
	}
}
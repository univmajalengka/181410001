<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Login extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('mydb');
			$this->load->helper(array('form','url'));
		}
		function index(){
			$this->load->view('v_login');
		}
		
		function auth(){
			$username = $this->input->post('username',true);
			$password = $this->input->post('password',true);
			$cek_leader = $this->mydb->auth_leader($username,$password);
			if($cek_leader->num_rows()>0){
				$data = $cek_leader->row_array();
				$this->session->set_userdata('masuk',true);
				$this->session->set_userdata('akses','1');
				$this->session->set_userdata('set_id',$data['username']);
				$this->session->set_userdata('set_nama',$data['nama']);
				redirect('SI');
			}else{
				$url = base_url().'Login/index';
				echo $this->session->set_flashdata('msg','Username atau Password Salah!!!');
				redirect($url);
			}
		}
		
		function logout(){
			$this->session->sess_destroy();
			redirect(base_url(''));
		}
	}
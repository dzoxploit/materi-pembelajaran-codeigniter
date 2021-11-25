<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pweb extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->load->model('M_pweb');
    }


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->userdata('login') == '1'){
			$data['nilai'] = $this->M_pweb->read();
			$this->load->view('header', $data);
			$this->load->view('home');
			$this->load->view('footer');
		} else {
			$this->session->set_flashdata('belum_login','2');
			redirect('pweb/login', 'refresh');
		}
	}
	
	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
		if(isset($_POST['login'])){
			$this->_login();
		}
	}

	public function logout(){
		session_destroy();
		redirect('pweb/login', 'refresh');
	}

	private function _login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->db->get_where('tbl_user', ['username' => $username])->row_array();

		if($user){
			if(password_verify($password, $user['password'])){
				$this->session->set_userdata('login','1');
				$this->session->set_userdata('username', $user['username']);
				redirect('', 'refresh');
			}
		} else{
			$this->session->set_flashdata('salah_login','1');
			redirect('pweb/login', 'refresh');
		}
		
	}


	public function tambah()
	{
		if($this->session->userdata('login') == '1'){
			$this->load->view('header');
			$this->load->view('tambah');
			$this->load->view('footer');
			if(isset($_POST['tambah'])){
				$this->M_pweb->create();
			}
		} else {
			$this->session->set_flashdata('belum_login','2');
			redirect('pweb/login', 'refresh');
		}
	}

	public function update($id = null)
	{
		if($this->session->userdata('login') == '1'){
			$data['nilai'] = $this->M_pweb->edit($id);
			$this->load->view('header',$data);
			$this->load->view('edit');
			$this->load->view('footer');
			if(isset($_POST['edit'])){
				$this->M_pweb->update($id);
			}
		} else {
			$this->session->set_flashdata('belum_login','2');
			redirect('pweb/login', 'refresh');
		}
	}

	public function delete($id = null){
		$this->M_pweb->delete($id);
	}

}

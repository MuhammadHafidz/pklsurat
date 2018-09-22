<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

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
	
    protected $data = array();
	protected $data_session = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('model_login');
		$this->load->library('session');

	}
	
	public function index()
	{
		$this->load->view('new');
	}
	public function page()
	{
		$this->page = "home_page";
		// $this->layout();
	}

	public function proses_login()
	{
		$nip=$this->input->post('nip');
		$pass=$this->input->post('pass');
		$where= array(
			'nip' => $nip,
			'password' => $pass
		);
		$tabel= array("staffkearsipan","kabag","kadin","staff");
		$cek = 0;
		
		for($x=0;$x<count($tabel) && $cek==0 ;$x++){
			$cek = $this->model_login->login($tabel[$x],$where)->num_rows();
		}

		if($cek>0){
			$quer= $this->db->query('SELECT nama FROM ' .$tabel[$x-1]) ; 
			foreach ($quer->result() as $hasil ) {
				$name = $hasil->nama;
			}
			$data_session = array(
				'nip' => $nip,
				'nama' =>  $name,
				'status' => "login",
				'role' => $tabel[$x-1]
			);
			if($x==1){
				$this->session->set_userdata($data_session);
				$this->page();

				$this->pages['header'] = $this->load->view('page/header',$this->data, TRUE);
        		// $this->pages['footer'] = $this->load->view('page/footer',$this->data, TRUE);
				$this->pages['sidebar'] = $this->load->view('page/sidebar',$this->data, TRUE);
				$this->load->view('page/admin',$this->pages);
			}
			elseif($x==2){
				$this->session->set_userdata($data_session);
				$this->page();
				
				$this->pages['header'] = $this->load->view('page/header',$this->data, TRUE);
        		// $this->pages['footer'] = $this->load->view('page/footer',$this->data, TRUE);
				$this->pages['sidebar'] = $this->load->view('page/sidebar_kabag',$this->data, TRUE);
				$this->load->view('page/main',$this->pages);
			}
			elseif($x==3){
				$this->session->set_userdata($data_session);
				$this->page();

				$this->pages['header'] = $this->load->view('page/header',$this->data, TRUE);
        		// $this->pages['footer'] = $this->load->view('page/footer',$this->data, TRUE);
				$this->pages['sidebar'] = $this->load->view('page/sidebar_kadin',$this->data, TRUE);
				$this->load->view('page/main',$this->pages);
			}
			else{
				$this->session->set_userdata($data_session);
				$this->page();

				$this->pages['header'] = $this->load->view('page/header',$this->data, TRUE);
        		// $this->pages['footer'] = $this->load->view('page/footer',$this->data, TRUE);
				$this->pages['sidebar'] = $this->load->view('page/sidebar_staff',$this->data, TRUE);
				$this->load->view('page/main',$this->pages);
			}
		}
		else{
			echo "alert('Username dan password salah !')";
			redirect(base_url());
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('pages/index');
	}

	public function layout()
    {
        $this->pages['header'] = $this->load->view('page/header',$this->data, TRUE);
        $this->pages['footer'] = $this->load->view('page/footer',$this->data, TRUE);
		$this->pages['sidebar'] = $this->load->view('page/sidebar',$this->data, TRUE);
        // $this->page['sidebar'] = $this->load->view('page/sidebar_kabag',$this->data, TRUE);
        // $this->page['sidebar'] = $this->load->view('page/sidebar_kadin',$this->data, TRUE);
        // $this->page['sidebar'] = $this->load->view('page/sidebar_staff',$this->data, TRUE);
        $this->load->view('page/main',$this->pages);
	}
	
	public function content(Type $var = null)
	{
		# code...
	}
}

<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Page extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            
            if($this->session->userdata('masuk') != TRUE){
                $url=base_url();
                redirect($url);
            }
        }
        
        public function index()
        {
            $this->load->view('v_dashboard');
        }

        public function login()
        {
            $this->load->view('v_login');
        }

        public function manajemen_user()
        {
            if($this->session->userdata('akses')=='admin'){
                $this->load->view('v_manajemen-user');
            }else{
                echo "Anda tidak berhak mengakses halaman ini.";
            }
        }

        public function arsip()
        {
            if($this->session->userdata('akses')=='admin'){
                $this->load->view('v_arsip');
            }else{
                echo "Anda tidak berhak mengakses halaman ini.";
            }
        }

        public function surat_masuk()
        {
           if($this->session->userdata('akses')=='admin'|| $this->session->userdata('akses')=='kadin'){
               $this->load->view('v_masuk');
           }else{
               echo "Anda tidak berhak mengakses halaman ini.";
           }
        }
    
    }
    
    /* End of file Page.php */
    
?>
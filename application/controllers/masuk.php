<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Masuk extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('m_masuk');
        }
        
        public function index()
        {
            $this->load->view('v_dashboard');
        }

        public function data_masuk()
        {
            $data=$this->m_masuk->data_masuk();
            echo json_encode($data);
        }
    
    }
    
    /* End of file Masuk.php */
    
?>
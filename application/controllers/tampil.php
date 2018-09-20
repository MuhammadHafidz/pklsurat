<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Tampil extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('model_crud');
        }
        
        public function index()
        {
            $data['tampil']=$this->model_crud->tampil();
            $this->load->view('page/admin')
        }
    
    }
    
    /* End of file Tampil.php */
    
?>
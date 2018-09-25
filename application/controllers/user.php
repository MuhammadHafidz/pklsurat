<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class User extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            // $this->load->library('datatables');
            $this->load->model('m_user');
        }
        
        public function index()
        {
            $this->load->view('v_dasboard');
        }

        public function data_user()
        {
            $data=$this->m_user->data_user();
            echo json_encode($data);
        }
        
        public function get_user()
        {
            $nip=$this->input->get('id');
            $data=$this->m_user->get_data($nip);
            echo json_encode($data);
        }

        public function simpan_user()
        {
            $nip=$this->input->post('nip');
            $nama=$this->input->post('nama');
            $pass=$this->input->post('pass');
            $level=$this->input->post('level');
            $data=$this->m_user->simpan_user($nip,$nama,$pass,$level);
            echo json_encode($data);
        }
        
        public function update_user()
        {
            $nip=$this->input->post('nip');
            $nama=$this->input->post('nama');
            $pass=$this->input->post('pass');
            $level=$this->input->post('level');
            $data=$this->m_user->update_user($nip,$nama,$pass,$level);
            echo json_encode($data);
        }
        
        public function del_user()
        {
            $nip=$this->input->post('nip');
            $data=$this->m_user->del_user($nip);
            echo json_encode($data);
        }

    }
    
    /* End of file Crud.php */
    
?>
<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Control extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->library('session');
            $this->load->model('m_login');
        }
        // Cek User Login
        public function proses_login()
        {
            $nip=$this->input->post('nip');
            $pass=$this->input->post('pass');
            
            $cek=$this->m_login->cek($nip,$pass);
            
            if($cek->num_rows() > 0){
                $cek_level=$cek->row_array();
                $this->session->set_userdata('masuk',TRUE);
                if($cek_level['level']=='admin'){
                    $this->session->set_userdata('akses','admin');
                    $this->session->set_userdata('ses_id',$cek_level['nip']);
                    $this->session->set_userdata('ses_nama',$cek_level['nama']);
                    redirect('page');
                }elseif ($cek_level['level']=='kabag') {
                    $this->session->set_userdata('akses','kabag');
                    $this->session->set_userdata('ses_id',$cek_level['nip']);
                    $this->session->set_userdata('ses_nama',$cek_level['nama']);
                    redirect('page');
                }elseif ($cek_level['level']=='kadin') {
                    $this->session->set_userdata('akses','kadin');
                    $this->session->set_userdata('ses_id',$cek_level['nip']);
                    $this->session->set_userdata('ses_nama',$cek_level['nama']);
                    redirect('page');
                }elseif ($cek_level['level']=='staff') {
                    $this->session->set_userdata('akses','staff');
                    $this->session->set_userdata('ses_id',$cek_level['nip']);
                    $this->session->set_userdata('ses_nama',$cek_level['nama']);
                    redirect('page');
                }
                else{
                    redirect('page/login');
                }
            }
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('page/login');
        }
    
    }
    

    /* End of file Control.php */
    
?>
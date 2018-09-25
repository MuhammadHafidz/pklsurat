<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Arsip extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('m_arsip');
        }
        
        public function data_arsip()
        {
            $data=$this->m_arsip->data_arsip();
            echo json_encode($data);
        }
        
        public function get_arsip()
        {
            $kode=$this->input->post('kode');
            $data=$this->m_arsip->get_data($kode);
            echo json_encode($data);
        }

        public function simpan_arsip()
        {
            $kode=$this->input->post('kode');
            $tempat=$this->input->post('tempat');
            $keterangan=$this->input->post('keterangan');
            $data=$this->m_arsip->simpan_arsip($kode,$tempat,$keterangan);
            echo json_encode($data);
        }
        
        public function update_arsip()
        {
            $kode=$this->input->post('kode');
            $tempat=$this->input->post('tempat');
            $keterangan=$this->input->post('keterangan');
            $data=$this->m_arsip->update_arsip($kode,$tempat,$keterangan);
            echo json_encode($data);
        }
        
        public function del_arsip()
        {
            $kode=$this->input->post('kode');
            $data=$this->m_arsip->del_arsip($kode);
            echo json_encode($data);
        }
    
    }
    
    /* End of file Arsip.php */
    
?>
<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_masuk extends CI_Model {
    
        public function data_masuk()
        {
            $hasil=$this->db->query("SELECT * FROM surat_masuk");
            return $hasil->result();
        }
    
    }
    
    /* End of file M_masuk.php */
    
?>
<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_login extends CI_Model {
    
        public function cek($nip,$pass)
        {
            $query=$this->db->query("SELECT * FROM user WHERE nip='$nip' and password='$pass' LIMIT 1");
            return $query;
        }
    
    }
    
    /* End of file Login_model.php */
    
?>
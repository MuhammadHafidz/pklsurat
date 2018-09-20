<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Model_crud extends CI_Model {
    
        public function tampil()
        {
            $tampil=$this->db->get('staffkearsipan,kabag,kadin,staff');
            return $tampil;
        }
    
    }
    
    /* End of file Model_crud.php */
    
?>
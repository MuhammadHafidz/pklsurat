<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_arsip extends CI_Model {
    
        public function data_arsip()
        {
            $hasil=$this->db->query("SELECT * FROM arsip");
            return $hasil->result();
        }

        public function get_data($kode)
        {
            $hsl=$this->db->query("SELECT * FROM arsip WHERE kode_arsip='$kode'");
            if($hsl->num_rows()>0){
                foreach ($hsl->result() as $data) {
                    $hasil=array(
                        'kode' => $data->kode_arsip,
					    'tempat' => $data->tempat_arsip,
					    'keterangan' => $data->keterangan_arsip,
					);
			    }
		    }
		    return $hasil;
        }
    
        public function simpan_arsip($kode,$tempat,$keterangan)
        {
            $hasil=$this->db->query("INSERT INTO arsip (kode_arsip,tempat_arsip,keterangan_arsip)VALUES('$kode','$tempat','$keterangan')");
		    return $hasil;
        }

        public function update_arsip($kode,$tempat,$keterangan)
        {
            $hasil=$this->db->query("UPDATE arsip SET kode_arsip='$kode',tempat_arsip='$tempat',keterangan_arsip='$keterangan' WHERE kode_arsip='$kode'");
		    return $hasil;
        }

        public function del_arsip($kode)
        {
            $hasil=$this->db->query("DELETE FROM arsip WHERE kode_arsip='$kode'");
		    return $hasil;
        }
    
    }
    
    /* End of file M_arsip.php */
    
?>
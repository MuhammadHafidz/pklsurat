<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_user extends CI_Model {
    
        public function data_user()
        {
            $hasil=$this->db->query("SELECT * FROM user");
            return $hasil->result();
        }

        public function get_data($nip)
        {
            $hsl=$this->db->query("SELECT * FROM user WHERE nip='$nip'");
            if($hsl->num_rows()>0){
                foreach ($hsl->result() as $data) {
                    $hasil=array(
                        'nip' => $data->nip,
					    'nama' => $data->nama,
					    'password' => $data->pass,
					    'level' => $data->level,
					);
			    }
		    }
		    return $hasil;
        }
    
        public function simpan_user($nip,$pass,$nama,$level)
        {
            $hasil=$this->db->query("INSERT INTO user (nip,nama,password,level)VALUES('$nip','$nama','$pass','$level')");
		    return $hasil;
        }

        public function update_user($nip,$nama,$pass,$level)
        {
            $hasil=$this->db->query("UPDATE user SET nip='$nip',nama='$nama',pass='$pass',level='$level' WHERE nip='$nip'");
		    return $hasil;
        }

        public function del_user($nip)
        {
            $hasil=$this->db->query("DELETE FROM user WHERE nip='$nip'");
		    return $hasil;
        }
    }
    
    /* End of file M_crud.php */
    
?>
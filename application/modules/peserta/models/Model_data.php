<?php

class Model_data extends CI_Model {
      

	function save() {
        $data = array(
        "email" => $this->input->post('email'),  
		"password" => $this->input->post('password'),  
		"nama" => $this->input->post('nama'),  
        );
        $this->db->insert('user',$data);
	}


  function data_list(){
        $hasil=$this->db->query("SELECT * FROM user ORDER BY id DESC");
        return $hasil->result();
    }
 
    function simpan_data($data1,$data2,$data3){
        $hasil=$this->db->query("INSERT INTO user (email,password,nama)VALUES('$data1','$data2','$data3')");
        return $hasil;
    }
 
    function get_data_by_kode($id){
        $hsl=$this->db->query("SELECT * FROM user WHERE id='$id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'email' => $data->email,
                    'password' => $data->password,
					'nama' => $data->nama,
					'id' => $data->id,
                    );
            }
        }
        return $hasil;
    }
 
    function update_data($data1,$data2,$data3,$id){
        $hasil=$this->db->query("UPDATE user SET email='$data1',password='$data2',nama='$data3' WHERE id='$id'");
        return $hasil;
    }
 
    function hapus_data($id){
        $hasil=$this->db->query("DELETE FROM user WHERE id='$id'");
        return $hasil;
    }

}
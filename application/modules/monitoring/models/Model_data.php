<?php

class Model_data extends CI_Model {
      

	function save() {
        $data = array(
        "Time" => $this->input->post('Time'),  
		"Nilai" => $this->input->post('Nilai'),   
        );
        $this->db->insert('monitoring',$data);
	}


  function data_list(){
        $hasil=$this->db->query("SELECT * FROM monitoring ORDER BY id DESC");
        return $hasil->result();
    }
 
    function simpan_data($data2){
        $hasil=$this->db->query("INSERT INTO monitoring (Nilai)VALUES('$data2')");
        return $hasil;
    }
 
    function get_data_by_kode($id){
        $hsl=$this->db->query("SELECT * FROM monitoring WHERE id='$id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'Time' => $data->Time,
                    'Nilai' => $data->Nilai,
					'id' => $data->id,
                    );
            }
        }
        return $hasil;
    }
 
    function update_data($data1,$data2,$id){
        $hasil=$this->db->query("UPDATE monitoring SET Time='$data1',Nilai='$data2' WHERE id='$id'");
        return $hasil;
    }
 
    function hapus_data($id){
        $hasil=$this->db->query("DELETE FROM monitoring WHERE id='$id'");
        return $hasil;
    }

}
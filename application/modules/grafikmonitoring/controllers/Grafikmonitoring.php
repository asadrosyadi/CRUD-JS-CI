<?php

Class Grafikmonitoring extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_grafik');
    }

    function data_data(){
        $data=$this->Model_grafik->data_list();
        echo json_encode($data);
    }
 
    function get_data(){
        $id=$this->input->get('id');
        $data=$this->Model_grafik->get_data_by_kode($id);
        echo json_encode($data);
    }
 
    function add(){
        $data1=$this->input->post('Time');
		$data2=$this->input->post('Nilai');
		$data=$this->Model_grafik->simpan_data($data1,$data2);
        echo json_encode($data);
		
    }
 
    function edit(){
        $data1=$this->input->post('Time');
		$data2=$this->input->post('Nilai');
        $id=$this->input->post('id');
        $data=$this->Model_grafik->update_data($data1,$data2,$id);
        echo json_encode($data);
		
    }
 
    function hapus(){
        $id=$this->input->post('id');
        $data=$this->Model_grafik->hapus_data($id);
        echo json_encode($data);
		
    }
 

    function index() {
		$this->template->load('template', 'grafikmonitoring/list');
    }



	
}
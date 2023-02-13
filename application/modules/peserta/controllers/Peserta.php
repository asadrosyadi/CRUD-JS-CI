<?php

Class Peserta extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_data');
    }

    function data_data(){
        $data=$this->Model_data->data_list();
        echo json_encode($data);
    }
 
    function get_data(){
        $id=$this->input->get('id');
        $data=$this->Model_data->get_data_by_kode($id);
        echo json_encode($data);
    }
 
    function add(){
        $data1=$this->input->post('email');
		$data2=$this->input->post('password');
		$data3=$this->input->post('nama');
		$data=$this->Model_data->simpan_data($data1,$data2,$data3);
        echo json_encode($data);
		
    }
 
    function edit(){
        $data1=$this->input->post('email');
		$data2=$this->input->post('password');
		$data3=$this->input->post('nama');
        $id=$this->input->post('id');
        $data=$this->Model_data->update_data($data1,$data2,$data3,$id);
        echo json_encode($data);
		
    }
 
    function hapus(){
        $id=$this->input->post('id');
        $data=$this->Model_data->hapus_data($id);
        echo json_encode($data);
    }
 

    function index() {
		$this->template->load('template', 'peserta/list');
    }



	
}
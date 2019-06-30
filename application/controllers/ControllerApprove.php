<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ControllerApprove extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('ApproveStatusMadel');
    }

	public function index()
	{
		$this->load->view('approve');
    }
    function get_data(){
        $data=$this->ApproveStatusMadel->status_list();
        echo json_encode($data);
    }
    function get_type(){
        $data=$this->ApproveStatusMadel->type_list();
        echo json_encode($data);
    }
    function save(){
        $data=$this->ApproveStatusMadel->save_status();
        echo json_encode($data);
    }
    function save_type(){
        $data=$this->ApproveStatusMadel->save_status_stype();
        echo json_encode($data);

    }
 
    function update_status(){
        $data=$this->ApproveStatusMadel->status_update();
        echo json_encode($data);
    }
 
    function delete(){
        $data=$this->ApproveStatusMadel->delete();
        echo json_encode($data);
    }
}
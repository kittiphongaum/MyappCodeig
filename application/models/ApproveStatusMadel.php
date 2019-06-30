<?php
class ApproveStatusMadel extends CI_Model{
    function status_list(){
        $hasil=$this->db->get('mypoint_ms_lor_loan_status');
        return $hasil->result();
    }
    
    function type_list(){
        $created_by=$this->input->post('loan_status_id');
        $this->db->where('created_by',created_by);
        $hasil=$this->db->get('mypoint_ms_lor_loan_type');
        return $hasil->result();
    }
 
    function save_status(){
        $data = array(
                'loan_stauts_name'  => $this->input->post('loan_stauts_name'), 
                'loan_status_code'  => $this->input->post('loan_status_code'), 
            );
        $result=$this->db->insert('mypoint_ms_lor_loan_status',$data);
        return $result;
    }
    function save_status_stype(){
        $data = array(
                'created_by'=> $this->input->post('created_by'), 
                'loan_type_name'=> $this->input->post('loan_type_name'),
            );
        $result=$this->db->insert('mypoint_ms_lor_loan_type',$data);
        return $result;
    }
    function status_update(){
        $loan_stauts_name=$this->input->post('loan_stauts_name');
        $loan_status_code=$this->input->post('loan_status_code');
        $loan_status_id=$this->input->post('loan_status_id');
 
        $this->db->set('loan_stauts_name', $loan_stauts_name);
        $this->db->set('loan_status_code', $loan_status_code);
        $this->db->where('loan_status_id', $loan_status_id);
        $result=$this->db->update('mypoint_ms_lor_loan_status');
        return $result;
    }
 
    function delete(){
        $loan_status_id=$this->input->post('loan_status_id_delete');
        $this->db->where('loan_status_id', $loan_status_id);
        $result=$this->db->delete('mypoint_ms_lor_loan_status');
        return $result;
    }
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Department extends CI_Controller {

    function __construct(){

        parent::__construct();
        $this->load->model('department_model');

    }


    public function update_dep($dep_id){

        $data = array();
        $data['title'] = "Update Department";
        $data['heading'] = "Update Department Details";
        $data['result'] = $this->department_model->fetch_dep_by_id($dep_id);
        $data['content'] = $this->load->view('update_department',$data,true);
        $this->load->view('master',$data);
    }

    public function update_dep_commit(){

        $data = array();
        $dep_id = $this->input->post('id',true);
        $data['payment_id'] = $this->input->post('type',true);
        $data['status_id'] = $this->input->post('status',true);
        $data['employee_name'] = $this->input->post('name',true);
        $data['employee_department'] = $this->input->post('department',true);
        $data['employee_designation'] = $this->input->post('designation',true);
        $data['employee_phone'] = $this->input->post('phone',true);
        $data['employee_address'] = $this->input->post('address',true);
        $this->employee_model->update_employee_by_id($employee_id,$data);

        redirect('site/hod');
    }
}

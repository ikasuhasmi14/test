<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ProjectCharter extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_project');
    }
     
    function index(){
        $x['data']=$this->m_project->show_project();
        $this->load->view('v_project',$x);
    }
 
    function simpan_project(){
        $id=$this->input->post('id');
        $project_name=$this->input->post('project_name');
        $project_desc=$this->input->post('project_desc');
        $this->m_project->simpan_project($id,$project_name,$project_desc);
        redirect('ProjectCharter');
    }
}
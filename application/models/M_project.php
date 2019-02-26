<?php
class M_project extends CI_Model{
     
    function show_project(){
        $hasil=$this->db->query("SELECT * FROM project_charter");
        return $hasil;
    }
 
    function simpan_project($id,$project_name,$project_desc){
        $hasil=$this->db->query("INSERT INTO project_charter (id,project_name,project_desc) VALUES ('$id','$project_name','$project_desc')");
        return $hasil;
    }
     
}
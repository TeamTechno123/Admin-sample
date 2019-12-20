<?php
class Admin_Model extends CI_Model{

  public function save_data($tbl_name, $data){
    $this->db->insert($tbl_name, $data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
  }

  public function get_list($company_id,$id,$order,$tbl_name){
    $query = $this->db->select('*')
            ->where('company_id', $company_id)
            ->order_by($id, $order)
            ->from($tbl_name)
            ->get();
    $result = $query->result();
    return $result;
  }

  public function get_info($id_type, $id, $tbl_name){
    $query = $this->db->select('*')
            ->where($id_type, $id)
            ->from($tbl_name)
            ->get();
    $result = $query->result();
    return $result;
  }

  public function update_info($id_type, $id, $tbl_name, $data){
    $this->db->where($id_type, $id)
    ->update($tbl_name, $data);
  }

  public function delete_info($id_type, $id, $tbl_name){
    $this->db->where($id_type, $id)
    ->delete($tbl_name);
  }

  public function get_count($id_type,$company_id,$tbl_name){
    $query = $this->db->select($id_type)
            ->where('company_id', $company_id)
            ->from($tbl_name)
            ->get();
    $result = $query->num_rows();
    return $result;
  }

  
}
?>

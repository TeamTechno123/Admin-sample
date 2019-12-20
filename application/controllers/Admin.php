<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function login(){
    $this->load->view('Admin/login');
  }

  public function dashboard(){
    $this->load->view('Admin/dashboard');
  }

  public function company_information(){

      $this->load->view('Admin/company_information');

 }
 public function company_information_list(){
  $this->load->view('Admin/company_information_list');
}

public function logout(){
  $this->session->sess_destroy();
  header('location:'.base_url().'Admin/login');
}

  public function save_company(){
      $company_id = $this->session->userdata('company_id');
      $admin_roll_id = $this->session->userdata('admin_roll_id');
      if($company_id){
        $data = array(
          'company_name' => $this->input->post('company_name'),
          'company_address' => $this->input->post('company_address'),
          'company_city' => $this->input->post('company_city'),
          'company_state' => $this->input->post('company_state'),
          'company_district' => $this->input->post('company_district'),
          'company_pincode' => $this->input->post('company_pincode'),
          'company_mob1' => $this->input->post('company_mob1'),
          'company_mob2' => $this->input->post('company_mob2'),
          'company_email' => $this->input->post('company_email'),
          'company_website' => $this->input->post('company_website'),
          'company_pan_no' => $this->input->post('company_pan_no'),
          'company_gst_no' => $this->input->post('company_gst_no'),
          'company_lic1' => $this->input->post('company_lic1'),
          'company_lic2' => $this->input->post('company_lic2'),
          'company_start_date' => $this->input->post('company_start_date'),
          'company_end_date' => $this->input->post('company_end_date'),
          'admin_email' => $this->input->post('admin_email'),
          'admin_password' => $this->input->post('admin_password'),
        );
        $this->Admin_Model->save_data('uni_company', $data);
        header('location:dashboard');
      } else{
        header('location:'.base_url().'Login');
      }
    }

}
?>

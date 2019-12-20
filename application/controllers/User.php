<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function login(){
    $this->load->view('User/login');
  }

  public function dashboard(){
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('User/dashboard');
    $this->load->view('Include/footer');
  }

  public function company_information(){
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
      $this->load->view('User/company_information');
      $this->load->view('Include/footer');
 }
 public function company_information_list(){
   $this->load->view('Include/head');
   $this->load->view('Include/navbar');
  $this->load->view('User/company_information_list');
  $this->load->view('Include/footer');
}

public function user_information(){
      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('User/user_information');
      $this->load->view('Include/footer');
}
public function user_information_list(){
  $this->load->view('Include/head');
  $this->load->view('Include/navbar');
 $this->load->view('User/user_information_list');
 $this->load->view('Include/footer');
}

public function logout(){
  $this->session->sess_destroy();
  header('location:'.base_url().'User/login');
}


}
?>

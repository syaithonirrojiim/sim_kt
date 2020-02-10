<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
    
    function index(){
        $this->load->view('login');
    }
    
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
        
        $cek_admin=$this->login_model->auth_admin($username,$password);
        
        if($cek_admin->num_rows() > 0){ //jika login sebagai user
            $data=$cek_admin->row_array();
            $this->session->set_userdata('masuk',TRUE);
                 if($data['level']=='1'){ //Akses admin
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['username']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('ops');
                    
                 }else{ //akses co-admin
                    $this->session->set_userdata('akses','2');
                    $this->session->set_userdata('ses_id',$data['username']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('ops');
                }
                
        }else{ //jika login sebagai member
            $cek_member=$this->login_model->auth_member($username,$password);
            if($cek_member->num_rows() > 0){
              $data=$cek_member->row_array();
              $this->session->set_userdata('masuk',TRUE);
              $this->session->set_userdata('akses','3');
              $this->session->set_userdata('ses_id',$data['username']);
              $this->session->set_userdata('ses_nama',$data['nama']);
              redirect('ops');
                    }else{  // jika username dan password tidak ditemukan atau salah
                        $url=base_url('');
                        echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                        redirect($url);
                    }
                }
                
            }
            
            function logout(){
                $this->session->sess_destroy();
                $url=base_url('');
                redirect($url);
            }
            
        }
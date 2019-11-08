<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller {  

        function __construct(){
            parent::__construct();
            date_default_timezone_set('Asia/Kolkata');
            $this->load->helper('url');  
            $this->load->model('login_model');   
        }
        public function dashboard(){
            $user_details = array();
            $data         = array();
            if(isset($_POST["submit"])){
               $lgname     = $_POST["lg_name"];
               $lg_contact = $_POST["lg_contact"];
               $lg_email   = $_POST["lg_email"];
               $user_details = array(
                            "lg_name"       => $lgname,
                            "lg_contact"    => $lg_contact,
                            "lg_email"      => $lg_email,
                            "created-date"  => date('Y-m-d H:i:s')

               ); 
               $data["user_details"]  = $user_details;
            //    $insert_details = $this->login_model->insert_users($user_details);
            //    if($insert_details == 1){
                  
                $this->load->view('Dashboard/index',$data);
            
           }
           
          
        }

        public function quiz_start(){
            $data = array();
            if(isset($_POST["start"])){
             $fetch_questions = $this->login_model->questions();
             $data["fetch_question"] = $fetch_questions;   
             $data["username"] = $_POST["user"];
             $this->load->view('Dashboard/question',$data);
           }
            
        }
       
}
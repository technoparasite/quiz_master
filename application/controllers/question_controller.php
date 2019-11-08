<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class question_controller extends CI_Controller {  

        function __construct(){
            parent::__construct();
            date_default_timezone_set('Asia/Kolkata');
            $this->load->helper('url');  
            $this->load->model('login_model');   
        }
        
        //Questions answered Reports
        function answers(){
            $users_ans = array();
            $data      = array();
            if(isset($_POST["answer"])){
               
                $total_count_questions = $this->login_model->total_questions();
                $answer_array = $this->login_model->questions_answer();
                if($total_count_questions > 0){
                    for($x=1;$x<=$total_count_questions;$x++){
                        if(isset($_POST["ques_opt_".$x])){
                            $users_ans[$x] = $_POST["ques_opt_".$x];
                        }else{
                            $users_ans[$x] = 'NA';
                        }
                    }
                }          
            }
          $correct_answers = $this->login_model->correct_answers($users_ans,$answer_array,$total_count_questions);  
          $data["reports"] = $correct_answers;
          $data["username"] = $_POST["username"];
          $this->load->view("Dashboard/reports",$data); 
          
        }

       
}
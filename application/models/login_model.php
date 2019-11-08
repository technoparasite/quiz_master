<?php
Class login_model extends CI_Model
{
    public function __construct() 
    {
        parent::__construct(); 
        $this->load->database();    
    }

    public function insert_users($data){
        if($this->db->insert('login_tbl',$data)){
            return 1;
        }else{
            return 0;
        }
    }

    public function questions(){
        $sql_query     = "select * from questions";
        $question_res  = $this->db->query($sql_query);
        $question_arr  = array();
        if($question_res->num_rows() > 0){
            foreach($question_res->result('array') as $q_rows){
                $question_arr[$q_rows["q_id"]] = $q_rows;              
            }
        }
        return $question_arr;
    }

    public function total_questions(){
        $sql_query     = "select count(*) from questions";
        $question_res  = $this->db->query($sql_query);
        $question_arr  = array();
        if($question_res->num_rows() > 0){
            foreach($question_res->result('array') as $q_rows){
                $question_arr["count"] = $q_rows["count(*)"];              
            }
        }
        return $question_arr["count"];
    }

    public function questions_answer(){
        $sql_query     = "select q_id,answer from questions";
        $answer_res  = $this->db->query($sql_query);
        $answer_arr  = array();
        if($answer_res->num_rows() > 0){
            foreach($answer_res->result('array') as $q_rows){
                $answer_arr[$q_rows["q_id"]] = $q_rows["answer"];              
            }
        }
     //   echo "<pre>";print_r($answer_arr);
      return $answer_arr;
    }

    public function correct_answers($users_ans,$answer_array,$total_ques){
          $correct_answers = 0;
          $wrong_answers = 0;
          $not_answered = 0;
          $answered = 0;
          $total_marks = intval(100/$total_ques);
          $total_answered = array();
          foreach($answer_array as $key=>$ans){
             if($users_ans[$key] == $ans){
                 $correct_answers++;
             }else if($users_ans[$key] === 'NA'){
                 $not_answered++;
             }else{
                $wrong_answers++;
             }
          }
          $correct_marks = '';
          $correct_marks = $total_marks * $correct_answers;
          $percentage = ($correct_answers/$total_ques)*100;
          $total_answered= array(
                        "correct_answer" => $correct_answers,
                        "not_answered"   => $not_answered,
                        "wrong_answer"   => $wrong_answers,
                        "total_marks"    => "100",
                        "correct_marks"  => $correct_marks,
                        "percentage"     => floor($percentage)
          );
          
          $correct_answers = 0;
          $not_answered  = 0;
          $wrong_answers = 0;
          $correct_marks ='';
          return $total_answered;  
          
    }





}
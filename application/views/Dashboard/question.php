<div class="container">
    <div class="question_container">
    <form method="POST" action="<?php echo base_url()?>question_controller/answers">
    <input type="hidden" name="username" value="<?php echo $username?>"/>
    <?php 
     if(isset($fetch_question)){
         if(count($fetch_question) > 0){
            $i=1;
                foreach($fetch_question as $questions){ ?>
                    
                    <div class="well">
                        <span id="question-text"><?php echo $questions["q_ques"];?></span>
                         <div class="options">
                            <input type="radio" name="ques_opt_<?php echo $questions["q_id"];?>" id="ques_opt_<?php echo $i;?>" value="<?php echo $questions["option_1"];?>"/><span id="option_text"><?php echo $questions["option_1"];?></span>                         
                            <input type="radio" name="ques_opt_<?php  echo $questions["q_id"];?>" id="ques_opt_<?php echo $i;?>" value="<?php echo $questions["option_2"];?>"/><span id="option_text"><?php echo $questions["option_2"];?></span>
                            <input type="radio" name="ques_opt_<?php  echo $questions["q_id"];?>" id="ques_opt_<?php echo $i;?>" value="<?php echo $questions["option_3"];?>"/><span id="option_text"><?php echo $questions["option_3"];?></span>
                            <input type="radio" name="ques_opt_<?php  echo $questions["q_id"];?>" id="ques_opt_<?php echo $i;?>" value="<?php echo $questions["option_4"];?>"/><span id="option_text"><?php echo $questions["option_4"];?></span>
                         </div>
                    </div>

                <?php  $i++;  } 
                
         }else{?>
           <div class="well">
               <p>No Quiz Questions Found</p>
           </div> 
         <?php }
     }else{?>
          <div class="well">
               <p>No Data Found</p>
           </div>   
     <?php }
    ?>
    <div class="form-group">
        <input type="submit" name="answer" class="btn btn-primary" value="submit"/>
    </div>
    </form>
    </div>
</div>
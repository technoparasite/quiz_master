$(document).ready(function(){
    $("#start_quiz").on('click',function(){
           var start = "start";
            $.ajax({
               url:"<?php echo base_url(). 'login_controller/quiz_start';?>",
               method:'POST',
               data:{"start":start},
               success:function(data){
                   console.log(data);
               } 
           });
    });
});
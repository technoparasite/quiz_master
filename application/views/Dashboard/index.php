<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Welcome To Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo ADMIN;?>css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo ADMIN;?>css/css/home_page.css">
       
  
    </head>
    <body id="dashboard_screen">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
      <!--Dashboard Navigation Bar Start-->
      <?php
         if(isset($user_details["lg_name"])){
             $user = $user_details["lg_name"];
         }else{
             $user = "unknown";
         }

         if(isset($user_details["lg_contact"])){
             $contact = $user_details["lg_contact"];
         }else{
             $contact = '';
         }

         if(isset($user_details["lg_email"])){
             $email = $user_details["lg_email"];
         }else{
             $email = '';
         }
      ?>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
               <div class="navbar-header">
                <a class="navbar-brand" style="color:white;">Welcome To Quiz Master</a>
               </div>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#" style="color:white;"><?php echo strtoupper($user);?></a></li>
            </ul>
            </div>
        </nav>
        <!--End of Navigation Bar-->
        <div class="details">
            <h2 style="text-decoration:underline;text-align:center;margin-bottom:0.4rem;padding:0.4rem 0.1rem;">Personal Details</h2>
             <div class="person_information">
                <p>User Name :&nbsp;<span><?php echo $user;?></span></p>
                <p>Contact   :&nbsp;<span><?php echo $contact;?></span></p>
                <p>Email     :&nbsp;<span><?php echo $email;?></span></p>
             </div>   
        </div>
        <div class="rows" id="next_block">

            <div class="col-md-11 col-sm-11 col-xs-11" id="wrapper_content">
              <button type="button" id="start_quiz" class='btn btn-success' >START QUIZ</button>     
            </div>
        </div>
        

      <script type="text/javascript" src="<?php echo ADMIN; ?>js/jquery.js"></script>
      <script type="text/javascript" src="<?php echo ADMIN; ?>js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo ADMIN; ?>js/jquery.js"></script>
     <!-- <script type="text/javascript" src="<?php// echo ADMIN; ?>js/script_dashboard.js"></script>   -->
   <script>
   $(document).ready(function(){
        $(document).keydown(function (e) {  
            return (e.which || e.keyCode) != 116;  
        }); 
    $("#start_quiz").on('click',function(){
           var start = "start";
           var username ="<?php echo $user;?>";
            $.ajax({
               url:"<?php echo base_url(). 'login_controller/quiz_start';?>",
               method:'POST',
               data:{"start":start,"user":username},
               success:function(data){
                  $(".details").css("display","none"); 
                  $("#wrapper_content").html(data);
                  
               } 
           });
        });
    });
    </script>
    </body>
</html>
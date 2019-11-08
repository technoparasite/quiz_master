<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo ADMIN;?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo ADMIN;?>css/css/home_page.css">
        <style>
       
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
        
             <div class="login_form">
                           
                <form class="form-horizontal" method="POST" action="<?php echo base_url();?>login_controller/dashboard">
                <fieldset>
                    <legend>SignUp</legend>
                    <div class="form-group row">
                         <label class="control-label col-sm-4">Name</label>
                         <div class="col-sm-7">
                            <input type="text" class="form-control" name="lg_name"/>
                         </div>   
                    </div>
                    <div class="form-group row">
                         <label class="control-label col-sm-4">Contact</label>
                         <div class="col-sm-7">
                            <input type="text" class="form-control" name="lg_contact"/>
                         </div>   
                    </div>
                    <div class="form-group row">
                         <label class="control-label col-sm-4">Email</label>
                         <div class="col-sm-7">
                            <input type="email" class="form-control" name="lg_email"/>
                         </div>   
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="submit" value="Login"/>
                    </div>
</fieldset>
                </form>
                
             </div>   
            
        </div>
        <script src="" async defer></script>
    </body>
</html>
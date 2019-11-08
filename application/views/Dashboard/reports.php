<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reports</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo ADMIN;?>css/css/home_page.css">
</head>
<body>
<div class="container" id="report_div">
<?php
 if(isset($reports)){?>
    <h3 style="text-align:center;">Your Score Card &nbsp;<?php echo $username;?></h3>

    
    <div class="card" style="width:80%;text-align:center; padding:0.4rem 0.3rem;
      margin:0 auto;margin-bottom:0.3rem;">
        <div class="card-header">
        <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $reports["percentage"];?>"
  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $reports["percentage"];?>%;">
    <?php echo $reports["percentage"];?>%
  </div>
</div>
        </div>
        <div class="card-body">
            <p>Correct Answer : <?php echo $reports["correct_answer"];?></p>
            <p>Not Answered : <?php  echo $reports["not_answered"];?></p>
            <p>Wrong Answer : <?php echo $reports["wrong_answer"];?></p>
            <p>Total Marks: <?php echo $reports["total_marks"];?></p>
            <p>obtained Marks : <?php echo $reports["correct_marks"];?></p>
            <p>percentage : <?php echo $reports["percentage"];?>&nbsp;%</p>
        </div>
        <button type="button" class="btn btn-warning" id="logout">LOGOUT</button>
    </div>
<?php
 }
?>
</div>
<script type="text/javascript" src="<?php echo ADMIN; ?>js/jquery.js"></script>
 <script type="text/javascript" src="<?php echo ADMIN; ?>js/bootstrap.min.js"></script>
 <script type="text/javascript" src="<?php echo ADMIN; ?>js/jquery.js"></script>
<script>
    $(document).ready(function(){
        $("#logout").on('click',function(){
            window.open("<?php echo base_url();?>","_self"); 
        });
    });
</script>
</body>
</html>

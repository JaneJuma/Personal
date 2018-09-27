<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>

    body{
        background-color: #000;
    }
        .login-form {
        width: 340px;
        margin: 50px auto;
    }
    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }

     .form-control:focus{
        border-color: #f7f7f7;
    }

    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
        color: #ff7200;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
        
    }
    .form-group a{
        color: #ff7200;
    }

   
    </style>
</head>
<body>
<div class="col-md-10"> 



<div class="login-form">
    <form action="<?php echo base_url(); ?>validation/login_validation" method="post" enctype="multipart/form-data">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email">
            <span class="text-danger"><?php echo form_error('email'); ?></span>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <span class="text-danger"><?php echo form_error('password'); ?></span>
        </div>
        <div class="form-group">
            <input type="submit" value="submit" class="btn btn-primary btn-block" style="background-color: #000;">


            <?php
            echo '<label class="text-danger">' .$this->session->flashdata("error");
            ?>


        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right" style="color: #4d4d4d;">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="<?php echo base_url(''); ?>index.php/main/registration" style="color: #fff;">Create an Account</a></p>

</div>

</div><!-- col-md-10 -->
</body>
</html>


<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('')?>assets/css/style.css">

</head>

<body>
<div class="row" id="header">
   <div class="col-md-4"></div>
   <div class="col-md-4" id="logo">
   	  <h1 style="font-family: showcard gothic;"><a href="<?php echo base_url(''); ?>index.php/main/dashboard">Salama Travel</a></h1>
   </div>
   <div class="col-md-4"></div>
	
</div>

<div class="row" id="body">
	<div class="col-md-2" id="nav">

	<img src="<?php echo base_url(); ?>/assets/images/avatar.png" class="avatar">



	<ul class="navtext">
	 <li><a href="<?php echo base_url(''); ?>index.php/main/index">Login</a></li>
	 <li><a href="<?php echo base_url(''); ?>index.php/main/registration">Registration</a></li><hr>
	 <li><a href="<?php echo base_url(''); ?>index.php/main/dashboard">DASHBOARD</a></li>
	 <H4 class="bus" style="color: #fff;">BUS</H4>
	 <li><a href="<?php echo base_url(''); ?>index.php/main/bus_info">bus info</a></li>
	 <li><a href="<?php echo base_url(''); ?>index.php/main/route_info">routes info</a></li>
	 <li><a href="<?php echo base_url(''); ?>index.php/main/schedules">schedules</a></li>
	 <li><a href="<?php echo base_url(''); ?>index.php/main/editschedule">edit schedule</a></li>
	 <li><a href="<?php echo base_url(''); ?>index.php/main/view_buses">view buses</a></li>
	 <h4 class="book" style="color: #fff;">BOOKING</h4>
	 <li><a href="<?php echo base_url(''); ?>index.php/main/ticketing">ticketing</a></li>
	  <li><a href="<?php echo base_url(''); ?>index.php/main/ticketreturn">ticket return</a></li>
     <li><a href="<?php echo base_url(''); ?>index.php/main/payment">PAYMENT</a></li>

	  
	</ul>

	</div>

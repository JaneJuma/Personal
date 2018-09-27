<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="col-md-10">
		
	<legend class=""><h1 style="color: #f9a602;">Write Your Own Schedule</h1></legend>



<form action="<?php echo base_url(); ?>validation/editschedule_validation" method="post">
  <h6 style="color: #fff;">First name:<h6><br>
  <input type="text" name="first_name"><br>
  <span class="text-danger"><?php echo form_error('first_name'); ?></span>

  <h6 style="color: #fff;">Last name:<h6><br>
  <input type="text" name="last_name"><br>
  <span class="text-danger"><?php echo form_error('last_name'); ?></span>

   <h6 style="color: #fff;">Departing Time:<h6><br>
  <input type="date" name="departing_time"><br><br>
  <span class="text-danger"><?php echo form_error('departing_time'); ?></span>

   <h6 style="color: #fff;">Source:<h6><br>
  <input type="text" name="source"><br><br>
  <span class="text-danger"><?php echo form_error('source'); ?></span>

   <h6 style="color: #fff;">Destination:<h6><br>
  <input type="text" name="destination"><br><br>
  <span class="text-danger"><?php echo form_error('destination'); ?></span>

  <input type="submit" value="Submit">
</form>
</div>
</body>

</html>





<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="color: #f9a602;">

	<div class="col-md-10">
		<legend class=""><h1 style="color: #f9a602;">Return ticket</h1></legend>


		<form action="<?php echo base_url(); ?>index.php/validation/ticketreturn_validation" method="post">
  Full names:<br>
  <input type="text" name="full_names"><br>
  <span class="text-danger"><?php echo form_error('full_names'); ?></span>

  Id no:<br>
  <input type="text" name="id_no"><br>
  <span class="text-danger"><?php echo form_error('id_no'); ?></span>

  Ticket no:<br>
  <input type="text" name="ticket_no"><br><br>
  <span class="text-danger"><?php echo form_error('ticket_no'); ?></span>

  <input type="submit" value="Submit">
</form>

	</div>

</body>
</html>



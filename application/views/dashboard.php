<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">

<div class="col-md-10">

<div class="row">
<div class="col-md-4 rectangle"><a href="<?php echo base_url(); ?>index.php/main/dashboard""><img src="<?php echo base_url(); ?>/assets/images/iconb.png" class="iconb" style="margin: 20px 55px;"></div>
<div class="col-md-4 rectangle"><center><a href="<?php echo base_url(); ?>index.php/main/ticketing"><img src="<?php echo base_url(); ?>/assets/images/icona.png" class="icona" style="margin-top: 20px;"></a></div>
<div class="col-md-4 rectangle"><center><a href="<?php echo base_url(); ?>index.php/main/ticketreturn"><img src="<?php echo base_url(); ?>/assets/images/iconc.png" class="icona" style="margin-top: 20px;"></a></div>
<div class="col-md-4 rectangle"><center><a href="<?php echo base_url(); ?>index.php/main/schedules""><img src="<?php echo base_url(); ?>/assets/images/icond.png" class="icond" style="margin-top: 20px;"></a></div>
</div>

<div class="row">
<div class="col-md-4 rectangle"><center><a href="<?php echo base_url(); ?>index.php/main/editschedule"><img src="<?php echo base_url(); ?>/assets/images/icone.png" class="icone" style="margin-top: 20px;"></a></div>
<div class="col-md-4 rectangle"><center><a href="<?php echo base_url(); ?>index.php/main/schedules"><img src="<?php echo base_url(); ?>/assets/images/iconf.png" class="iconf" style="margin-top: 20px;"></a></div>
<div class="col-md-4 rectangle"><center><a href="<?php echo base_url(); ?>index.php/main/print_ticket"><img src="<?php echo base_url(); ?>/assets/images/icong.png" class="icong" style="margin-top: 20px;"></a></div>
<div class="col-md-4 rectangle"><center><a href="<?php echo base_url(); ?>index.php/main/finalization"><img src="<?php echo base_url(); ?>/assets/images/iconh.png" class="iconh" style="margin-top: 20px;"></a></div>
</div>

	
<?php echo form_open('validation/logout'); ?>
         <!--Submit Buttons-->
    <?php $data = array("value" => "Logout",
                    "name" => "submit",
                    "class" => "btn btn-primary logout"); ?>
    <?php echo form_submit($data); ?>
    <?php echo form_close(); ?>

	
	</div>
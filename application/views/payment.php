<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="col-md-10">

<span class="text-danger"><?php echo validation_errors(); ?></span>

<div class="container">
	<div class="row-fluid">
      <form method="post" class="form-horizontal" action="<?php echo base_url(); ?>index.php/validation/payment_validation">
        <fieldset>
          <div id="legend">
            <legend class=""><h1 style="color: #fff;">Make your payment</h1></legend>
          </div>
     
          <!-- Name -->
          <div class="control-group">
            <label class="control-label"  for="holders_name" style="color: #f9a602;">Card Holder's Name</label>
            <div class="controls">
              <input type="text" id="holders_name" name="holders_name" placeholder="" class="input-xlarge"/>
            </div>
          </div>
     
          <!-- Card Number -->
          <div class="control-group">
            <label class="control-label" for=card_number style="color: #f9a602;">Card Number</label>
            <div class="controls">
              <input type="text" id="card_number" name="card_number" placeholder="" class="input-xlarge"/>
            </div>
          </div>
     
          <!-- Expiry-->
          <div class="control-group">
            <label class="control-label" for="expiry_date" style="color: #f9a602;">Card Expiry Date</label>
            <br>
            <input type="date" name="expiry_date">
            <!-- iv class="controls"> -->
              <!-- select class="span3" name="expiry_date" id="expiry_date"> -->
                <!-- option></option> -->
                <!-- option value="01">Jan (01)</option> -->
                <!-- option value="02">Feb (02)</option> -->
                <!-- option value="03">Mar (03)</option> -->
                <!-- option value="04">Apr (04)</option> -->
                <!-- option value="05">May (05)</option> -->
                <!-- option value="06">June (06)</option> -->
                <!-- option value="07">July (07)</option> -->
                <!-- option value="08">Aug (08)</option> -->
                <!-- option value="09">Sep (09)</option> -->
                <!-- option value="10">Oct (10)</option>1 -->
                <!-- option value="11">Nov (11)</option> -->
                <!-- option value="12">Dec (12)</option> -->
              <!-- /select> -->
              <!-- select class="span2" name="expiry_year"> -->
                <!-- option value="13">2013</option> -->
                <!-- option value="14">2014</option> -->
                <!-- option value="15">2015</option> -->
                <!-- option value="16">2016</option> -->
                <!-- option value="17">2017</option> -->
                <!-- option value="18">2018</option> -->
                <!-- option value="19">2019</option> -->
                <!-- option value="20">2020</option> -->
                <!-- option value="21">2021</option> -->
                <!-- option value="22">2022</option> -->
                <!-- option value="23">2023</option> -->
              <!-- /select> -->
            <!-- /div> -->
          <!-- /div> -->
     
          <!-- CVV -->
          <div class="control-group">
            <label class="control-label"  for="card_cvv" style="color: #f9a602;">Card CVV</label>
            <div class="controls">
              <input type="text" id="card_cvv" name="card_cvv" placeholder="" class="span2"/>
            </div>
          </div>
     
          <!-- Save card -->
          <div class="control-group">
            <div class="controls">
              <label class="checkbox" for="save_card">
                <input type="checkbox" id="save_card" value="option1"/>
               <p style="color: #fff;">Save card on file?</p>
              </label>
            </div>
          </div>
     
          <!-- Submit -->
          <div class="control-group">
            <div class="controls">
              <input type="submit" class="btn btn-primary btn-lg active" style="background-color: #f9a602;"></input>
            </div>
          </div>
     
        </fieldset>
      </form>
    </div>
</div>

</div><!-- 10 -->


</body>
</html>


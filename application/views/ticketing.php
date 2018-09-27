<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>


</head>
<body>

<div class="col-md-10">

 <span class="text-danger"><?php echo validation_errors(); ?></span>



<legend class=""><h1 style="color: #f9a602;">Make your booking</h1></legend>


<div class="bar" style="background-color: #fff; height: 50px;">
    <div class="sub" style="background-color: #000; height: 30px; width: 19%;">
        <h3 style="color: #fff;">DATE$LOCATIONS</h3>
    </div>
</div><!-- bar -->

<div class="button" style="margin-top: 20px;">
<button type="button" class="btn btn-primary btn-sm active" style="background-color: #ff7200;">One Way</button>
<button type="button" class="btn btn-secondary btn-sm active">Roundtrip</button>
</div>


<div class="ticket" style="background-color: #f9a602; height: 50%;">
<div class="bs-example">


    <form method="post" action="<?php echo base_url(); ?>index.php/validation/ticketing_validation">

    <div class="row">
            <div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="First Name" style="margin-top: 10px;"></div>
        
            <div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name" style="margin-top: 10px;"></div>
           
            </div>          

        <div class="row">
            <div class="col-xs-12">
            <h4>Departing Time</h4>
                <input type="date" class="form-control input-sm" name="departing_date" placeholder="Large input">
                
            </div>
            
        </div>
        <br>
        
        <br>
        <div class="row">
            <div class="col-xs-6">
            <h4>Source:</h4>
            <select class="form-control input-sm" name="source" class="form-control">
            
                    <option>...choose...</option>
                    <option>Nairobi</option>
                    <option>Nairobi</option>
                    <option>Nairobi</option>
                    <option>Nairobi</option>
                    <option>Nairobi</option>
                    <option>Nairobi</option>
                    <option>Nairobi</option>
                    <option>Nairobi</option>
                    <option>Nairobi</option>
                </select>
                
            </div>
            <div class="col-xs-6">
            <h4>Destination:</h4>
                <select class="form-control input-sm" name="destination" class="form-control">
                
                    <option>...choose...</option>
                    <option>Kampala</option>
                    <option>Kisumu</option>
                    <option>Busia</option>
                    <option>Embu</option>
                    <option>Mackakos</option>
                    <option>Meru</option>
                    <option>Siaya</option>
                    <option>Moshi</option>
                    <option>Kisii</option>
                </select>
            </div>
        </div>

<div class="btn">
    <input type="submit" class="btn btn-primary btn-lg active" style="background-color: #ff7200;">
</div>

    </form>
</div>
</div><!-- ticket -->


<p style="color: #fff;">select trip type-one way or roundtrip. Then select Departing (and Returning date. From the dropdown menus select your departure and arrival cities. On the next screen you will see available buses,tickets and seats</p>

</div><!-- 10 -->


</body>
</html>




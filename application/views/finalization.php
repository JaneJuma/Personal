<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('')?>assets/css/style.css">
</head>
<body>
	<div class="col-md-10">
        <table action="<?php echo base_url(); ?>" method="get">

		<table>

  <tr class="title" style="color: #fff; margin-right: 20px;">
    <th>first_name</th>
    <th>last_name</th> 
    <th>departing_date</th>
    <th>source</th>
    <th>destination</th>
  
    
  </tr>

<?php if($ticketing) {
      
    foreach($ticketing as $row) {
        echo '<tr class="result" style="color: #fff;">';
        echo '<td>'.$row->first_name.'</td>';
        echo '<td>'.$row->last_name.'</td>';
        echo '<td>'.$row->departing_date.'</td>';
        echo '<td>'.$row->source.'</td>';
        echo '<td>'.$row->destination.'</td>';
        echo '</tr>';
    }
}

?>

</table>


		
	</div>

</body>
</html>
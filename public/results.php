<?php
require('library/includes/functions.php');
require_once('library/includes/db.php');


if(isset($_GET['id'])){
	$id = $_GET['id'];
	
	$query = "SELECT * FROM survey WHERE id = '{$id}'";
	$result = mysqli_query($db, $query);
	$row = mysqli_fetch_assoc($result);
	
}else if(isset($_GET['date'])){
	$refresh = "";
	$date = $_GET['date'];

	$query = "SELECT AVG(leadership1) as leadership1, AVG(leadership2) as leadership2, AVG(leadership3) as leadership3, AVG(leadership4) as leadership4, AVG(leadership5) as leadership5, AVG(leadership6) as leadership6, AVG(customer1) as customer1, AVG(customer2) as customer2, AVG(customer3) as customer3, AVG(customer4) as customer4, AVG(customer5) as customer5, AVG(people1) as people1, AVG(people2) as people2, AVG(people3) as people3, AVG(people4) as people4, AVG(people5) as people5, AVG(people6) as people6, AVG(process1) as process1, AVG(process2) as process2, AVG(process3) as process3, AVG(process4) as process4, AVG(process5) as process5, AVG(process6) as process6, AVG(setting1) as setting1, AVG(setting2) as setting2, AVG(setting3) as setting3, AVG(setting4) as setting4, AVG(technology1) as technology1, AVG(technology2) as technology2, AVG(technology3) as technology3, AVG(technology4) as technology4 FROM survey WHERE date = '{$date}'";
	$result = mysqli_query($db, $query);
	$row = mysqli_fetch_assoc($result);
	
}else{
	$refresh = "content='10'";
	$today = date("Y-m-d");

	$query = "SELECT AVG(leadership1) as leadership1, AVG(leadership2) as leadership2, AVG(leadership3) as leadership3, AVG(leadership4) as leadership4, AVG(leadership5) as leadership5, AVG(leadership6) as leadership6, AVG(customer1) as customer1, AVG(customer2) as customer2, AVG(customer3) as customer3, AVG(customer4) as customer4, AVG(customer5) as customer5, AVG(people1) as people1, AVG(people2) as people2, AVG(people3) as people3, AVG(people4) as people4, AVG(people5) as people5, AVG(people6) as people6, AVG(process1) as process1, AVG(process2) as process2, AVG(process3) as process3, AVG(process4) as process4, AVG(process5) as process5, AVG(process6) as process6, AVG(setting1) as setting1, AVG(setting2) as setting2, AVG(setting3) as setting3, AVG(setting4) as setting4, AVG(technology1) as technology1, AVG(technology2) as technology2, AVG(technology3) as technology3, AVG(technology4) as technology4 FROM survey WHERE date = '{$today}'";
	$result = mysqli_query($db, $query);
	$row = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta http-equiv='refresh' <?= $refresh ?> >
	
	<link rel="icon" href="">

	<title>CX Survey</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Custom styles for this template -->
	<link href="library/css/survey.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>
				<?php if (isset($row['id'])): ?>
					<h4><small>date:</small> <?= $row['date'] ?>
						<small>name:</small> <?= $row['participant'] ?>
						<small>company:</small> <?= $row['company'] ?>
						<small>email:</small> <?= $row['email'] ?>
					</h4>
				<?php endif; ?>
				
			</h3>
		</div>
	</div>
	
	<div class="row" id="colormap">
		
		<div class="col-md-2">
			<div class="row">
				<div class="col-md-12">
					<h4>Leadership</h4>
					<p class="mapbox" id="leadership1" style="background-color: <?= getColor($row['leadership1']) ?>">Clear common purpose</p>
					<p class="mapbox" id="leadership2" style="background-color: <?= getColor($row['leadership2']) ?>">Process for communicating common purpose</p>
					<p class="mapbox" id="leadership3" style="background-color: <?= getColor($row['leadership3']) ?>">Clear responsibility for CX</p>
					<p class="mapbox" id="leadership4" style="background-color: <?= getColor($row['leadership4']) ?>">Leadership commitment to CX</p>
					<p class="mapbox" id="leadership5" style="background-color: <?= getColor($row['leadership5']) ?>">Clear service theme</p>
					<p class="mapbox" id="leadership6" style="background-color: <?= getColor($row['leadership6']) ?>">Approach for measuring CX ROI</p>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="row">
				<div class="col-md-12">
					<h4>Customer</h4>
					<p class="mapbox" id="customer1" style="background-color: <?= getColor($row['customer1']) ?>">Understanding of who your stakeholders are</p>
					<p class="mapbox" id="customer2" style="background-color: <?= getColor($row['customer2']) ?>">Clear profile of ideal customer</p>
					<p class="mapbox" id="customer3" style="background-color: <?= getColor($row['customer3']) ?>">Clear understanding of customer wants and needs</p>
					<p class="mapbox" id="customer4" style="background-color: <?= getColor($row['customer4']) ?>">Clear understanding of customer churn</p>
					<p class="mapbox" id="customer5" style="background-color: <?= getColor($row['customer5']) ?>">Customers who will advocate for your brand</p>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="row">
				<div class="col-md-12">
					<h4>People</h4>
					<p class="mapbox" id="people1" style="background-color: <?= getColor($row['people1']) ?>">Clearly defined hiring profiles and process</p>
					<p class="mapbox" id="people2" style="background-color: <?= getColor($row['people2']) ?>">Clearly defined culture</p>
					<p class="mapbox" id="people3" style="background-color: <?= getColor($row['people3']) ?>">Trained and reinforced culture through ritual</p>
					<p class="mapbox" id="people4" style="background-color: <?= getColor($row['people4']) ?>">Onboarding process that emphasizes culture</p>
					<p class="mapbox" id="people5" style="background-color: <?= getColor($row['people5']) ?>">Clear service standards</p>
					<p class="mapbox" id="people6" style="background-color: <?= getColor($row['people6']) ?>">Monitoring to ensure standards are met</p>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="row">
				<div class="col-md-12">
					<h4>Process</h4>
					<p class="mapbox" id="process1" style="background-color: <?= getColor($row['process1']) ?>">Clear CX process responsibility by department</p>
					<p class="mapbox" id="process2" style="background-color: <?= getColor($row['process2']) ?>">On‐going system for defining and refining processes</p>
					<p class="mapbox" id="process3" style="background-color: <?= getColor($row['process3']) ?>">Effective, methodical training</p>
					<p class="mapbox" id="process4" style="background-color: <?= getColor($row['process4']) ?>">Regular, robust measurement of CX outcomes</p>
					<p class="mapbox" id="process5" style="background-color: <?= getColor($row['process5']) ?>">CX‐focused competitive intelligence</p>
					<p class="mapbox" id="process6" style="background-color: <?= getColor($row['process6']) ?>">Clearly defined problem escalation and resolution</p>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="row">
				<div class="col-md-12">
					<h4>Setting</h4>
					<p class="mapbox" id="setting1" style="background-color: <?= getColor($row['setting1']) ?>">Clearly defined settings</p>
					<p class="mapbox" id="setting2" style="background-color: <?= getColor($row['setting2']) ?>">Design for each setting that supports the common purpose</p>
					<p class="mapbox" id="setting3" style="background-color: <?= getColor($row['setting3']) ?>">Maintenance and update plan for each setting</p>
					<p class="mapbox" id="setting4" style="background-color: <?= getColor($row['setting4']) ?>">Measurement of setting’s impact on CX outcomes</p>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="row">
				<div class="col-md-12">
					<h4>Technology</h4>
					<p class="mapbox" id="technology1" style="background-color: <?= getColor($row['technology1']) ?>">Clear inventory of customer-facing technology</p>
					<p class="mapbox" id="technology2" style="background-color: <?= getColor($row['technology2']) ?>">Clear inventory of employee-supporting technology</p>
					<p class="mapbox" id="technology3" style="background-color: <?= getColor($row['technology3']) ?>">Design that supports the common purpose</p>
					<p class="mapbox" id="technology4" style="background-color: <?= getColor($row['technology4']) ?>">Measurement of technology’s impact on CX outcomes</p>
				</div>
			</div>
		</div>
	</div>
</div> <!-- /container -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src="library/vendor/bootstrap/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
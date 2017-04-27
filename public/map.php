<?php
require('library/includes/functions.php');

if(isset($_POST['submit'])) {
	require_once('library/includes/db.php');
	
	$id = $_POST['id'];
	$technology1 = $_POST['technology1'];
	$technology2 = $_POST['technology2'];
	$technology3 = $_POST['technology3'];
	$technology4 = $_POST['technology4'];
	
	$update_sql = "UPDATE survey SET technology1 = $technology1, technology2 = $technology2, technology3 = $technology3, technology4 = $technology4 WHERE id = $id";
	$update_result = mysqli_query($db, $update_sql);
	
	if($update_result && mysqli_affected_rows($db) == 1) {
		//success
	} else {
		//fail
		header('Location: index.php?m=technology_error');
	}
	
	$sql = "SELECT leadership1, leadership2, leadership3, leadership4, leadership5, leadership6, customer1, customer2, customer3, customer4, customer5, people1, people2, people3, people4, people5, people6, process1, process2, process3, process4, process5, process6, setting1, setting2, setting3, setting4, technology1, technology2, technology3, technology4 FROM survey WHERE id = $id";
	$result = mysqli_query($db, $sql);
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
	<link rel="icon" href="">

	<title>CX Survey</title>

	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Custom styles for this template -->
	<link href="library/css/survey.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Thank you <small>Below you can see the color map of your answers.</small></h3>
		</div>
	</div>
	
	<div class="row" id="colormap">
		<div class="col-md-2">
			<div class="row">
				<div class="col-md-12">
					<h4>Leadership</h4>
					<p class="mapbox" style="background-color: <?= getColor($row['leadership1']) ?>">Clear common purpose</p>
					<p class="mapbox" style="background-color: <?= getColor($row['leadership2']) ?>">Process for communicating common purpose</p>
					<p class="mapbox" style="background-color: <?= getColor($row['leadership3']) ?>">Clear responsibility for CX</p>
					<p class="mapbox" style="background-color: <?= getColor($row['leadership4']) ?>">Leadership commitment to CX</p>
					<p class="mapbox" style="background-color: <?= getColor($row['leadership5']) ?>">Clear service theme</p>
					<p class="mapbox" style="background-color: <?= getColor($row['leadership6']) ?>">Approach for measuring CX ROI</p>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="row">
				<div class="col-md-12">
					<h4>Customer</h4>
					<p class="mapbox" style="background-color: <?= getColor($row['customer1']) ?>">Understanding of who your stakeholders are</p>
					<p class="mapbox" style="background-color: <?= getColor($row['customer2']) ?>">Clear profile of ideal customer</p>
					<p class="mapbox" style="background-color: <?= getColor($row['customer3']) ?>">Clear understanding of customer wants and needs</p>
					<p class="mapbox" style="background-color: <?= getColor($row['customer4']) ?>">Clear understanding of customer churn</p>
					<p class="mapbox" style="background-color: <?= getColor($row['customer5']) ?>">Customers who will advocate for your brand</p>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="row">
				<div class="col-md-12">
					<h4>People</h4>
					<p class="mapbox" style="background-color: <?= getColor($row['people1']) ?>">Clearly defined hiring profiles and process</p>
					<p class="mapbox" style="background-color: <?= getColor($row['people2']) ?>">Clearly defined culture</p>
					<p class="mapbox" style="background-color: <?= getColor($row['people3']) ?>">Trained and reinforced culture through ritual</p>
					<p class="mapbox" style="background-color: <?= getColor($row['people4']) ?>">Onboarding process that emphasizes culture</p>
					<p class="mapbox" style="background-color: <?= getColor($row['people5']) ?>">Clear service standards</p>
					<p class="mapbox" style="background-color: <?= getColor($row['people6']) ?>">Monitoring to ensure standards are met</p>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="row">
				<div class="col-md-12">
					<h4>Process</h4>
					<p class="mapbox" style="background-color: <?= getColor($row['process1']) ?>">Clear CX process responsibility by department</p>
					<p class="mapbox" style="background-color: <?= getColor($row['process2']) ?>">On‐going system for defining and refining processes</p>
					<p class="mapbox" style="background-color: <?= getColor($row['process3']) ?>">Effective, methodical training</p>
					<p class="mapbox" style="background-color: <?= getColor($row['process4']) ?>">Regular, robust measurement of CX outcomes</p>
					<p class="mapbox" style="background-color: <?= getColor($row['process5']) ?>">CX‐focused competitive intelligence</p>
					<p class="mapbox" style="background-color: <?= getColor($row['process6']) ?>">Clearly defined problem escalation and resolution</p>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="row">
				<div class="col-md-12">
					<h4>Setting</h4>
					<p class="mapbox" style="background-color: <?= getColor($row['setting1']) ?>">Clearly defined settings</p>
					<p class="mapbox" style="background-color: <?= getColor($row['setting2']) ?>">Design for each setting that supports the common purpose</p>
					<p class="mapbox" style="background-color: <?= getColor($row['setting3']) ?>">Maintenance and update plan for each setting</p>
					<p class="mapbox" style="background-color: <?= getColor($row['setting4']) ?>">Measurement of setting’s impact on CX outcomes</p>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="row">
				<div class="col-md-12">
					<h4>Technology</h4>
					<p class="mapbox" style="background-color: <?= getColor($row['technology1']) ?>">Clear inventory of customer-facing technology</p>
					<p class="mapbox" style="background-color: <?= getColor($row['technology2']) ?>">Clear inventory of employee-supporting technology</p>
					<p class="mapbox" style="background-color: <?= getColor($row['technology3']) ?>">Design that supports the common purpose</p>
					<p class="mapbox" style="background-color: <?= getColor($row['technology4']) ?>">Measurement of technology’s impact on CX outcomes</p>
				</div>
			</div>
		</div>
	</div>
</div> <!-- /container -->

<!-- jQuery js CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- tether js CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<!-- bootstrap js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src="library/vendor/bootstrap/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
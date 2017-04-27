<?php
require('library/includes/functions.php');
require_once('library/includes/db.php');

$today = date("Y-m-d");

$query = "SELECT * FROM survey ORDER BY recorded";
$result = mysqli_query($db, $query);

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

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Custom styles for this template -->
	<link href="library/css/history.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="row" id="colormap">
	<?php
	while ($row = mysqli_fetch_assoc($result)) {
	?>
		<div class="col-xs-12">
			<div class="row">
				<h4><small>date:</small> <?= $row['date'] ?>
					<small>name:</small> <?= $row['participant'] ?>
					<small>company:</small> <?= $row['company'] ?>
					<small>email:</small> <?= $row['email'] ?>
					<small><a href="results.php?id=<?= $row['id'] ?>">view results</a></small>
				</h4>
			</div>
			
			<div class="row">
				<div class="col-xs-3"><h5>Leadership</h5></div>
				<div class="col-xs-9">
					<div class="row">
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-2">
									<p class="mapbox" id="leadership1" style="background-color: <?= getColor($row['leadership1']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="leadership2" style="background-color: <?= getColor($row['leadership2']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="leadership3" style="background-color: <?= getColor($row['leadership3']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="leadership4" style="background-color: <?= getColor($row['leadership4']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="leadership5" style="background-color: <?= getColor($row['leadership5']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="leadership6" style="background-color: <?= getColor($row['leadership6']) ?>">&nbsp;</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-3"><h5>Customer</h5></div>
				<div class="col-xs-9">
					<div class="row">
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-2">
									<p class="mapbox" id="customer1" style="background-color: <?= getColor($row['customer1']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="customer2" style="background-color: <?= getColor($row['customer2']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="customer3" style="background-color: <?= getColor($row['customer3']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="customer4" style="background-color: <?= getColor($row['customer4']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="customer5" style="background-color: <?= getColor($row['customer5']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2"><p>&nbsp;</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-3"><h5>People</h5></div>
				<div class="col-xs-9">
					<div class="row">
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-2">
									<p class="mapbox" id="people1" style="background-color: <?= getColor($row['people1']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="people2" style="background-color: <?= getColor($row['people2']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="people3" style="background-color: <?= getColor($row['people3']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="people4" style="background-color: <?= getColor($row['people4']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="people5" style="background-color: <?= getColor($row['people5']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="people6" style="background-color: <?= getColor($row['people6']) ?>">&nbsp;</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-3"><h5>Process</h5></div>
				<div class="col-xs-9">
					<div class="row">
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-2">
									<p class="mapbox" id="process1" style="background-color: <?= getColor($row['process1']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="process2" style="background-color: <?= getColor($row['process2']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="process3" style="background-color: <?= getColor($row['process3']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="process4" style="background-color: <?= getColor($row['process4']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="process5" style="background-color: <?= getColor($row['process5']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="process6" style="background-color: <?= getColor($row['process6']) ?>">&nbsp;</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-3"><h5>Setting</h5></div>
				<div class="col-xs-9">
					<div class="row">
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-2">
									<p class="mapbox" id="setting1" style="background-color: <?= getColor($row['setting1']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="setting2" style="background-color: <?= getColor($row['setting2']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="setting3" style="background-color: <?= getColor($row['setting3']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="setting4" style="background-color: <?= getColor($row['setting4']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2"><p>&nbsp;</p></div>
								<div class="col-xs-2"><p>&nbsp;</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-3"><h5>Technology</h5></div>
				<div class="col-xs-9">
					<div class="row">
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-2">
									<p class="mapbox" id="technology1" style="background-color: <?= getColor($row['technology1']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="technology2" style="background-color: <?= getColor($row['technology2']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="technology3" style="background-color: <?= getColor($row['technology3']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2">
									<p class="mapbox" id="technology4" style="background-color: <?= getColor($row['technology4']) ?>">&nbsp;</p>
								</div>
								<div class="col-xs-2"><p>&nbsp;</p></div>
								<div class="col-xs-2"><p>&nbsp;</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
	<?php
	}
	?>
	
	</div>
	
</div> <!-- /container -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src="library/vendor/bootstrap/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
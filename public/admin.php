<?php
require_once('library/includes/db.php');
$today = date("Y-m-d");

$date_query = "SELECT id, date, participant, email, company FROM survey ORDER BY date ASC";
$date_result = mysqli_query($db, $date_query);
$dates = [];
while($row = mysqli_fetch_assoc($date_result)){
	$dates[$row['date']][] = $row;
}

$email_query = "SELECT * FROM survey ORDER BY email";
$email_result = mysqli_query($db, $email_query);
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Survey</title>
	
	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- Custom styles -->
	<link href="library/css/history.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-xs-6">
			<h2><a href="results.php">Today's Results</a></h2>
		</div>
		<div class="col-xs-6">
			<h2><a href="history.php">Full History</a></h2>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-12">
			<h3>Break Down</h3>
		</div>
	</div>
	
	<?php foreach($dates as $survey => $values): ?>
	<div class="row bd-date">
		<div class="col-xs-12 col-sm-3">
			<h4><a href="results.php?date=<?= $survey ?>"><?= $survey ?></a></h4>
		</div>
		<div class="col-xs-12 col-sm-9">
		<?php foreach($values as $val): ?>
			<div class="row bd-user">
				<div class="col-xs-12 col-sm-3">
					<a href="results.php?id=<?= $val['id'] ?>"><?= $val['participant'] ?></a>
				</div>
				<div class="col-xs-12 col-sm-3">
					<?= $val['company'] ?>
				</div>
				<div class="col-xs-12 col-sm-3">
					<?= $val['email'] ?>
				</div>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
	<?php endforeach; ?>
	
	
</div> <!-- /container -->

<!-- jQuery js CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- tether js CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<!-- bootstrap js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src="vendor/bootstrap/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
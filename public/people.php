<?php

if(isset($_POST['submit'])) {
	require_once('library/includes/db.php');
	
	$id = $_POST['id'];
	$customer1 = $_POST['customer1'];
	$customer2 = $_POST['customer2'];
	$customer3 = $_POST['customer3'];
	$customer4 = $_POST['customer4'];
	$customer5 = $_POST['customer5'];
	
	$update_sql = "UPDATE survey SET customer1 = $customer1, customer2 = $customer2, customer3 = $customer3, customer4 = $customer4, customer5 = $customer5 WHERE id = $id";
	$update_result = mysqli_query($db, $update_sql);
	
	if($update_result && mysqli_affected_rows($db) == 1) {
		//success
		
	} else {
		//fail
		header('Location: index.php?m=customer_error');
	}
	
}else{
	header("Location: index.php");
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

	<title>People</title>

	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Custom styles for this template -->
	<link href="library/css/survey.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<form class="form-signin" method="post" action="process.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		
		<h2>People</h2>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Clearly defined hiring profiles and process</h5>
				<p>The organization has a clearly defined and documented hiring profile for all positions, including skills and attributes that indicate a cultural fit, and a clear, consistent process for identifying, screening, and hiring new employees.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="people1" id="q12o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="people1" id="q12o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="people1" id="q12o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Clearly defined culture</h5>
				<p>The organization has described and documented its intended culture, including shared values and behaviors.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="people2" id="q13o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="people2" id="q13o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="people2" id="q13o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Trained and reinforced culture through ritual</h5>
				<p>The organization consistently and regularly trains incoming employees on the culture, and reinforces the culture through repeated rituals that emphasize the organization’s values and goals.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="people3" id="q14o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="people3" id="q14o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="people3" id="q14o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Onboarding process that emphasizes culture</h5>
				<p>The organization’s onboarding process for new hires focuses on cultural alignment first.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="people4" id="q15o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="people4" id="q15o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="people4" id="q15o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Clear service standards</h5>
				<p>The organization has clearly defined and trains employees and contractors on its service standards, including the priority order for the standards.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="people5" id="q16o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="people5" id="q16o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="people5" id="q16o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Monitoring to ensure standards are met</h5>
				<p>The organization has processes in place to monitor employee and contractor success at delivering services that complies with the service standards.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="people6" id="q17o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="people6" id="q17o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="people6" id="q17o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<input type="submit" class="btn btn-lg btn-primary" name="submit" id="submit" value="Next" />
	</form>
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
<?php

if(isset($_POST['submit'])) {
	require_once('library/includes/db.php');
		
	$id = $_POST['id'];
	$leadership1 = $_POST['leadership1'];
	$leadership2 = $_POST['leadership2'];
	$leadership3 = $_POST['leadership3'];
	$leadership4 = $_POST['leadership4'];
	$leadership5 = $_POST['leadership5'];
	$leadership6 = $_POST['leadership6'];
	
	$update_sql = "UPDATE survey SET leadership1 = '{$leadership1}', leadership2 = '{$leadership2}', leadership3 = '{$leadership3}', leadership4 = '{$leadership4}', leadership5 = '{$leadership5}', leadership6 = '{$leadership6}' WHERE id = '{$id}'";
	$update_result = mysqli_query($db, $update_sql);
	
	if($update_result && mysqli_affected_rows($db) == 1) {
		//success
	} else {
		//fail
		header('Location: index.php?m=Please%20re-enter%20your%20email%20to%20return%20to%20the%20survey.');
	}
	
} else {
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

	<title>Customer</title>

	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Custom styles for this template -->
	<link href="library/css/survey.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<form class="form-signin" method="post" action="people.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		
		<h2>Customer</h2>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Understanding of who your stakeholders are</h3>
				<p>The organization understands not only who its paying customers are, but those who have the ability to impact the organization’s ability to do business and fulfill the common purpose, such as regulators, employees, and partner organizations.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="customer1" id="q7o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="customer1" id="q7o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="customer1" id="q7o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Clear profile of ideal customer</h3>
				<p>The organization has a clear, documented profile of its ideal customer, even if some customers do not fit that profile.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="customer2" id="q8o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="customer2" id="q8o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="customer2" id="q8o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Clear understanding of customer wants and needs</h3>
				<p>The organization has a clear understanding of the ideal customer's wants and needs, and regularly updates that information based on feedback from existing and potential new customers.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="customer3" id="q9o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="customer3" id="q9o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="customer3" id="q9o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Clear understanding of customer churn</h3>
				<p>The organization understands its customer acquisition and retention rates and how much churn there is among existing customers.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="customer4" id="q10o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="customer4" id="q10o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="customer4" id="q10o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Customers who will advocate for your brand</h3>
				<p>The organization has customers who will actively advocate for the organization's brand, and the organization knows who those customers are and what percentage of the organization's customer base they represent.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="customer5" id="q11o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="customer5" id="q11o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="customer5" id="q11o3" value="2">Consistently</label>
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
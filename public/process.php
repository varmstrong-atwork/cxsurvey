<?php

if(isset($_POST['submit'])) {
	require_once('library/includes/db.php');
		
	$id = $_POST['id'];
	$people1 = $_POST['people1'];
	$people2 = $_POST['people2'];
	$people3 = $_POST['people3'];
	$people4 = $_POST['people4'];
	$people5 = $_POST['people5'];
	$people6 = $_POST['people6'];
	
	$update_sql = "UPDATE survey SET people1 = $people1, people2 = $people2, people3 = $people3, people4 = $people4, people5 = $people5, people6 = $people6 WHERE id = $id";
	$update_result = mysqli_query($db, $update_sql);
	
	if($update_result && mysqli_affected_rows($db) == 1) {
		//success
		
	} else {
		//fail
		header('Location: index.php?m=people_error');
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

	<title>Process</title>

	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Custom styles for this template -->
	<link href="library/css/survey.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<form class="form-signin" method="post" action="setting.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		
		<h2>Process</h2>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Clear CX process responsibility by department</h5>
				<p>Each department has one individual who is clearly responsible for ensuring that the department develops, monitors, and improves customer experience processes, while also coordinating with the organization as a whole.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="process1" id="q18o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="process1" id="q18o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="process1" id="q18o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>On‐going system for defining and refining processes</h5>
				<p>The organization has designed and implemented a system that enables the definition and refinement of processes across the organization.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="process2" id="q19o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="process2" id="q19o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="process2" id="q19o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Effective, methodical training</h5>
				<p>The organization has a mature training development and delivery capability that ensures that all employees and contractors understand company processes and how to deliver service in support of the common purpose.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="process3" id="q20o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="process3" id="q20o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="process3" id="q20o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Regular, robust measurement of CX outcomes</h5>
				<p>The organization routinely and effectively measures real‐world quantifiable outcomes of customer experience, such as increased customer loyalty, increased customer spending, word‐of‐mouth marketing, or new product adoption.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="process4" id="q21o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="process4" id="q21o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="process4" id="q21o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>CX‐focused competitive intelligence</h5>
				<p>The organization routinely and methodically evaluates the customer experience delivered by competitors, including changing customer needs and wants caused by improvements across the industry.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="process5" id="q22o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="process5" id="q22o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="process5" id="q22o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Clearly defined problem escalation and resolution</h5>
				<p>The organization has a clear and well‐communicated process for triaging and addressing complaints, suggestions, and other issues that may be brought up by customers and other stakeholders.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="process6" id="q23o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="process6" id="q23o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="process6" id="q23o3" value="2">Consistently</label>
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
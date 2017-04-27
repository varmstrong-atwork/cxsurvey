<?php

if(isset($_POST['submit'])) {
	require_once('library/includes/db.php');
		
	$id = $_POST['id'];
	$process1 = $_POST['process1'];
	$process2 = $_POST['process2'];
	$process3 = $_POST['process3'];
	$process4 = $_POST['process4'];
	$process5 = $_POST['process5'];
	$process6 = $_POST['process6'];
	
	$update_sql = "UPDATE survey SET process1 = $process1, process2 = $process2, process3 = $process3, process4 = $process4, process5 = $process5, process6 = $process6 WHERE id = $id";
	$update_result = mysqli_query($db, $update_sql);
	
	if($update_result && mysqli_affected_rows($db) == 1) {
		//success
		
	} else {
		//fail
		header('Location: index.php?m=process_error');
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

	<title>Setting</title>

	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Custom styles for this template -->
	<link href="library/css/survey.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<form class="form-signin" method="post" action="technology.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		
		<h2>Setting</h2>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Clearly defined settings</h5>
				<p>The organization has a clear list of the settings in which customers and other stakeholders interact with the organization, such as physical stores, web sites, mobile apps, or the setting brought to a customer’s location by a field team.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="setting1" id="q24o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="setting1" id="q24o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="setting1" id="q24o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Design for each setting that supports the common purpose</h5>
				<p>The organization has purposefully and proactively designed each setting to support the common purpose.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="setting2" id="q25o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="setting2" id="q25o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="setting2" id="q25o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Maintenance and update plan for each setting</h5>
				<p>The organization proactively and systematically maintains each setting. The organization regularly revisits each setting in the context of evolving and changing customer needs and wants, and re‐designs and re‐implements as needed.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="setting3" id="q26o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="setting3" id="q26o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="setting3" id="q26o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Measurement of setting’s impact on CX outcomes</h5>
				<p>The organization regularly assesses the effectiveness of each setting at supporting the common practice, and feeds information gained from this assessment back into the maintenance and update plan and budgeting decisions.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="setting4" id="q27o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="setting4" id="q27o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="setting4" id="q27o3" value="2">Consistently</label>
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